<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $posts = Post::paginate(4);
        return view('posts.index', ['posts' => $posts]);
    }
    public function create()
    {
        return view('posts.create', compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'thumbnail' => $request->thumbnail,
            'user_id' =>  auth()->user()->id,
            'slug' => Str::slug($request->title)
        ]);

        return redirect('/post')->with('status', 'data ges robah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Post $posts)
    {
        $posts = Post::all();
        return view('posts.show', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::find($id);
        return view('posts.edit', ['posts' => $posts]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $posts = Post::find($id);
        $posts->update($request->all(), [
            'title' => $request->title,
            'content' => $request->content,
            'thumbnail' => $request->thumbnail,
            'user_id' =>  auth()->user()->id,
            'slug' => Str::slug($request->title)
        ]);
        if ($request->hasFile('thumbnail')) {
            $request->file('thumbnail')->move('img/', $request->file('thumbnail')->getClientOriginalName());
            $posts->thumbnail = $request->file('thumbnail')->getClientOriginalName();
            $posts->save();
        }
        return redirect('/post')->with('status', 'data ges robah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Post::find($id);
        $posts->delete();
        return redirect('/post')->with('status', 'data ges ges lengit');
    }
}
