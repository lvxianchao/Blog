<?php

namespace App\Observers;

use App\Jobs\TranslateSlug;
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
    public function saved(Post $post)
    {
        // 翻译 slug
        if (!$post->slug) {
            dispatch(new TranslateSlug($post));
        }
    }
}
