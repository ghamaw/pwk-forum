<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Rekataloka') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/1c4425c9c5.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-inter  text-gray-900 antialiased">
    <div
        class="min-h-screen flex flex-col sm:justify-center items-center p-8 sm:pt-0 bg-gradient-to-b from-red-100 to-fuchsia-800 dark:bg-gray-900">
        <div
            class="w-full sm:max-w-3xl mt-4 p-10 bg-white dark:bg-gray-800 shadow-md overflow-hidden rounded-tl-md rounded-tr-md">
            {{ $slot }}
            {{-- divider --}}
        </div>
        <div class="w-full sm:max-w-3xl"
            style="background-image: url('/img/form-auth-divider.png');color: white;
            width: 100%;
            padding-top: 95px;
            margin-top: -50px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            z-index: 9999;">
        </div>



        <!-- Feature -->
        <div class="w-full sm:max-w-3xl p-10 rounded-bl-lg rounded-br-lg" style="background-color: #814299;">
            <div class="container px-6 pt-6">
                <div class="grid md:grid-cols-2 lg:grid-cols-4">
                    <div class="mb-6">
                        <div class="relative pl-16 sm:col-span-1">
                            <dt class="text-base font-semibold leading-7  text-white">
                                <div
                                    class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-full bg-white">
                                    <i class="fa-solid fa-link text-fuchsia-800"></i>
                                </div>
                                Link & Match
                            </dt>
                            <dd class="mt-2 text-sm text-gray-50">Memberikan peluang mendapat atau membuka kesempatan
                                pekerjaan, penelitian, project, dan pengabdian.
                            </dd>
                        </div>
                    </div>

                    <div class="mb-6">
                        <div class="relative pl-16 sm:col-span-1">
                            <dt class="text-base font-semibold leading-7  text-white">
                                <div
                                    class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-full bg-white">
                                    <i class="fa-solid fa-link text-fuchsia-800"></i>
                                </div>
                                Kegiatan Alumni
                            </dt>
                            <dd class="mt-2 text-sm text-gray-50">berpeluang berkesempatan mengikuti kegiatan seperti
                                pelatihan, penyuluhan, dan lainnya secara eksklusif.
                            </dd>
                        </div>
                    </div>

                    <div class="mb-6">
                        <div class="relative pl-16 sm:col-span-1">
                            <dt class="text-base font-semibold leading-7  text-white">
                                <div
                                    class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-full bg-white">
                                    <i class="fa-solid fa-link text-fuchsia-800"></i>
                                </div>
                                Forum Dua Arah
                            </dt>
                            <dd class="mt-2 text-sm text-gray-50">Memberikan kesempatan antar alumni untuk berentiraksi
                                dan diskusi mengenai isu perencanaan.
                            </dd>
                        </div>
                    </div>

                    <div class="mb-6">
                        <div class="relative pl-16 sm:col-span-1">
                            <dt class="text-base font-semibold leading-7  text-white">
                                <div
                                    class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-full bg-white">
                                    <i class="fa-solid fa-link text-fuchsia-800"></i>
                                </div>
                                Database
                            </dt>
                            <dd class="mt-2 text-sm text-gray-50">Ingin mengetahui rekam jejak para alumni? Anda bisa
                                cari pada menu Database!.
                            </dd>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
