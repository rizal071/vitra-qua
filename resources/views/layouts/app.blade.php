<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Vitra Qua')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- SANGAT PENTING: PANGGIL STACK STYLES -->
    @stack('styles')
</head>

<body class="bg-slate-50 text-slate-800 font-sans flex flex-col min-h-screen">

    @include('components.navbar')

    <main class="flex-grow">
        @yield('content')
    </main>

    @include('components.footer')

    <!-- SANGAT PENTING: PANGGIL STACK SCRIPTS -->
    @stack('scripts')
</body>

</html>
