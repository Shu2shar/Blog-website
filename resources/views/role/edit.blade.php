<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Update / Edit Roles') }}
            </h2>
            <a href="{{ route('role.index') }}" class="bg-slate-700 text-md rounded-md px-4 py-2 text-white">Back</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('role.update', $roles->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="">
                            <label for="name" class="text-lg font-medium ml-1">Name</label>
                            <div class="my-2">
                                <input type="text" name="name" id="name"
                                    class="border-gray-300 shadow-sm w-1/2 rounded-lg placeholder:text-gray-400"
                                    placeholder="Enter permission name" value="{{ old('name', $roles->name) }}">
                                @error('name')
                                    <p class="text-red-400 font-medium">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="grid grid-cols-3 mb-4">
                                @if ($permissions->isnotEmpty())
                                    @foreach ($permissions as $premission)
                                        <div class="mt-3">
                                            <input {{ $hasPermissions->contains($premission->name) ? 'checked' : '' }}
                                                type="checkbox" class="rounded" name="permission[]"
                                                value="{{ $premission->name }}" id="{{ $premission->name }}">
                                            <label for="{{ $premission->name }}"
                                                class="ml-2 capitalize">{{ $premission->name }}</label>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <button
                                class="bg-slate-700 hover:bg-slate-600 text-md rounded-md px-4 py-3 text-white">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
