<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Category::factory(5)->create();
        \App\Models\Tag::factory(10)->create();

        \App\Models\Post::factory(20)->create()->each(function ($post) {
            $tagIds = \App\Models\Tag::inRandomOrder()->take(rand(1, 3))->pluck('id');
            $post->tags()->attach($tagIds);
        });
    }
}
