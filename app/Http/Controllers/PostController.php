<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // getIndex
    public function getIndex()
    {
        $posts = Post::all();

        return view('post/index', compact('posts'));
    }

    // getShow
    public function getShow($id)
    {
        $post = Post::find($id);

        return view('post/show', compact('post'));
    }

    // getCreate
    public function getCreate()
    {
        return view('post/create');
    }

    /*public function store(Request $request)
    {
        $post = new Post();

        $post->title = $request->title;
        $post->poster = $request->poster;
        $post->habilitated = $request->has('habilitated') ? true : false;
        $post->content = $request->content;

        $post->save();

        return redirect()->route('post.index');
    }*/

    public function store(Request $request)
    {
        $post = new Post();

        $post->title = $request->title;
        $post->poster = $request->poster;
        $post->habilitated = $request->has('habilitated') ? true : false;
        $post->content = $request->content;

        $post->save();

        return redirect()->route('post.index');
    }

    // getEdit
    public function getEdit($id)
    {
        $post = Post::find($id);

        return view('post/edit', compact('post'));
    }
}
