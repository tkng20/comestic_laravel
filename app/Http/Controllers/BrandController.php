<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::orderBy('id', 'DESC')->get();
        return view('backend.brands.index', compact('brands'));
    }
    public function brandStatus(Request $request)
    {
        if ($request->mode == "true") {
            DB::table('brands')->where('id', $request->id)->update(['status' => 'active']);
        } else {
            DB::table('brands')->where('id', $request->id)->update(['status' => 'inactive']);
        }
        return response()->json(['msg' => "Successfully updated status", "status" => true]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request, [
            'title' => 'string|required',
        ]);

        $data = $request->all();
        $slug = Str::slug($request->input('title'));
        $slug_count = Brand::where('slug', $slug)->count();
        if ($slug_count > 0) {
            $slug = time() . '-' . $slug();
        }
        $data['slug'] = $slug;
        // return $data;
        $status = Brand::create($data);
        if ($status) {
            return redirect()->route('brand.index')->with('success', 'Brand successfully added');
        } else {
            return back()->with('error', 'Error occurred while adding brand');
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
        $brand = Brand::find($id);
        if ($brand) {
            return view('backend.brands.edit', compact('brand'));
        } else {
            return back()->with('error', 'No brands found!!! Please create brand');
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
        $brand = Brand::find($id);
        if ($brand) {
            $this->validate($request, [
                'title' => 'string|required',
            ]);

            $data = $request->all();
            $status = $brand->fill($data)->save();
            if ($status) {
                return redirect()->route('brand.index')->with('success', 'Brand successfully updated');
            } else {
                return back()->with('error', 'Something went wrong!!!');
            }
        } else {
            return back()->with('error', 'No brands found!!! Please create brand');
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
        $brand = Brand::find($id);
        if ($brand) {
            $status = $brand->delete();
            if ($status) {
                return redirect()->route('brand.index')->with('success', 'Brand successfully deleted');
            } else {
                return back()->with('error', 'No brands found!!! Please create brand');
            }
        } else {
            return back()->with('error', 'No brands found!!! Please create brand');
        }
    }
}
