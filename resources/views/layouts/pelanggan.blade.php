<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard Pelanggan - Vitra Qua')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-100 font-sans text-slate-700 antialiased">

    <!-- Header Topbar -->
    <header class="bg-white border-b border-slate-200 sticky top-0 z-40 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <a href="{{ route('landing') }}" class="flex items-center gap-2">
                <span class="text-xl font-black text-blue-950 tracking-tight">Vitra Qua</span>
            </a>
            <div class="flex items-center gap-3">
                <a href="{{ route('landing') }}"
                    class="bg-slate-100 hover:bg-slate-200 text-slate-700 px-4 py-2 rounded-full text-xs font-bold transition">←
                    Kembali ke Web</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="text-xs font-bold text-red-600 bg-red-50 hover:bg-red-100 px-4 py-2 rounded-full transition">Keluar</button>
                </form>
            </div>
        </div>
    </header>

    <!-- Content Container -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex flex-col md:flex-row gap-6">

            <!-- Sidebar Pelanggan -->
            <aside class="w-full md:w-64 flex-shrink-0">

                <!-- Profil Header Card -->
                <div class="flex items-center gap-3 mb-6 pb-6 border-b border-slate-200">
                    <div
                        class="w-12 h-12 bg-blue-100 text-blue-700 rounded-full flex items-center justify-center font-bold text-lg border border-blue-200">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </div>
                    <div class="overflow-hidden">
                        <h3 class="text-sm font-extrabold text-blue-950 truncate">{{ Auth::user()->name }}</h3>
                        <a href="{{ route('pelanggan.akun.profil') }}"
                            class="text-[11px] font-semibold text-slate-400 hover:text-blue-600 transition">✎ Ubah
                            Profil</a>
                    </div>
                </div>

                <!-- Navigasi Sidebar -->
                <nav class="space-y-1 text-xs font-bold">

                    <!-- 1. DROPDOWN: AKUN SAYA -->
                    <div x-data="{ open: {{ request()->routeIs('pelanggan.akun.*') ? 'true' : 'false' }} }">
                        <button @click="open = !open"
                            class="w-full flex items-center justify-between px-3 py-2.5 rounded-xl transition {{ request()->routeIs('pelanggan.akun.*') ? 'text-blue-700 bg-sky-50' : 'text-slate-700 hover:bg-sky-50' }}">
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-blue-700" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                <span>Akun Saya</span>
                            </div>
                            <svg class="w-3.5 h-3.5 transition-transform duration-200" :class="{ 'rotate-180': open }"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <!-- Sub-Menu Akun Saya -->
                        <div x-show="open" x-collapse x-cloak
                            class="pl-9 pr-2 py-1 space-y-1 text-[11px] font-semibold">
                            <a href="{{ route('pelanggan.akun.profil') }}"
                                class="block py-2 px-3 rounded-lg transition {{ request()->routeIs('pelanggan.akun.profil') ? 'text-blue-700 font-extrabold bg-blue-100/50' : 'text-slate-500 hover:text-blue-600 hover:bg-slate-50' }}">
                                • Profil
                            </a>
                            <a href="{{ route('pelanggan.akun.alamat') }}"
                                class="block py-2 px-3 rounded-lg transition {{ request()->routeIs('pelanggan.akun.alamat') ? 'text-blue-700 font-extrabold bg-blue-100/50' : 'text-slate-500 hover:text-blue-600 hover:bg-slate-50' }}">
                                • Alamat
                            </a>
                            <a href="{{ route('pelanggan.akun.ubah-password') }}"
                                class="block py-2 px-3 rounded-lg transition {{ request()->routeIs('pelanggan.akun.ubah-password') ? 'text-blue-700 font-extrabold bg-blue-100/50' : 'text-slate-500 hover:text-blue-600 hover:bg-slate-50' }}">
                                • Ubah Password
                            </a>
                        </div>
                    </div>

                    <!-- 2. MENU: PESANAN SAYA -->
                    <a href="{{ route('pelanggan.pesanan.index') }}"
                        class="flex items-center gap-2 px-3 py-2.5 rounded-xl transition {{ request()->routeIs('pelanggan.pesanan.*') ? 'text-blue-700 bg-sky-50' : 'text-slate-700 hover:bg-sky-50' }}">
                        <svg class="w-4 h-4 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                            </path>
                        </svg>
                        <span>Pesanan Saya</span>
                    </a>

                    <!-- 3. MENU: KERANJANG SAYA -->
                    <a href="{{ route('pelanggan.keranjang.index') }}"
                        class="flex items-center gap-2 px-3 py-2.5 rounded-xl transition {{ request()->routeIs('pelanggan.keranjang.*') ? 'text-blue-700 bg-sky-50' : 'text-slate-700 hover:bg-sky-50' }}">
                        <svg class="w-4 h-4 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                        <span>Keranjang Saya</span>
                    </a>

                </nav>
            </aside>

            <!-- KONTEN UTAMA MUNCUL DI SINI -->
            <main class="flex-grow">
                @yield('content')
            </main>

        </div>
    </div>

</body>

</html>
