<x-guest-layout>
    <form method="POST" action="{{ route('login') }}"
        class="w-full max-w-md mx-auto bg-white/10 backdrop-blur-md p-8 rounded-2xl shadow-2xl border border-white/30 dark:bg-[#1e1e1e]/60 dark:border-gray-700 space-y-6">
        @csrf

        {{-- Title --}}
        <h2 class="text-3xl font-extrabold text-center text-indigo-700 dark:text-indigo-400 tracking-tight drop-shadow-md">
            Welcome Back!!
        </h2>

        {{-- Session Status --}}
        <x-auth-session-status class="mb-4 text-center" :status="session('status')" />

        {{-- Email --}}
        <div class="text-left">
            <x-input-label for="email" :value="__('Email')" class="block mb-1 text-sm text-gray-700 dark:text-gray-300 font-medium" />
            <x-text-input
                id="email"
                type="email"
                name="email"
                :value="old('email')"
                
                autofocus
                autocomplete="username"
                placeholder="you@example.com"
                class="block w-full rounded-xl bg-white/80 dark:bg-[#2e2e2e] border-2 border-transparent focus:border-indigo-500 text-gray-800 dark:text-white px-4 py-2 shadow-inner focus:shadow-xl transition-all duration-200"
            />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        {{-- Password --}}
        <div class="text-left">
            <x-input-label for="password" :value="__('Password')" class="block mb-1 text-sm text-gray-700 dark:text-gray-300 font-medium" />
            <x-text-input
                id="password"
                type="password"
                name="password"
                
                autocomplete="current-password"
                placeholder="••••••••"
                class="block w-full rounded-xl bg-white/80 dark:bg-[#2e2e2e] border-2 border-transparent focus:border-indigo-500 text-gray-800 dark:text-white px-4 py-2 shadow-inner focus:shadow-xl transition-all duration-200"
            />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        {{-- Remember Me + Forgot --}}
        <div class="flex items-center justify-between text-sm">
            <label for="remember_me" class="flex items-center text-gray-700 dark:text-gray-300">
                <input id="remember_me" type="checkbox" name="remember"
                    class="mr-2 rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                Remember me
            </label>

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-indigo-600 dark:text-indigo-400 hover:underline">
                    Forgot password?
                </a>
            @endif
        </div>

        {{-- Submit --}}
        <div>
            <button type="submit"
                class="w-full py-2 px-4 bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-bold rounded-xl shadow-lg hover:shadow-2xl transform hover:scale-[1.03] transition-all duration-200">
                Log in
            </button>
        </div>
    </form>
</x-guest-layout>
