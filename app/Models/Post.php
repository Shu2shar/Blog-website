<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Laravel\Scout\Searchable;

class Post extends Model
{
    use HasFactory, Searchable, SoftDeletes;

    protected $table = 'posts';

    protected $fillable = [
        'title',
        'body',
        'user_id',
        'category_id',
        'image',
        'slug',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    // Accessor example
    public function getTitleAttribute($value)
    {
        return strtoupper($value); // Show all titles in uppercase
    }

    public function getShortBodyAttribute()
    {
        return Str::limit($this->body, 100);
    }

    // Mutator example
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = ucfirst($value); // Capitalize first letter
    }

    // protected static function booted()
    // {
    //     static::creating(function ($post) {
    //         $slug = Str::slug($post->title);
    //         $count = Post::where('slug', 'LIKE', "$slug%")->count();
    //         $post->slug = $count ? "{$slug}-{$count}" : $slug;
    //     });

    //     static::updating(function ($post) {
    //         $slug = Str::slug($post->title);
    //         $count = Post::where('slug', 'LIKE', "$slug%")->where('id', '!=', $post->id)->count();
    //         $post->slug = $count ? "{$slug}-{$count}" : $slug;
    //     });
    // }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function toSearchableArray()
    {
        return [
            'title' => $this->title,
            'body' => $this->body,
        ];
    }
}
