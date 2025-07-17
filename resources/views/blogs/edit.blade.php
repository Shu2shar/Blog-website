<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Edit Blogs') }}
            </h2>
            <a href="{{ route('posts.index') }}"
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Back Post</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form action="{{ route('posts.update', $post) }}" method="POST"
                        enctype="multipart/form-data"
                        class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow-lg space-y-6">
                        @csrf
                        @method('PUT')

                        <h2 class="text-2xl font-bold text-gray-800">Edit Post</h2>

                        {{-- Title --}}
                        <div>
                            <label class="block text-gray-700 font-medium mb-1">Title</label>
                            <input name="title" type="text"
                                value="{{ old('title', $post->title) }}"
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('title') border-red-500 @enderror">
                            @error('title')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Category --}}
                        <div>
                            <label class="block text-gray-700 font-medium mb-1">Category</label>
                            <select name="category_id"
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('category_id') border-red-500 @enderror">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Tags --}}
                        <div class="grid grid-cols-4 ml-2">
                            @foreach ($tags as $tag)
                                <div class="mt-2">
                                    <input type="checkbox" name="tags[]" class="rounded"
                                        id="tag{{ $tag->id }}" value="{{ $tag->id }}"
                                        {{ in_array($tag->id, old('tags', $post->tags->pluck('id')->toArray())) ? 'checked' : '' }}>
                                    <label for="tag{{ $tag->id }}" class="ml-2 capitalize">#{{ $tag->name }}</label>
                                </div>
                            @endforeach
                        </div>
                        @error('tags')
                            <p class="text-red-600 text-sm mt-1 ml-2">{{ $message }}</p>
                        @enderror

                        {{-- Body --}}
                        <div>
                            <label class="block text-gray-700 font-medium mb-1">Body</label>
                            <textarea name="body" rows="6"
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('body') border-red-500 @enderror">{{ old('body', $post->body) }}</textarea>
                            @error('body')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Image Upload --}}
                        <div>
                            <label class="block text-gray-700 font-medium mb-1">Image</label>
                            <input type="file" name="image"
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('image') border-red-500 @enderror">
                            @error('image')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror

                            {{-- Show old image if exists --}}
                            @if ($post->image)
                                <div class="mt-3">
                                    <p class="text-sm text-gray-600 mb-1">Current Image:</p>
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="Current Image"
                                        class="w-52 rounded border border-gray-300">
                                </div>
                            @endif
                        </div>

                        {{-- Submit --}}
                        <div class="text-right">
                            <button type="submit"
                                class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                                Update Post
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
