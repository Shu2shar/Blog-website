<x-guest-layout>
    <form method="POST" action="{{ route('password.email') }}"
        class="w-full max-w-xl mx-auto bg-white/20 dark:bg-[#1f1f1f]/40 backdrop-blur-xl p-10 rounded-3xl shadow-2xl border border-white/30 dark:border-gray-700 space-y-8">
        @csrf

        {{-- Heading --}}
        <h2 class="text-3xl font-extrabold text-center text-indigo-700 dark:text-indigo-400 drop-shadow-lg mb-4">
            Forgot Password? 🔒
        </h2>

        {{-- Info Text --}}
        <p class="text-sm text-center text-gray-600 dark:text-gray-300 leading-relaxed">
            No problem. Just enter your email and we’ll send you a link to reset your password.
        </p>

        {{-- Session Message --}}
        <x-auth-session-status class="mb-4 text-sm text-green-600 dark:text-green-400 text-center" :status="session('status')" />

        {{-- Email --}}
        <div>
            <label for="email" class="block text-lg font-medium text-gray-800 dark:text-gray-200 mb-1 ">Email Address</label>
            <x-text-input id="email" type="email" name="email" :value="old('email')"  autofocus
                placeholder="you@example.com"
                class="block w-full px-4 py-3 rounded-xl bg-white/70 dark:bg-[#2b2b2b] text-gray-800 dark:text-white border border-gray-300 dark:border-gray-600 shadow-inner focus:outline-none focus:ring-2 focus:ring-indigo-500 transition" />
            <x-input-error :messages="$errors->get('email')" class="mt-1 text-sm text-red-500" />
        </div>

        {{-- Submit --}}
        <div>
            <button type="submit"
                class="w-full py-2 px-4 bg-gradient-to-r from-indigo-500 to-purple-600 text-white font-semibold rounded-xl shadow-md hover:scale-105 hover:shadow-xl transition">
                Email Password Reset Link
            </button>
        </div>
    </form>
</x-guest-layout>
