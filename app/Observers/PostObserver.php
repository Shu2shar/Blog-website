<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Str;

class PostObserver
{
    public function creating(Post $post): void
    {
        $slug = Str::slug($post->title);
        $count = Post::where('slug', 'LIKE', "$slug%")->count();
        $post->slug = $count ? "{$slug}-{$count}" : $slug;
    }

    /**
     * Handle the Post "created" event.
     */
    public function created(Post $post): void
    {
        //
    }

    public function updating(Post $post): void
    {
        $slug = Str::slug($post->title);
        $count = Post::where('slug', 'LIKE', "$slug%")
            ->where('id', '!=', $post->id)
            ->count();
        $post->slug = $count ? "{$slug}-{$count}" : $slug;
    }

    /**
     * Handle the Post "updated" event.
     */
    public function updated(Post $post): void
    {
        //
    }

    /**
     * Handle the Post "deleted" event.
     */
    public function deleted(Post $post): void
    {
        //
    }

    /**
     * Handle the Post "restored" event.
     */
    public function restored(Post $post): void
    {
        //
    }

    /**
     * Handle the Post "force deleted" event.
     */
    public function forceDeleted(Post $post): void
    {
        //
    }
}
