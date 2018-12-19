<?php

namespace App\Observers;

use App\Handlers\SlugTranslateHandler;
use App\Models\Post;

/**
 * Class PostObserver
 *
 * @package App\Observers
 */
class PostObserver
{
    /**
     * @param Post $post
     */
    public function saving(Post $post)
    {
        // 翻译 slug
        if (!$post->slug) {
            $post->slug = app(SlugTranslateHandler::class)->translate($post->title);
        }
    }
}
