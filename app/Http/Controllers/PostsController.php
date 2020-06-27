<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'title' => 'required',
            'subject' => 'required',
            'body' => 'required',
        ]);

        auth()->user()->publish(
            new Post(request(['title', 'body', 'subject']))
        );

        return redirect('/');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
