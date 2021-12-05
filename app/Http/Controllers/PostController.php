<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    public function index(Request $request)
    {
        return Redirect::to(route('home'));

        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function create(Request $request)
    {
        return view('posts.create');
    }

    public function store(PostStoreRequest $request)
    {
        $post = Post::create($request->validated());

        $request->session()->flash("success", "Content #{$post->id} has been stored");

        return redirect()->route('posts.index');
    }

    public function show(Request $request, Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Request $request, Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(PostUpdateRequest $request, Post $post)
    {
        $post->update($request->validated());

        $request->session()->flash('posts.id', $post->id);

        return redirect()->route('posts.index');
    }

    public function destroy(Request $request, Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }
}
