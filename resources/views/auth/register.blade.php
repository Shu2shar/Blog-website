<x-guest-layout>
    <form method="POST" action="{{ route('register') }}"
        class="w-full max-w-xl mx-auto bg-white/10 backdrop-blur-md p-8 rounded-2xl shadow-2xl border border-white/30 dark:bg-[#1e1e1e]/60 dark:border-gray-700 space-y-4">
        @csrf

        {{-- Title --}}
        <h2
            class="text-3xl font-extrabold text-center text-indigo-700 dark:text-indigo-400 tracking-tight drop-shadow-md">
            Create an Account ✨
        </h2>

        {{-- Name --}}
        <div class="text-left">
            <x-input-label for="name" :value="__('Name')"
                class="block mb-1 text-sm text-gray-700 dark:text-gray-300 font-medium" />
            <x-text-input id="name" type="text" name="name" :value="old('name')"  autofocus
                autocomplete="name"
                class="block w-full rounded-xl bg-white/80 dark:bg-[#2e2e2e] border-2 border-transparent focus:border-indigo-500 text-gray-800 dark:text-white px-4 py-2 shadow-inner focus:shadow-xl transition-all duration-200" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        {{-- Email --}}
        <div class="text-left">
            <x-input-label for="email" :value="__('Email')"
                class="block mb-1 text-sm text-gray-700 dark:text-gray-300 font-medium" />
            <x-text-input id="email" type="email" name="email" :value="old('email')" 
                autocomplete="username" placeholder="you@example.com"
                class="block w-full rounded-xl bg-white/80 dark:bg-[#2e2e2e] border-2 border-transparent focus:border-indigo-500 text-gray-800 dark:text-white px-4 py-2 shadow-inner focus:shadow-xl transition-all duration-200" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        {{-- Password --}}
        <div class="text-left">
            <x-input-label for="password" :value="__('Password')"
                class="block mb-1 text-sm text-gray-700 dark:text-gray-300 font-medium" />
            <x-text-input id="password" type="password" name="password"  autocomplete="new-password"
                placeholder="••••••••"
                class="block w-full rounded-xl bg-white/80 dark:bg-[#2e2e2e] border-2 border-transparent focus:border-indigo-500 text-gray-800 dark:text-white px-4 py-2 shadow-inner focus:shadow-xl transition-all duration-200" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        {{-- Confirm Password --}}
        <div class="text-left">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')"
                class="block mb-1 text-sm text-gray-700 dark:text-gray-300 font-medium" />
            <x-text-input id="password_confirmation" type="password" name="password_confirmation" 
                autocomplete="new-password" placeholder="••••••••"
                class="block w-full rounded-xl bg-white/80 dark:bg-[#2e2e2e] border-2 border-transparent focus:border-indigo-500 text-gray-800 dark:text-white px-4 py-2 shadow-inner focus:shadow-xl transition-all duration-200" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        {{-- Footer --}}
        <div class="flex items-center justify-between">
            <a href="{{ route('login') }}" class="text-sm text-indigo-600 dark:text-indigo-400 hover:underline">
                Already registered?
            </a>
            <button type="submit"
                class="py-2 px-4 bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-bold rounded-xl shadow-lg hover:shadow-2xl transform hover:scale-[1.03] transition-all duration-200">
                Register
            </button>
        </div>
    </form>
</x-guest-layout>
