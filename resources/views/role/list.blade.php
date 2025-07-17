<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Roles') }}
            </h2>
            @can('create role')
                <a href="{{ route('role.create') }}" class="bg-slate-700 text-md rounded-md px-4 py-2 text-white">Create</a>
            @endcan
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <table class="w-full bg-white shadow-md rounded-lg overflow-hidden ">
                <thead class="bg-gray-800 text-white ">
                    <tr>
                        <th class="px-6 py-4 text-left" width="60">ID</th>
                        <th class="px-6 py-4 text-left">Name</th>
                        <th class="px-6 py-4 text-left">Permission</th>
                        <th class="px-6 py-4 text-left" width="180">Created</th>
                        <th class="px-6 py-4 text-left" width="180">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    <x-flashdata />
                    @forelse ($roles as $role)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="px-6 py-4">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 capitalize">{{ $role->name }}</td>
                            <td class="px-6 py-4 capitalize ">{{ $role->permissions->pluck('name')->implode(',') }}</td>
                            <td class="px-6 py-4 capitalize">
                                {{ \carbon\carbon::parse($role->created_at)->format('d M, Y') }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex space-x-3">
                                    @can('update role')
                                        <a href="{{ route('role.edit', $role->id) }}"
                                            class="bg-blue-500 hover:bg-blue-400 hover:text-black text-white px-4 py-2 rounded">Edit</a>
                                    @endcan
                                    @can('delete role')
                                        <button onclick="deletePremission({{ $role->id }})"
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
                {{ $roles->links() }}
            </div>
        </div>
    </div>

    <x-slot name="script">
        <script type="text/javascript">
            function deletePremission(id) {
                if (confirm("Are you sure you want to delete this permission?")) {
                    $.ajax({
                        url: "{{ url('role') }}/" + id,
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            if (response.status) {
                                window.location.href = "{{ route('role.index') }}";
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
