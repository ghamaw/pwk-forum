<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div>
        <x-title class=" text-fuchsia-800 p-4 font-black">
            Log In
        </x-title>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        {{-- <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div> --}}

        <div class="flex items-center mt-9">
            <div
                class="text-xl bg-purple-50 text-fuchsia-800 w-14 h-12 flex justify-center items-center rounded-full mx-auto">
                <i class="fa-solid fa-user"></i>
            </div>
            <x-text-input id="input_type" class="block mt-1 ml-4 w-full bg-purple-50" type="text" name="input_type"
                :value="old('Email/Username')" autofocus autocomplete="input_type" placeholder="Email / Username" />
        </div>
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
        <x-input-error :messages="$errors->get('username')" class="mt-2" />

        <!-- Password -->
        <div class="mt-4 flex items-center">
            <div class="text-xl bg-purple-50 text-fuchsia-800 w-14 h-12 flex justify-center items-center rounded-full">
                {{-- <i class="fa-solid fa-lock"></i> --}}
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="w-6 h-6 inline-block align-text-top">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                </svg>
            </div>
            <x-text-input id="password" class="block mt-1 ml-4 w-full bg-purple-50" type="password" name="password"
                autocomplete="current-password" placeholder="Password" />

        </div>
        <x-input-error :messages="$errors->get('password')" class="mt-2" />

        <!-- Remember Me -->
        <div class="block mt-6 mb-6 ml-4 text-start">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-center mt-9 mb-11">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('register') }}">Belum punya akun?
                {{ __('Daftar') }}
            </a>

            <x-primary-button class="ml-4 px-12 py-3">
                {{ __('Login') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
