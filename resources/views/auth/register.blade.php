<x-guest-layout>
    <div>
        <x-title class=" text-fuchsia-800 p-4 font-black">
            Sign Up
        </x-title>
    </div>

    <div class="p-4">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Username -->
            <div class="flex items-center">
                <div
                    class="text-xl bg-purple-50 text-fuchsia-800 w-14 h-12 flex justify-center items-center rounded-full mx-auto">
                    <i class="fa-solid fa-user"></i>
                </div>
                <x-text-input id="username" class="ml-2 block mt-1 w-full bg-purple-50" type="text" name="username"
                    placeholder="Username" :value="old('username')" autofocus autocomplete="username" required />
            </div>
            <x-input-error :messages="$errors->get('username')" class="mt-2" />


            <!-- Email Address -->
            <div class="mt-4 flex items-center">
                <div
                    class="text-xl bg-purple-50 text-fuchsia-800 w-14 h-12 flex justify-center items-center rounded-full mx-auto">
                    <i class="fa-regular fa-envelope"></i>
                </div>
                <x-text-input id="email" class="ml-2 block mt-1 w-full bg-purple-50" type="email" name="email"
                    placeholder="Email" :value="old('email')" autocomplete="email" required />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

            <!-- Years Graduate -->
            <div class="mt-4 flex items-center">
                <div
                    class="text-xl bg-purple-50 text-fuchsia-800 w-14 h-12 flex justify-center items-center rounded-full mx-auto">
                    <i class="fa-regular fa-calendar"></i>
                </div>
                <x-text-input id="graduation_year" class="ml-2 block mt-1 w-full bg-purple-50" type="text"
                    pattern="[0-9]*" placeholder="Tahun Angkatan ( Contoh: 2016 )" name="graduation_year"
                    :value="old('graduation_year')" autocomplete="graduation_year" required />
            </div>
            <x-input-error :messages="$errors->get('graduation_year')" class="mt-2" />

            <!-- Password -->
            <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="flex items-center">
                    <div
                        class="text-xl bg-purple-50 text-fuchsia-800 w-14 h-12 flex justify-center items-center rounded-full">
                        {{-- <i class="fa-solid fa-lock"></i> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="w-6 h-6 inline-block align-text-top">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <x-text-input id="password" class="ml-4 block w-full bg-purple-50" type="password" name="password"
                        placeholder="Password" autocomplete="new-password" required />

                </div>
                <div class="flex items-center">
                    <x-text-input id="password_confirmation" class="ml-2 block w-full bg-purple-50" type="password"
                        name="password_confirmation" autocomplete="new-password" placeholder="Isi ulang password"
                        required />

                </div>
            </div>
            <div class="flex">
                <div class="flex-auto">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="flex-auto">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
            </div>

            {{-- Button --}}
            <div class="flex items-center justify-center mt-9 mb-8">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('login') }}">
                    {{ __('Sudah punya akun?') }}
                </a>

                <x-primary-button class="ml-4 px-12 py-3">
                    {{ __('Sign Up') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>

<script>
    // Dapatkan elemen input menggunakan ID
    var input = document.getElementById('graduation_year');

    // Tambahkan event listener untuk setiap karakter yang diketikkan dalam input
    input.addEventListener('input', function(event) {
        // Dapatkan nilai input
        var inputValue = event.target.value;

        // Hilangkan semua karakter yang bukan angka
        var numericValue = inputValue.replace(/\D/g, '');

        // Perbarui nilai input dengan hanya karakter angka
        event.target.value = numericValue;
    });
</script>
