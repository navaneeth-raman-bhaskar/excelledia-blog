<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreatePostRequest;
use App\Http\Requests\Admin\UpdatePostRequest;
use App\Models\Post;
use App\Services\Admin\PostService;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::select('id', 'title', 'body')->paginate(1);

        return view('admin.posts.index')->with(compact('posts'));
    }


    public function create()
    {
        return view('admin.posts.create')->with('post', new Post());
    }

    public function store(CreatePostRequest $request, PostService $postService)
    {
        $postService->store($request->only('title', 'body'));
        return redirect()->route('admin.posts.index');
    }


    public function show(Post $post, PostService $postService)
    {
        $data = $postService->show($post);
        return view('admin.posts.show')->with('post', $data);

    }


    public function edit(Post $post)
    {
        return view('admin.posts.edit')->with('post', $post);
    }


    public function update(UpdatePostRequest $request, Post $post, PostService $postService)
    {
        $postService->update($post, $request->only('title', 'body'));

        return redirect()->route('admin.posts.index');
    }


    public function destroy(Post $post, PostService $postService)
    {
        //if (Auth::user()->isAdmin() and $post->user_id === Auth::id()) {
        $postService->delete($post);
        return $this->successResponse('Deleted');
        // }
        //return redirect()->route('admin.posts.index');
    }
}
