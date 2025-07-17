<?php

namespace App\Http\Controllers;

use App\Events\PostCreated;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Services\StatsService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller implements HasMiddleware
{
    use AuthorizesRequests;

    public static function middleware(): array
    {
        return [
            new Middleware('permission:read blog', only: ['index']),
            new Middleware('permission:update blog', only: ['edit']),
            new Middleware('permission:create blog', only: ['create']),
            new Middleware('permission:delete blog', only: ['destroy']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index(StatsService $stats)
    {
        $posts = Post::with('category', 'tags')
            ->where('user_id', Auth::id())
            ->latest()
            ->paginate(15);

        $monthlyStats = $stats->getMonthlyStats();

        return view('blogs.index', compact('posts', 'monthlyStats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('blogs.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required',
            'category_id' => 'required|exists:categories,id',
            'tags' => 'array',
            'tags.*' => 'exists:tags,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = [
            'user_id' => Auth::id(),
            'category_id' => $request->category_id,
            'title' => $request->title,
            'body' => $request->body,
        ];

        // 📷 Handle image with unique, readable name
        if ($request->hasFile('image')) {
            $file = $request->file('image');

            // Make a clean file name like "my_blog_post_1720000000.jpg"
            $filename = Str::snake(pathinfo($request->title, PATHINFO_FILENAME))
                .'_'.time()
                .'.'.$file->getClientOriginalExtension();

            // Store the image in 'storage/app/public/posts'
            $data['image'] = $file->storeAs('posts', $filename, 'public');
        }

        // 💾 Save the post
        $post = Post::create($data);

        // 🏷️ Attach tags if any
        if ($request->has('tags')) {
            $post->tags()->sync($request->tags);
        }

        // 🔔 Fire event
        event(new PostCreated($post));

        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $relatedPosts = Post::where('id', '!=', $post->id)
            ->where(function ($query) use ($post) {
                $query->where('title', 'LIKE', '%'.$post->title.'%')
                    ->orWhere('category_id', $post->category_id);
            })
            ->latest()
            ->take(3)
            ->get();

        return view('posts.show', compact('post', 'relatedPosts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $this->authorize('update', $post);

        // abort_if($post->user_id !== Auth::id(), 403);

        $categories = Category::all();
        $tags = Tag::all();

        return view('blogs.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        // Authorization check
        $this->authorize('update', $post);

        // Validate input
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required',
            'category_id' => 'required|exists:categories,id',
            'tags' => 'array',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Prepare data for update
        $data = [
            'title' => $request->title,
            'body' => $request->body,
            'category_id' => $request->category_id,
        ];

        // Handle image upload (if new image uploaded)
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($post->image && Storage::disk('public')->exists($post->image)) {
                Storage::disk('public')->delete($post->image);
            }

            // Create unique filename
            $file = $request->file('image');
            $filename = Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)).'_'.time().'.'.$file->getClientOriginalExtension();

            // Store new image
            $data['image'] = $file->storeAs('posts', $filename, 'public');
        }

        // Update post
        $post->update($data);

        // Sync tags
        $post->tags()->sync($request->tags ?? []);

        return redirect()->route('posts.index')->with('success', 'Post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);

        // abort_if($post->user_id !== Auth::id(), 403);

        // Delete image from storage if it exists
        if ($post->image && Storage::disk('public')->exists($post->image)) {
            Storage::disk('public')->delete($post->image);
        }

        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted!');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $posts = Post::search($query)->paginate(10);

        return view('dashboard', compact('posts', 'query'));
    }
}
