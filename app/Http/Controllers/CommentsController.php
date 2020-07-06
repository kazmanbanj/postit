<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentsController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Post $post)
    {
        $this->validate(request(), [
            'body' => 'required|max:300'
        ]);

        $post->addComment(request('body'));

        // Comment::create([
        //     'body' => request('body'),
        //     'post_id' => auth()->id(),
        //     'user_id' => auth()->id()
        // ]);

        // $post->addComment([
        //     'body' => request('body'),
        //     'post_id' => auth()->id(),
        //     ]);
        return back();
    }

    public function show($id)
    {
        //
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
