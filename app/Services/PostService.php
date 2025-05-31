<?php

namespace App\Services;

use App\Models\Post;

class PostService
{
    public function add(string $title, string $slug, string $content, ?int $userId = null)
    {
        return Post::create([
            'title' => $title,
            'slug' => $slug,
            'content' => $content,
            'user_id' => $userId,
        ]);
    }
}
