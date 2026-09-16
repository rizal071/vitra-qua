<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Saya - Vitra Qua</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-100 font-sans text-slate-700 antialiased">

    <!-- HEADER TOPBAR UTAMA -->
    <header class="bg-white border-b border-slate-200 sticky top-0 z-40 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="{{ route('landing') }}" class="flex items-center gap-2">
                <div>
                    <span class="text-xl font-black text-blue-950 tracking-tight">Vitra Qua</span>
                    <span class="block text-[8px] font-semibold text-blue-800/80 uppercase tracking-widest -mt-1">
                        Water Delivery Company
                    </span>
                </div>
            </a>

            <!-- Right Action Items -->
            <div class="flex items-center gap-3">
                <a href="{{ route('landing') }}"
                    class="inline-flex items-center gap-1.5 bg-slate-100 hover:bg-slate-200 text-slate-700 px-4 py-2 rounded-full text-xs font-bold transition">
                    ← Kembali ke Web
                </a>

                <!-- Profile Dropdown / Logout -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="text-xs font-bold text-red-600 hover:text-red-700 bg-red-50 hover:bg-red-100 px-4 py-2 rounded-full transition">
                        Keluar
                    </button>
                </form>
            </div>
        </div>
    </header>

    <!-- CONTAINER UTAMA (LAYOUT SIDEBAR + KONTEN) -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8" x-data="{ tab: 'all' }">
        <div class="flex flex-col md:flex-row gap-6">

            <!-- 1. SIDEBAR KIRI (PROFILE & NAVIGASI AKUN) -->
            <aside class="w-full md:w-64 flex-shrink-0">
                <!-- User Profile Card -->
                <div class="flex items-center gap-3 mb-6 pb-6 border-b border-slate-200">
                    <div
                        class="w-12 h-12 bg-blue-100 text-blue-700 rounded-full flex items-center justify-center font-bold text-lg border border-blue-200">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </div>
                    <div class="overflow-hidden">
                        <h3 class="text-sm font-extrabold text-blue-950 truncate">{{ Auth::user()->name }}</h3>
                        <a href="{{ route('profile.edit') }}"
                            class="text-[11px] font-semibold text-slate-400 hover:text-blue-600 transition flex items-center gap-1">
                            ✎ Ubah Profil
                        </a>
                    </div>
                </div>

                <!-- Navigation Links Sidebar -->
                <nav class="space-y-1">
                    <a href="{{ route('profile.edit') }}"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-xs font-bold text-slate-600 hover:text-blue-700 hover:bg-sky-50 transition">
                        <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <span>Akun Saya</span>
                    </a>

                    <a href="#"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-xs font-bold text-blue-700 bg-sky-50 transition">
                        <svg class="w-4 h-4 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                            </path>
                        </svg>
                        <span>Pesanan Saya</span>
                    </a>

                    <a href="#"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-xs font-bold text-slate-600 hover:text-blue-700 hover:bg-sky-50 transition">
                        <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                            </path>
                        </svg>
                        <span>Notifikasi</span>
                    </a>

                    <a href="#"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-xs font-bold text-slate-600 hover:text-blue-700 hover:bg-sky-50 transition">
                        <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z">
                            </path>
                        </svg>
                        <span>Voucher Saya</span>
                    </a>
                </nav>
            </aside>

            <!-- 2. KONTEN UTAMA KANAN (TAB NAVIGASI PESANAN & PENCARIAN) -->
            <main class="flex-grow">

                <!-- TAB STATUS PESANAN BAR -->
                <div
                    class="bg-white rounded-t-2xl border-b border-slate-200 flex items-center justify-between overflow-x-auto text-xs font-bold text-slate-600 scrollbar-none">
                    <button @click="tab = 'all'"
                        :class="tab === 'all' ? 'text-blue-700 border-b-2 border-blue-700 bg-sky-50/50' :
                            'hover:text-blue-600'"
                        class="px-5 py-4 transition flex-shrink-0">
                        Semua
                    </button>
                    <button @click="tab = 'unpaid'"
                        :class="tab === 'unpaid' ? 'text-blue-700 border-b-2 border-blue-700 bg-sky-50/50' :
                            'hover:text-blue-600'"
                        class="px-5 py-4 transition flex-shrink-0">
                        Belum Bayar
                    </button>
                    <button @click="tab = 'packing'"
                        :class="tab === 'packing' ? 'text-blue-700 border-b-2 border-blue-700 bg-sky-50/50' :
                            'hover:text-blue-600'"
                        class="px-5 py-4 transition flex-shrink-0">
                        Sedang Dikemas
                    </button>
                    <button @click="tab = 'shipping'"
                        :class="tab === 'shipping' ? 'text-blue-700 border-b-2 border-blue-700 bg-sky-50/50' :
                            'hover:text-blue-600'"
                        class="px-5 py-4 transition flex-shrink-0">
                        Dikirim
                    </button>
                    <button @click="tab = 'completed'"
                        :class="tab === 'completed' ? 'text-blue-700 border-b-2 border-blue-700 bg-sky-50/50' :
                            'hover:text-blue-600'"
                        class="px-5 py-4 transition flex-shrink-0">
                        Selesai
                    </button>
                    <button @click="tab = 'cancelled'"
                        :class="tab === 'cancelled' ? 'text-blue-700 border-b-2 border-blue-700 bg-sky-50/50' :
                            'hover:text-blue-600'"
                        class="px-5 py-4 transition flex-shrink-0">
                        Dibatalkan
                    </button>
                </div>

                <!-- SEARCH BAR PESANAN -->
                <div class="bg-slate-50 p-4 border-b border-slate-200">
                    <div class="relative">
                        <span
                            class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-slate-400">
                            🔍
                        </span>
                        <input type="text" placeholder="Kamu bisa cari berdasarkan No. Pesanan atau Nama Produk"
                            class="w-full pl-10 pr-4 py-2.5 bg-slate-200/60 border-0 rounded-xl text-xs focus:ring-2 focus:ring-blue-700 transition">
                    </div>
                </div>

                <!-- AREA DAFTAR PESANAN (KOSONG / EMPTY STATE) -->
                <div
                    class="bg-white rounded-b-2xl p-12 text-center min-h-[380px] flex flex-col items-center justify-center shadow-sm">
                    <div
                        class="w-24 h-24 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center text-5xl mb-4 border border-blue-100">
                        📋
                    </div>
                    <h4 class="text-base font-extrabold text-blue-950">Belum Ada Pesanan</h4>
                    <p class="text-xs text-slate-400 mt-1 max-w-sm">
                        Anda belum melakukan transaksi pesanan air galon atau produk Vitra Qua.
                    </p>
                    <a href="{{ route('landing') }}#products"
                        class="mt-6 inline-flex items-center bg-blue-700 hover:bg-blue-800 text-white px-6 py-2.5 rounded-full text-xs font-bold shadow-md transition transform hover:-translate-y-0.5">
                        Pesan Air Sekarang
                    </a>
                </div>

            </main>

        </div>
    </div>

</body>

</html>
