<?php

namespace App\Http\Controllers\API\Blog;

use App\Services\BlogService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\CommentRequest;
use App\Models\Comment;
use App\Models\Post;

class BlogController extends Controller
{
    private BlogService $service;

    public function __construct(BlogService $blogService)
    {
        $this->service = $blogService;
    }

    public function index()
    {
        $posts = $this->service->blogs();

        return $this->successResponse($posts);
    }

    public function comment(CommentRequest $request, Post $post, ?Comment $comment = null)
    {
        $this->service->comment($post, $request->comment, $comment);
        return $this->successResponse('commented successfully');
    }


    public function show(Post $post)
    {
        $post = $this->service->show($post);
        return $this->successResponse($post);

    }
}
