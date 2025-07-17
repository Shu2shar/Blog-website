<?php

namespace App\Services;

use App\Models\Post;
use App\Models\User;

class StatsService
{
    public function getMonthlyStats(): array
    {
        return [
            'new_users' => User::whereMonth('created_at', now()->month)->count(),
            'posts_created' => Post::whereMonth('created_at', now()->month)->count(),
        ];
    }
}
