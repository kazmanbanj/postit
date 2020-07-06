<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use App\repositories\Posts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(Posts $posts)
    {
        // $posts = Post::latest()->filters(request(['month', 'year']))->get();

        // $posts = (new \App\Repositories\Posts)->all();

        // $posts = $posts->all();
        // $posts = Post::latest()->get();


        $posts = Post::latest();
        if($month = request('month')) {
            $posts->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if($year = request('year')) {
            $posts->whereYear('created_at', $year);
        }

        $posts = $posts->get();

        // check post model for the archives method

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

        // Post::create([
        //     'title' => request('title'),
        //     'subject' => request('subject'),
        //     'body' => request('body'),
        //     'user_id' => auth()->id()
        // ]);

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
