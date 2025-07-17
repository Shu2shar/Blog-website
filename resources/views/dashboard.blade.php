<x-app-layout>
    <x-slot name="header">
        <div
            class="rounded-xl px-6 py-10 text-center bg-gradient-to-r from-[#e0f7fa] via-[#fce4ec] to-[#e8eaf6] dark:from-[#1f2937] dark:via-[#111827] dark:to-[#1a1a2e] shadow-md">
            <h2 class="text-5xl font-extrabold text-gray-800 dark:text-white tracking-tight">
                All Blogs
            </h2>
            <div class="w-24 h-1 mt-4 mx-auto bg-gradient-to-r from-purple-500 via-pink-500 to-indigo-500 rounded-full">
            </div>
            <p class="mt-4 text-sm text-gray-600 dark:text-gray-300">
                Browse latest posts from your favorite authors ✨
            </p>
        </div>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Top Pagination --}}
            <div class="mb-8 text-center">
                {{ $posts->links() }}
            </div>

            @if ($posts->count())
                {{-- Blog Rows --}}
                <div class="space-y-10">
                    @foreach ($posts->chunk(2) as $row)
                        <div
                            class="rounded-3xl p-8 shadow-2xl bg-gradient-to-r from-indigo-100 via-purple-100 to-pink-100 dark:from-[#2a2a3d] dark:via-[#1e1e2e] dark:to-[#3a3a4d] border border-indigo-200 dark:border-[#3f3f5f]">

                            <div class="grid sm:grid-cols-2 gap-6">
                                @foreach ($row as $post)
                                    <div
                                        class="bg-white/90 dark:bg-[#222235]/90 border border-indigo-300 dark:border-indigo-600 rounded-2xl p-6 shadow-md hover:shadow-indigo-500/40 dark:hover:shadow-indigo-400/30 transition-all duration-300 transform hover:scale-[1.02]">

                                        {{-- Post Image or Placeholder --}}
                                        <div
                                            class="w-full h-48 rounded-xl mb-4 overflow-hidden border border-indigo-200 dark:border-indigo-700 shadow">
                                            @if ($post->image)
                                                <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image"
                                                    class="w-full h-full object-cover">
                                            @else
                                                <div
                                                    class="w-full h-full bg-gradient-to-br from-indigo-100 via-purple-100 to-pink-100 dark:from-[#2a2a3d] dark:via-[#1e1e2e] dark:to-[#3a3a4d] flex items-center justify-center text-gray-400 dark:text-gray-600 text-sm italic">
                                                    No Image
                                                </div>
                                            @endif
                                        </div>

                                        <h3 class="text-xl font-extrabold text-indigo-700 dark:text-indigo-400 mb-2">
                                            {{ $post->title }}
                                        </h3>

                                        <p class="text-sm text-gray-700 dark:text-gray-300 mb-1">
                                            👤 <strong>{{ $post->user->name }}</strong> | 📂
                                            <span class="italic">{{ $post->category->name }}</span>
                                        </p>

                                        <p class="text-gray-800 dark:text-gray-200 text-sm mb-3">
                                            {{ Str::limit(strip_tags($post->body), 100) }}
                                        </p>

                                        {{-- Tags --}}
                                        <div class="flex flex-wrap gap-2 mb-4">
                                            @foreach ($post->tags as $tag)
                                                <span
                                                    class="text-xs px-3 py-1 rounded-full font-medium shadow-sm bg-gradient-to-r from-indigo-200 via-purple-200 to-pink-200 dark:from-indigo-700 dark:via-purple-700 dark:to-pink-700 text-gray-900 dark:text-white">
                                                    #{{ $tag->name }}
                                                </span>
                                            @endforeach
                                        </div>

                                        <a href="{{ route('blog.show', $post) }}"
                                            class="inline-block text-sm text-indigo-600 dark:text-indigo-400 font-semibold hover:underline hover:pl-1 transition-all">
                                            View Details →
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center text-gray-600 dark:text-gray-300 mt-16 text-xl font-semibold">
                    No posts found for “{{ request('query') }}”
                </div>
            @endif

            {{-- Bottom Pagination --}}
            <div class="mt-12 text-center">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
