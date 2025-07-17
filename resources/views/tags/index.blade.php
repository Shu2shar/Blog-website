<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('tags') }}
            </h2>
            @can('create tag')
                <a href="{{ route('tags.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Create
                    Post</a>
            @endcan
        </div>
    </x-slot>

    <div class="py-12">
        <div class="my-3 mx-[10%]">
            {{ $tags->links() }}
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-flash-data />
                    <h2 class="text-xl font-bold mb-4">All Blog Posts</h2>
                    @foreach ($tags as $tag)
                        <div class="bg-white p-4 rounded shadow mb-3 flex justify-between items-center">
                            <div>{{ $tag->name }}</div>
                            <div class="flex gap-3">
                                @can('update tag')
                                    <a href="{{ route('tags.edit', $tag) }}" class="text-blue-600">Edit</a>
                                @endcan
                                @can('delete tag')
                                    <form method="POST" action="{{ route('tags.destroy', $tag) }}"
                                        onsubmit="return confirm('Delete this tag?')">
                                        @csrf @method('DELETE')
                                        <button class="text-red-600">Delete</button>
                                    </form>
                                @endcan
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="my-3">
                {{ $tags->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
