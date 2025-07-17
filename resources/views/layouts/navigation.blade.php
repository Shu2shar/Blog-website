<nav x-data="{ open: false }" class="bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700 shadow-md">
    <div class="mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">

            <!-- Blog Title -->
            <div class="flex items-center space-x-4">
                <a href="{{ route('dashboard') }}"
                    class="text-2xl font-bold bg-gradient-to-r from-purple-600 via-pink-500 to-red-400 bg-clip-text text-transparent">
                    Blog ✨
                </a>

                <!-- Desktop Links -->
                <div class="hidden sm:flex space-x-6 text-sm font-semibold">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">Dashboard</x-nav-link>

                    @can('read permission')
                        <x-nav-link :href="route('permissions.index')" :active="request()->routeIs('permissions.index')">Permissions</x-nav-link>
                    @endcan

                    @can('read role')
                        <x-nav-link :href="route('role.index')" :active="request()->routeIs('role.index')">Roles</x-nav-link>
                    @endcan

                    @can('read user')
                        <x-nav-link :href="route('user.index')" :active="request()->routeIs('user.index')">Users</x-nav-link>
                    @endcan

                    @can('read blog')
                        <x-nav-link :href="route('posts.index')" :active="request()->routeIs('posts.index')">Blogs</x-nav-link>
                    @endcan

                    @can('read categories')
                        <x-nav-link :href="route('categories.index')" :active="request()->routeIs('categories.index')">Categories</x-nav-link>
                    @endcan

                    @can('read tag')
                        <x-nav-link :href="route('tags.index')" :active="request()->routeIs('tags.index')">Tags</x-nav-link>
                    @endcan
                </div>
            </div>

            <!-- User Dropdown -->
            <div class="hidden sm:flex sm:items-center">
                <!-- Desktop Search Bar -->
                <div class="hidden sm:flex items-center ms-6">
                    <form action="{{ route('posts.search') }}" method="GET" class="relative">
                        <input type="text" name="query" placeholder="Search..."
                            class="w-64 px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-full bg-white dark:bg-gray-700 text-gray-800 dark:text-white shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <button type="submit"
                            class="absolute right-1 top-1 bottom-1 px-3 bg-purple-500 text-white rounded-full hover:bg-purple-600 transition">
                            🔍
                        </button>
                    </form>
                </div>
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 text-sm text-gray-700 dark:text-gray-300 font-medium hover:text-indigo-500 transition">
                            {{ Auth::user()->name }} ({{ Auth::user()->roles->pluck('name')->implode(', ') }})
                            <svg class="ml-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.293l3.71-4.06a.75.75 0 111.08 1.04l-4.25 4.66a.75.75 0 01-1.08 0L5.25 8.29a.75.75 0 01-.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">Profile</x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();">Log
                                Out</x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger (Mobile) -->
            <div class="sm:hidden flex items-center">
                <button @click="open = ! open" class="text-gray-500 dark:text-gray-300 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Nav -->
    <div :class="{ 'block': open, 'hidden': !open }" class="sm:hidden px-4 pt-2 pb-4 space-y-1">
        <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">Dashboard</x-responsive-nav-link>

        @can('read permission')
            <x-responsive-nav-link :href="route('permissions.index')" :active="request()->routeIs('permissions.index')">Permissions</x-responsive-nav-link>
        @endcan

        @can('read role')
            <x-responsive-nav-link :href="route('role.index')" :active="request()->routeIs('role.index')">Roles</x-responsive-nav-link>
        @endcan

        @can('read user')
            <x-responsive-nav-link :href="route('user.index')" :active="request()->routeIs('user.index')">Users</x-responsive-nav-link>
        @endcan

        @can('read blog')
            <x-responsive-nav-link :href="route('posts.index')" :active="request()->routeIs('posts.index')">Blogs</x-responsive-nav-link>
        @endcan

        @can('read categories')
            <x-responsive-nav-link :href="route('categories.index')" :active="request()->routeIs('categories.index')">Categories</x-responsive-nav-link>
        @endcan

        @can('read tag')
            <x-responsive-nav-link :href="route('tags.index')" :active="request()->routeIs('tags.index')">Tags</x-responsive-nav-link>
        @endcan

        <!-- Mobile User Info -->
        <div class="border-t border-gray-200 dark:border-gray-700 pt-4">
            <div class="px-4 text-sm text-gray-600 dark:text-gray-400">
                <div>{{ Auth::user()->name }}</div>
                <div>{{ Auth::user()->email }}</div>
            </div>
            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">Profile</x-responsive-nav-link>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault(); this.closest('form').submit();">Log Out</x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
