<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    public function definition(): array
    {
        $title = $this->faker->sentence();

        return [
            // 'user_id' => User::inRandomOrder()->first()->id,
            // 'category_id' => Category::inRandomOrder()->first()->id,
            'title' => $title,
            'slug' => Str::slug($title),
            'body' => $this->faker->paragraph(10),
            'image' => 'posts/'.$this->faker->image('public/storage/posts', 640, 480, null, false), // store in public/storage/posts
        ];
    }
}
