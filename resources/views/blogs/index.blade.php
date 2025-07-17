<x-app-layout>
    {{-- Header --}}
    <x-slot name="header">
        <div class="text-center py-10 px-4 bg-gradient-to-r from-blue-100 via-pink-100 to-purple-100 dark:from-[#1e1e2e] dark:via-[#2a2a3d] dark:to-[#1f1f2e] shadow-md rounded-xl">
            <h2 class="text-4xl font-extrabold text-gray-800 dark:text-white">
                Blog Management
            </h2>
            <div class="w-20 h-1 mx-auto mt-2 bg-gradient-to-r from-purple-500 via-pink-500 to-indigo-500 rounded-full"></div>
            <p class="mt-3 text-sm text-gray-600 dark:text-gray-300">Manage, update, and view all blog posts ✍️</p>

            <div class="mt-5">
                <a href="{{ route('posts.create') }}"
                    class="bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-500 hover:to-purple-500 text-white px-6 py-2 rounded-full font-medium shadow-lg transition">
                    ➕ Create New Post
                </a>
            </div>
        </div>
    </x-slot>

    {{-- Content --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Flash --}}
            <x-flash-data />

            {{-- Premium Notice --}}
            @can('view-premium')
                <div class="mb-8 bg-green-100 dark:bg-green-900 border-l-4 border-green-500 text-green-900 dark:text-green-100 p-4 rounded-md shadow">
                    🌟 You are a premium user with <strong>{{ auth()->user()->points }}</strong> points!
                </div>
            @endcan

            {{-- Stats --}}
            <div class="mb-10 bg-white dark:bg-[#222235] p-6 rounded-2xl shadow-md border border-gray-200 dark:border-gray-700">
                <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-3">📊 Monthly Stats</h3>
                <div class="grid grid-cols-2 gap-4 text-sm text-gray-700 dark:text-gray-300">
                    <div>🧑 New Users: <strong>{{ $monthlyStats['new_users'] ?? 0 }}</strong></div>
                    <div>📝 Posts Created: <strong>{{ $monthlyStats['posts_created'] ?? 0 }}</strong></div>
                </div>
            </div>

            {{-- Blog Posts --}}
            <div class="grid md:grid-cols-2 gap-6">
                @foreach ($posts as $post)
                    <div
                        class="relative bg-white dark:bg-[#1c1c2c] border border-transparent dark:border-[#3a3a4d] rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 hover:scale-[1.01] group">

                        {{-- Image --}}
                        @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image"
                                class="w-full h-48 object-cover rounded-t-2xl border-b border-gray-200 dark:border-gray-600" />
                        @endif

                        <div class="p-5">
                            {{-- Title --}}
                            <h3 class="text-xl font-bold text-indigo-700 dark:text-indigo-400 mb-1">
                                {{ $post->title }}
                            </h3>

                            {{-- Meta --}}
                            <p class="text-xs text-gray-500 dark:text-gray-400 mb-2">
                                👤 {{ $post->user->name }} | 📂 {{ $post->category->name }}
                            </p>

                            {{-- Tags --}}
                            <div class="flex flex-wrap gap-2 mb-3">
                                @foreach ($post->tags as $tag)
                                    <span
                                        class="text-xs px-3 py-1 rounded-full bg-gradient-to-r from-purple-200 to-pink-200 dark:from-purple-700 dark:to-pink-700 text-gray-800 dark:text-white font-medium shadow-sm">
                                        #{{ $tag->name }}
                                    </span>
                                @endforeach
                            </div>

                            {{-- Body Preview --}}
                            <p class="text-sm text-gray-700 dark:text-gray-200 mb-4">
                                {{ $post->ShortBody }}
                            </p>

                            {{-- Actions --}}
                            <div class="flex flex-wrap gap-2">
                                @can('update', $post)
                                    <a href="{{ route('posts.edit', $post) }}"
                                        class="bg-blue-600 hover:bg-blue-500 text-white px-5 py-2 rounded-full text-sm font-semibold transition shadow">
                                        ✏️ Edit
                                    </a>
                                @endcan

                                @can('delete', $post)
                                    <form action="{{ route('posts.destroy', $post) }}" method="POST"
                                        onsubmit="return confirm('Delete this post?');">
                                        @csrf @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-600 hover:bg-red-500 text-white px-5 py-2 rounded-full text-sm font-semibold transition shadow">
                                            ❌ Delete
                                        </button>
                                    </form>
                                @endcan
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Pagination --}}
            <div class="mt-12 text-center">
                {{ $posts->links() }}
            </div>

        </div>
    </div>
</x-app-layout>
