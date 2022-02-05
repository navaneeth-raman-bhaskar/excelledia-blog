<?php

namespace App\Services;

use App\Models\Comment;
use App\Models\Post;

class BlogService
{

    public function blogs()
    {
        return Post::select('id','title', 'body')->withCount('comments')->paginate();
    }

    public function comment(Post $post, string $reply, ?Comment $commentParent = null)
    {
        $comment = new  Comment();
        $comment->comment = $reply;
        $comment->comment_id = $commentParent->id ?? null;
        $post->comments()->save($comment);
    }

    public function show(Post $post)
    {
        return $post->loadMissing('comments.replies');
    }

}
