<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostCategory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PostCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postCategories = PostCategory::orderBy('id', 'DESC')->get();
        return view('backend.postcategories.index', compact('postCategories'));
    }
    public function postCategoryStatus(Request $request)
    {
        if ($request->mode == "true") {
            DB::table('post_categories')->where('id', $request->id)->update(['status' => 'active']);
        } else {
            DB::table('post_categories')->where('id', $request->id)->update(['status' => 'inactive']);
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
        return view('backend.postcategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'string|required',
        ]);

        $data = $request->all();
        $slug = Str::slug($request->input('title'));
        $slug_count = PostCategory::where('slug', $slug)->count();
        if ($slug_count > 0) {
            $slug = time() . '-' . $slug();
        }
        $data['slug'] = $slug;
        // return $data;
        $status = PostCategory::create($data);
        if ($status) {
            return redirect()->route('post_category.index')->with('success', 'Post Category successfully added');
        } else {
            return back()->with('error', 'Error occurred while adding post category');
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
        $postCategory = PostCategory::find($id);
        if ($postCategory) {
            return view('backend.postcategories.edit', compact('postCategory'));
        } else {
            return back()->with('error', 'No post categories found!!! Please create post category');
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
        $postCategory = PostCategory::find($id);
        if ($postCategory) {
            $this->validate($request, [
                'title' => 'string|required',
            ]);

            $data = $request->all();
            $status = $postCategory->fill($data)->save();
            if ($status) {
                return redirect()->route('post_category.index')->with('success', 'Post Category successfully updated');
            } else {
                return back()->with('error', 'Something went wrong!!!');
            }
        } else {
            return back()->with('error', 'No post categories found!!! Please create post category');
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
        $postCategory = PostCategory::find($id);
        if ($postCategory) {
            $status = $postCategory->delete();
            if ($status) {
                return redirect()->route('post_category.index')->with('success', 'Post Category successfully deleted');
            } else {
                return back()->with('error', 'No post categories found!!! Please create post category');
            }
        } else {
            return back()->with('error', 'No post categories found!!! Please create post category');
        }
    }
}
