<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $request->all();
        $this->validate($request, [
            'fullname' => 'string|required',
            'usename' => 'string|required',
            'email' => 'string|required|unique:users, email',
            'password' => 'min:4|required',
            'phone' => 'string|required',
            'address' => 'string|nullable',
            'role' => 'required|in:admin,user',
            'status' => 'required|in:active,inactive',
            'photo' => 'string|nullable',
        ]);
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        // return $data;
        $status = User::create($data);
        if ($status) {
            if ($data['role'] == 'admin') {
                return redirect()->route('role_admin.index')->with('success', 'Admin successfully added');
            } else {
                return redirect()->route('role_user.index')->with('success', 'User successfully added');
            }
        } else {
            return back()->with('error', 'Error occurred while adding account');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        if ($user) {
            return view('backend.users.edit', compact('user'));
        } else {
            return back()->with('error', 'No users found!!! Please create user');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if ($user) {
            $this->validate($request, [
                'fullname' => 'string|required',
                'usename' => 'string|nullable',
                'email' => 'string|required',
                'password' => 'min:4|required',
                'phone' => 'string|required',
                'address' => 'string|nullable',
                'role' => 'required|in:admin,user',
                'status' => 'required|in:active,inactive',
                'photo' => 'string|nullable',
            ]);
            $data = $request->all();
            $data['password'] = Hash::make($request->password);
            $status = $user->fill($data)->save();
            if ($status) {
                if ($data['role'] == 'admin') {
                    return redirect()->route('role_admin.index')->with('success', 'Admin successfully updated');
                } else {
                    return redirect()->route('role_user.index')->with('success', 'User successfully updated');
                }
            } else {
                return back()->with('error', 'Something went wrong!!!');
            }
        } else {
            return back()->with('error', 'No banners found!!! Please create user');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if ($user) {
            $status = $user->delete();
            if ($status) {
                if ($user['role'] == 'admin') {
                    return redirect()->route('role_admin.index')->with('success', 'Admin successfully deleted');
                } else {
                    return redirect()->route('role_user.index')->with('success', 'User successfully deleted');
                }
            } else {
                return back()->with('error', 'No accounts found!!! Please create account');
            }
        } else {
            return back()->with('error', 'No accounts found!!! Please create account');
        }
    }
}
