<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->get();
        return view('backend.posts.index', compact('posts'));
    }

    public function postStatus(Request $request)
    {
        if ($request->mode == "true") {
            DB::table('posts')->where('id', $request->id)->update(['status' => 'active']);
        } else {
            DB::table('posts')->where('id', $request->id)->update(['status' => 'inactive']);
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
        // return view('backend.posts.create');
        return view('backend.posts.create');
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
            'quote' => 'string|nullable',
            'summary' => 'string|required',
            'description' => 'string|nullable',
            // 'photo' => 'string|required',
            'post_cat_id' => 'required|exists:categories,id',
            'added_by' => 'required|exists:users,id',
            'status' => 'required|in:active,inactive',
        ]);

        $data = $request->all();
        $slug = Str::slug($request->title);
        $slug_count = Post::where('slug', $slug)->count();
        if ($slug_count > 0) {
            $slug = time() . '-' . $slug;
        }
        $data['slug'] = $slug;
        $status = Post::create($data);
        if ($status) {
            return redirect()->route('post.index')->with('success', 'Post successfully added');
        } else {
            return back()->with('error', 'Error occurred while adding post');
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
        $post = Post::find($id);
        if ($post) {
            return view('backend.posts.edit', compact('post'));
        } else {
            return back()->with('error', 'No posts found!!! Please create post');
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
        $post = Post::find($id);
        if ($post) {
            $this->validate($request, [
                'title' => 'string|required',
                'quote' => 'string|nullable',
                'summary' => 'string|required',
                'description' => 'string|nullable',
                // 'photo' => 'string|required',
                'post_cat_id' => 'required|exists:categories,id',
                'added_by' => 'required|exists:users,id',
                'status' => 'required|in:active,inactive',
            ]);
            $data = $request->all();

            $status = $post->fill($data)->save();
            if ($status) {
                return redirect()->route('post.index')->with('success', 'Post successfully updated');
            } else {
                return back()->with('error', 'Something went wrong!!!');
            }
        } else {
            return back()->with('error', 'No posts found!!! Please create post');
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
        $post = Post::find($id);
        if ($post) {
            $status = $post->delete();
            if ($status) {
                return redirect()->route('post.index')->with('success', 'Post successfully deleted');
            } else {
                return back()->with('error', 'No posts found!!! Please create post');
            }
        } else {
            return back()->with('error', 'No posts found!!! Please create post');
        }
    }
}
