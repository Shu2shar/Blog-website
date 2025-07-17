<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Update / Edit User') }}
            </h2>
            <a href="{{ route('posts.index') }}" class="bg-slate-700 text-md rounded-md px-4 py-2 text-white">Back</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('user.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="">
                            <div class="">
                                <label for="Name" class="text-lg font-medium ml-2">Name</label>
                                <div class="my-2">
                                    <input type="text" name="name" id="Name"
                                        class="border-gray-300 shadow-sm w-1/2 rounded-lg placeholder:text-gray-400"
                                        placeholder="Enter user name. . . " value="{{ old('name', $user->name) }}">
                                    @error('name')
                                        <p class="text-red-400 font-medium">{{ $message }}</p>
                                    @enderror
                                </div>

                                <label for="email" class="text-lg font-medium ml-1">Email</label>
                                <div class="my-2">
                                    <input type="email" name="email" id="email"
                                        class="border-gray-300 shadow-sm w-1/2 rounded-lg placeholder:text-gray-400"
                                        placeholder="Enter Email. . . " value="{{ old('email', $user->email) }}">
                                    @error('email')
                                        <p class="text-red-400 font-medium">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="grid grid-cols-3 mb-4">
                                    @if ($roles->isnotEmpty())
                                        @foreach ($roles as $role)
                                            <div class="mt-3">
                                                <input
                                                    {{ $hasRoles->contains($role->name) ? 'checked' : '' }}
                                                    type="checkbox" class="rounded" name="role[]"
                                                    value="{{ $role->name }}" id="{{ $role->name }}">
                                                <label for="{{ $role->name }}"
                                                    class="ml-2 capitalize">{{ $role->name }}</label>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>

                                <button class="bg-slate-700 text-md rounded-md px-4 py-3 text-white">Update</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
