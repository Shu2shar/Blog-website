<x-app-layout>
    <x-slot name="header">
        <div class="text-center py-8 bg-gray-50 dark:bg-gray-900 rounded-xl shadow-sm">
            <h2 class="text-3xl font-bold text-gray-800 dark:text-white">
                Permissions
            </h2>
            <div class="h-1 w-16 bg-purple-500 mx-auto my-2 rounded-full"></div>
            <p class="text-sm text-gray-600 dark:text-gray-400">
                Manage system-level access rights 🛡️
            </p>

            @can('create permission')
                <div class="mt-4">
                    <a href="{{ route('permissions.create') }}"
                        class="inline-block bg-indigo-600 hover:bg-indigo-500 text-white px-5 py-2 rounded-md text-sm font-semibold shadow-sm transition">
                        + Create Permission
                    </a>
                </div>
            @endcan
        </div>
    </x-slot>


    <div class="py-12">
        <div class="my-3 mx-[10%]">
            {{ $permissions->links() }}
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <table class="w-full bg-white shadow-md rounded-lg overflow-hidden ">
                <thead class="bg-gray-800 text-white ">
                    <tr>
                        <th class="px-6 py-4 text-left" width="60">ID</th>
                        <th class="px-6 py-4 text-left">Name</th>
                        <th class="px-6 py-4 text-left" width="180">Created</th>
                        <th class="px-6 py-4 text-left" width="180">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @include('components.flashdat') --}}
                    <x-flashdata />
                    @forelse ($permissions as $permission)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="px-6 py-4">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 ">{{ $permission->name }}</td>
                            <td class="px-6 py-4 capitalize">
                                {{ \carbon\carbon::parse($permission->created_at)->format('d M, Y') }}</td>
                            <td class="px-6 py-4">
                                <div class="flex space-x-3">
                                    @can('update permission')
                                        <a href="{{ route('permissions.edit', $permission->id) }}"
                                            class="bg-blue-500 hover:bg-blue-400 hover:text-black text-white px-4 py-2 rounded">Edit</a>
                                    @endcan
                                    @can('delete permission')
                                        <button onclick="deletePremission({{ $permission->id }})"
                                            class="bg-red-500 hover:bg-red-400 hover:text-red-950 text-white px-4 py-2 rounded">Delete</button>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="px-6 py-4 text-center">No permissions found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="my-3">
                {{ $permissions->links() }}
            </div>
        </div>
    </div>

    <x-slot name="script">

        <script type="text/javascript">
            function deletePremission(id) {
                if (confirm("Are you sure you want to delete this permission?")) {
                    $.ajax({
                        url: "{{ url('permissions') }}/" + id,
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            if (response.status) {
                                window.location.href = "{{ route('permissions.index') }}";
                            } else {
                                alert("Failed to delete permission.");
                            }
                        },
                        error: function(xhr) {
                            alert("An error occurred while deleting the permission.");
                        }
                    });
                }
            }
        </script>
    </x-slot>
</x-app-layout>
