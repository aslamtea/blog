<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::orderBy('id', 'DESC')->take(4)->get();
        return view('site.index', ['post' => $post]);
    }

    public function singlepost($slug)
    {
        $posts = Post::orderBy('id', 'DESC')->take(3)->get();
        $post = Post::where('slug', '=', $slug)->firstOrFail();
        return view('site.singlepost', compact('post', 'posts'));
    }
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $post = Post::where('title', 'like', "%" . $cari . "%")->paginate(4);
        return view('site.cari', ['post' => $post]);
    }
}
