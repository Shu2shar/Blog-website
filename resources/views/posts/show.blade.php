<x-app-layout>
    <x-slot name="header">
        <div
            class="flex justify-between items-center flex-wrap gap-2 bg-gradient-to-r from-indigo-100 via-pink-100 to-purple-100 dark:from-[#1f1f2e] dark:via-[#2a2a3d] dark:to-[#1f1f2e] px-6 py-4 rounded-xl shadow-sm">
            <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white">
                Blog Details
            </h2>
            <h2 class="text-xl text-blue-700 dark:text-blue-300 font-semibold">
                {{ $post->title }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

            <div
                class="relative bg-gradient-to-br from-white via-indigo-50 to-purple-100 dark:from-[#1c1c2c] dark:via-[#2a2a3a] dark:to-[#1e1e2e] border border-indigo-200 dark:border-indigo-600 rounded-[2rem] shadow-[0_10px_25px_-5px_rgba(99,102,241,0.3)] p-8 md:p-10 transition-transform duration-300 hover:scale-[1.01]">

                <div class="flex flex-col md:flex-row gap-6 md:gap-10 items-start">
                    {{-- 📷 Image --}}
                    @if ($post->image)
                        <div
                            class="w-full md:w-[280px] mt-5 aspect-[4/3] flex-shrink-0 overflow-hidden rounded-2xl shadow-md border border-indigo-300 dark:border-indigo-600">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image"
                                class="w-full h-full object-cover rounded-2xl" />
                        </div>
                    @endif

                    {{-- 📚 Content --}}
                    <div class="flex-1 space-y-6">
                        {{-- 🧾 Meta --}}
                        <div class="text-sm text-gray-600 dark:text-gray-300 space-x-3">
                            <span><strong>Author:</strong> {{ $post->user->name }}</span>
                            <span>|</span>
                            <span><strong>Category:</strong> {{ $post->category->name }}</span>
                            <span>|</span>
                            <span>{{ $post->created_at->format('d M Y') }}</span>
                        </div>

                        {{-- 📖 Body --}}
                        <div
                            class="prose dark:prose-invert max-w-none text-lg leading-relaxed font-[500] text-gray-800 dark:text-gray-100 tracking-wide">
                            {!! nl2br(e($post->body)) !!}
                        </div>

                        {{-- 🏷️ Tags --}}
                        <div>
                            <h4 class="font-semibold text-gray-700 dark:text-gray-200 mb-2">Tags:</h4>
                            <div class="flex flex-wrap gap-3">
                                @foreach ($post->tags as $tag)
                                    <span
                                        class="text-xs px-4 py-1 rounded-full font-semibold shadow bg-gradient-to-r from-indigo-300 via-purple-300 to-pink-300 dark:from-indigo-600 dark:via-purple-700 dark:to-pink-700 text-gray-900 dark:text-white backdrop-blur-sm">
                                        #{{ $tag->name }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            {{-- 🔁 Related Posts --}}
            @if ($relatedPosts->count())
                <div class="mt-16">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">You Might Also Like</h3>
                    <div class="grid md:grid-cols-3 gap-6">
                        @foreach ($relatedPosts as $related)
                            <div
                                class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 p-5 rounded-2xl shadow hover:shadow-indigo-400 transition-all duration-300">
                                <h4 class="text-lg font-bold text-indigo-700 dark:text-indigo-400 mb-2">
                                    {{ $related->title }}
                                </h4>
                                <p class="text-sm text-gray-500 dark:text-gray-400 mb-2">
                                    {{ $related->user->name }} | Category: {{ $related->category->name }}
                                </p>
                                <p class="text-gray-600 dark:text-gray-300 mb-3 text-sm">
                                    {{ Str::limit(strip_tags($related->body), 100) }}
                                </p>
                                <a href="{{ route('blog.show', $related) }}"
                                    class="text-indigo-600 dark:text-indigo-400 font-medium hover:underline">
                                    Read More →
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
