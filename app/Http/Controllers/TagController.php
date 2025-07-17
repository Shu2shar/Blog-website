<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;

class TagController extends Controller
{
    public static function middleware(): array
    {
        return [
            new Middleware('permission:read tag', only: ['index']),
            new Middleware('permission:update tag', only: ['edit']),
            new Middleware('permission:create tag', only: ['create']),
            new Middleware('permission:delete tag', only: ['destroy']),
        ];
    }

    public function index()
    {
        $tags = Tag::latest()->paginate('15');

        return view('tags.index', compact('tags'));
    }

    public function create()
    {
        return view('tags.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:tags,name|max:255',
        ]);

        Tag::create(['name' => $request->name]);

        return redirect()->route('tags.index')->with('success', 'Tag created successfully!');
    }

    public function edit(Tag $tag)
    {
        return view('tags.edit', compact('tag'));
    }

    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name' => 'required|unique:tags,name,'.$tag->id,
        ]);

        $tag->update(['name' => $request->name]);

        return redirect()->route('tags.index')->with('success', 'Tag updated successfully!');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('tags.index')->with('success', 'Tag deleted successfully!');
    }
}
