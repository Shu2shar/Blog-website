<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Create Blogs') }}
            </h2>
            <a href="{{ route('posts.index') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Back Post
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data"
                        class="max-w-3xl mx-auto bg-white dark:bg-gray-900 p-8 rounded-xl shadow-lg space-y-6">
                        @csrf

                        <h2 class="text-2xl font-bold text-gray-800 dark:text-white">Create New Post</h2>

                        {{-- Title --}}
                        <div>
                            <label class="block text-gray-700 dark:text-gray-300 font-medium mb-1">Title</label>
                            <input type="text" name="title" value="{{ old('title') }}"
                                class="w-full px-4 py-2 border dark:border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('title') border-red-500 @enderror"
                                placeholder="Enter title">
                            @error('title')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Category --}}
                        <div>
                            <label class="block text-gray-700 dark:text-gray-300 font-medium mb-1">Category</label>
                            <select name="category_id"
                                class="w-full px-4 py-2 border dark:border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('category_id') border-red-500 @enderror">
                                <option value="">-- Select Category --</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Tags --}}
                        <div>
                            <label class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Tags</label>
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 ml-2">
                                @foreach ($tags as $tag)
                                    <div class="flex items-center">
                                        <input type="checkbox" name="tags[]" id="tag{{ $tag->id }}"
                                            value="{{ $tag->id }}"
                                            class="rounded text-blue-600 focus:ring-blue-500"
                                            {{ is_array(old('tags')) && in_array($tag->id, old('tags')) ? 'checked' : '' }}>
                                        <label for="tag{{ $tag->id }}"
                                            class="ml-2 text-sm capitalize text-gray-700 dark:text-gray-300">
                                            #{{ $tag->name }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                            @error('tags')
                                <p class="text-red-600 text-sm mt-1 ml-2">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Body --}}
                        <div>
                            <label class="block text-gray-700 dark:text-gray-300 font-medium mb-1">Body</label>
                            <textarea name="body" rows="6"
                                class="w-full px-4 py-2 border dark:border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('body') border-red-500 @enderror"
                                placeholder="Write your post here...">{{ old('body') }}</textarea>
                            @error('body')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Image --}}
                        <div>
                            <label class="block text-gray-700 dark:text-gray-300 font-medium mb-1">Upload Image</label>
                            <input type="file" name="image"
                                class="block w-full text-sm text-gray-900 dark:text-gray-100 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-600 file:text-white hover:file:bg-blue-700" />
                            @error('image')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Submit --}}
                        <div class="text-right">
                            <button type="submit"
                                class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                                Create Post
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
