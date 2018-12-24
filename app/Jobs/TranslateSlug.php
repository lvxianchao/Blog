<?php

namespace App\Jobs;

use App\Handlers\SlugTranslateHandler;
use App\Models\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class TranslateSlug implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    
    protected $post;
    
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }
    
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $slug = app(SlugTranslateHandler::class)->translate($this->post->title);
        
        \DB::table('posts')->where('id', $this->post->id)->update(['slug' => $slug]);
    }
}
