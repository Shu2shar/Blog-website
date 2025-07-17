<?php

namespace App\Console\Commands;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Console\Command;

class CleanupOldSoftDeletedPosts extends Command
{
    protected $signature = 'posts:cleanup-old';

    protected $description = 'Permanently delete soft-deleted posts older than 30 days';

    public function handle(): void
    {
        $cutoffDate = Carbon::now()->subDays(30);

        $count = Post::onlyTrashed()
            ->where('deleted_at', '<', $cutoffDate)
            ->forceDelete();

        $this->info("✅ Permanently deleted $count soft-deleted posts older than 30 days.");
    }
}
