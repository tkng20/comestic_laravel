<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        return view('backend.categories.index', compact('categories'));
    }

    public function categoryStatus(Request $request)
    {
        if ($request->mode == "true") {
            DB::table('categories')->where('id', $request->id)->update(['status' => 'active']);
        } else {
            DB::table('categories')->where('id', $request->id)->update(['status' => 'inactive']);
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
        $parent_cats = Category::where('is_parent', 1)->orderBy('title', 'ASC')->get();
        return view('backend.categories.create', compact('parent_cats'));
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
            'summary' => 'string|nullable',
            // 'photo' => 'string|nullable',
            // 'status' => 'required|in:active,inactive',
            'is_parent' => 'sometimes|in:1',
            'parent_id' => 'nullable|exists:categories,id',
        ]);
        $data = $request->all();
        $slug = Str::slug($request->title);
        $slug_count = Category::where('slug', $slug)->count();
        if ($slug_count > 0) {
            $slug = time() . '-' . $slug;
        }
        $data['slug'] = $slug;
        if ($request->is_parent == 1) {
            $data['parent_id'] = null;
            $data['is_parent'] = $request->input('is_parent', 1);
        } else {
            $data['is_parent'] = $request->input('is_parent', 0);
        }
        // return $data;
        $status = Category::create($data);
        if ($status) {
            return redirect()->route('category.index')->with('success', 'Category successfully added');
        } else {
            return back()->with('error', 'Error occurred while adding category');
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
        $category = Category::find($id);
        $parent_cats = Category::where('is_parent', 1)->orderBy('title', 'ASC')->get();
        if ($category) {
            return view('backend.categories.edit', compact(['category', 'parent_cats']));
        } else {
            return back()->with('error', 'No categories found!!! Please create category');
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
        //return $request->all();
        $category = Category::find($id);
        if ($category) {
            $this->validate($request, [
                'title' => 'string|required',
                'summary' => 'string|nullable',
                // 'photo' => 'string|nullable',
                // 'status' => 'required|in:active,inactive',
                'is_parent' => 'sometimes|in:1',
                'parent_id' => 'nullable|exists:categories,id',
            ]);
            $data = $request->all();
            if ($request->is_parent != 1) {
                $data['is_parent'] = $request->input('is_parent', 0);
            } else {
                $data['parent_id'] = null;
                $data['is_parent'] = $request->input('is_parent', 1);
            }

            $status = $category->fill($data)->save();
            if ($status) {
                return redirect()->route('category.index')->with('success', 'Category successfully updated');
            } else {
                return back()->with('error', 'Something went wrong!!!');
            }
        } else {
            return back()->with('error', 'No banners found!!! Please create category');
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
        $category = Category::find($id);
        $child_cat_id = Category::where('parent_id', $id)->pluck('id');
        if ($category) {
            $status = $category->delete();
            if ($status) {
                if (count($child_cat_id) > 0) {
                    Category::shiftChild($child_cat_id);
                }
                return redirect()->route('category.index')->with('success', 'category successfully deleted');
            } else {
                return back()->with('error', 'No categories found!!! Please create category');
            }
        } else {
            return back()->with('error', 'No categories found!!! Please create category');
        }
    }

    public function getChildByParentID(Request $request)
    {
        $category = Category::find($request->id);
        if ($category) {
            $child_id = Category::getChildByParentID($request->id);
            if (count($child_id) <= 0) {
                return response()->json(['status' => false, 'msg' => '', 'data' => null]);
            }
            return response()->json(['status' => true, 'msg' => '', 'data' => $child_id]);
        } else {
            return response()->json(['status' => false, 'msg' => 'Category not found', 'data' => null]);
        }
    }
}
