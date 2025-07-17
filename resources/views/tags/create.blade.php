<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Create Tags') }}
            </h2>
            <a href="{{ route('tags.index') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Back
                Post</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('tags.store') }}"
                        class="bg-white p-6 rounded shadow space-y-4">
                        @csrf
                        <div>
                            <label class="block">Tag Name</label>
                            <input name="name" class="w-full border px-3 py-2 rounded" value="{{ old('name') }}">
                            @error('name')
                                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <button class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
