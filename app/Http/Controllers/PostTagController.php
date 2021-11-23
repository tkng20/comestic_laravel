<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostTag;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PostTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postTags = PostTag::orderBy('id', 'DESC')->get();
        return view('backend.posttags.index', compact('postTags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postTagStatus(Request $request)
    {
        if ($request->mode == "true") {
            DB::table('post_tags')->where('id', $request->id)->update(['status' => 'active']);
        } else {
            DB::table('post_tags')->where('id', $request->id)->update(['status' => 'inactive']);
        }
        return response()->json(['msg' => "Successfully updated status", "status" => true]);
    }
    public function create()
    {
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
        $slug_count = PostTag::where('slug', $slug)->count();
        if ($slug_count > 0) {
            $slug = time() . '-' . $slug();
        }
        $data['slug'] = $slug;
        // return $data;
        $status = PostTag::create($data);
        if ($status) {
            return redirect()->route('post_tag.index')->with('success', 'Post Tag successfully added');
        } else {
            return back()->with('error', 'Error occurred while adding post tag');
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
        $postTag = PostTag::find($id);
        if ($postTag) {
            return view('backend.posttags.edit', compact('postTag'));
        } else {
            return back()->with('error', 'No post tags found!!! Please create post tag');
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
        $postTag = PostTag::find($id);
        if ($postTag) {
            $this->validate($request, [
                'title' => 'string|required',
            ]);

            $data = $request->all();
            $status = $postTag->fill($data)->save();
            if ($status) {
                return redirect()->route('post_tag.index')->with('success', 'Post Tag successfully updated');
            } else {
                return back()->with('error', 'Something went wrong!!!');
            }
        } else {
            return back()->with('error', 'No post tags found!!! Please create post tag');
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
        $postTag = PostTag::find($id);
        if ($postTag) {
            $status = $postTag->delete();
            if ($status) {
                return redirect()->route('post_tag.index')->with('success', 'Post Tag successfully deleted');
            } else {
                return back()->with('error', 'No post tags found!!! Please create post tag');
            }
        } else {
            return back()->with('error', 'No post tags found!!! Please create post tag');
        }
    }
}
