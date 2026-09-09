<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'GalonExpress - Antar Air Minum Instant')</title>

    <!-- Tailwind CSS & JS via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Sembunyikan elemen Alpine.js sebelum termuat -->
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-800 font-sans flex flex-col min-h-screen">

    <!-- Memanggil Navbar -->
    @include('components.navbar')

    <!-- Konten Utama Dinamis (Diisi oleh halaman turunan) -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Memanggil Footer -->
    @include('components.footer')

</body>

</html>
