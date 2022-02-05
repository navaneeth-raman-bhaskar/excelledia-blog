<?php

namespace App\Services\Admin;

use App\Models\Post;

class PostService
{

    public function store($data): Post
    {
        return Post::create($data);
    }

    public function update(Post $post, $data): Post
    {
        $post = $post->fill($data);
        $post->save();
        return $post;
    }

    public function delete(Post $post)
    {
        $post->comments()->delete();
        $post->delete();
    }

    public function show(Post $post)
    {
        return $post->loadMissing('comments.replies');
    }
}
