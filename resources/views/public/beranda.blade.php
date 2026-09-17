@extends('layouts.app')

@section('title', 'VitraQua - Perusahaan Distribusi Air Minum')

@section('content')

    <!-- 1. HERO BANNER SECTION -->
    <section x-data="{
        slide: 0,
        slides: [
            '{{ asset('images/beranda/hero-bg.webp') }}',
            '{{ asset('images/beranda/hero-bg2.webp') }}',
            '{{ asset('images/beranda/hero-bg3.webp') }}'
        ],
        openDropdown: null
    }" class="relative w-full h-[550px] md:h-[650px] font-sans">

        {{-- Background Slider --}}
        <div class="absolute inset-0 overflow-hidden bg-slate-200">
            <!-- Slide 1 (Default / Utama) -->
            <div x-show="slide === 0" x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 scale-105" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-300" class="absolute inset-0 bg-center bg-cover"
                style="background-image: url('{{ asset('images/beranda/hero-bg.webp') }}')">
            </div>

            <!-- Slide 2 -->
            <div x-show="slide === 1" x-cloak x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 scale-105" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-300" class="absolute inset-0 bg-center bg-cover"
                style="background-image: url('{{ asset('images/beranda/hero-bg2.webp') }}')">
            </div>

            <!-- Slide 3 -->
            <div x-show="slide === 2" x-cloak x-transition:enter="transition ease-out duration-700"
                x-transition:enter-start="opacity-0 scale-105" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-300" class="absolute inset-0 bg-center bg-cover"
                style="background-image: url('{{ asset('images/beranda/hero-bg3.webp') }}')">
            </div>

            {{-- Soft Overlay --}}
            <div class="absolute inset-0 bg-black/5 pointer-events-none"></div>
        </div>

        {{-- Panah Navigasi Kiri (Bulat Putih) --}}
        <button type="button" @click="slide = (slide - 1 + slides.length) % slides.length" aria-label="Sebelumnya"
            class="absolute left-4 md:left-10 top-1/2 -translate-y-1/2 z-20 w-12 h-12 md:w-14 md:h-14 rounded-full bg-white/90 hover:bg-white text-slate-800 shadow-xl flex items-center justify-center transition transform hover:scale-105">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-slate-800" fill="none" viewBox="0 0 24 24"
                stroke-width="2.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
            </svg>
        </button>

        {{-- Panah Navigasi Kanan (Bulat Putih) --}}
        <button type="button" @click="slide = (slide + 1) % slides.length" aria-label="Berikutnya"
            class="absolute right-4 md:left-auto md:right-10 top-1/2 -translate-y-1/2 z-20 w-12 h-12 md:w-14 md:h-14 rounded-full bg-white/90 hover:bg-white text-slate-800 shadow-xl flex items-center justify-center transition transform hover:scale-105">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-slate-800" fill="none" viewBox="0 0 24 24"
                stroke-width="2.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
            </svg>
        </button>

        {{-- FLOATING INFO FEATURE BAR (PRESISI & LOLOS AUDIT) --}}
        <div class="absolute left-1/2 -translate-x-1/2 bottom-0 translate-y-1/2 z-30 w-[92%] max-w-6xl font-sans">
            <!-- 1. CATEGORY ICON BAR (DESAIN SAMA DENGAN FLOATING SECTION 1) -->
            <div
                class="bg-white rounded-2xl md:rounded-3xl shadow-md border border-slate-200/60 grid grid-cols-2 lg:grid-cols-6 items-center divide-y lg:divide-y-0 lg:divide-x divide-slate-100 p-4 md:py-6 md:px-6 gap-y-4 lg:gap-y-0">

                <!-- Kategori 1: Galon 19L -->
                <a href="#" class="flex items-center gap-3 px-3 py-1 group">
                    <div
                        class="w-10 h-10 md:w-12 md:h-12 rounded-xl bg-blue-50/80 group-hover:bg-blue-100 text-blue-900 flex items-center justify-center shrink-0 transition">
                        <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L5.59 15.12a2 2 0 01-1.022-.547m0 0A5.002 5.002 0 013 11V7a2 2 0 012-2h14a2 2 0 012 2v4a5.002 5.002 0 01-1.572 3.882z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h4
                            class="font-heading font-bold text-xs md:text-sm text-slate-800 group-hover:text-blue-900 transition">
                            Galon 19L</h4>
                        <p class="text-[11px] text-slate-500 leading-tight">Air Galon Utama</p>
                    </div>
                </a>

                <!-- Kategori 2: Air Botol -->
                <a href="#" class="flex items-center gap-3 px-3 py-1 group">
                    <div
                        class="w-10 h-10 md:w-12 md:h-12 rounded-xl bg-sky-50/80 group-hover:bg-sky-100 text-sky-700 flex items-center justify-center shrink-0 transition">
                        <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                    </div>
                    <div>
                        <h4
                            class="font-heading font-bold text-xs md:text-sm text-slate-800 group-hover:text-blue-900 transition">
                            Air Botol</h4>
                        <p class="text-[11px] text-slate-500 leading-tight">Ukuran Praktis</p>
                    </div>
                </a>

                <!-- Kategori 3: Paket Dus -->
                <a href="#" class="flex items-center gap-3 px-3 py-1 group">
                    <div
                        class="w-10 h-10 md:w-12 md:h-12 rounded-xl bg-indigo-50/80 group-hover:bg-indigo-100 text-indigo-800 flex items-center justify-center shrink-0 transition">
                        <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M5 8h14M5 8a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v1a2 2 0 01-2 2M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h4
                            class="font-heading font-bold text-xs md:text-sm text-slate-800 group-hover:text-blue-900 transition">
                            Paket Dus</h4>
                        <p class="text-[11px] text-slate-500 leading-tight">Stok Karton</p>
                    </div>
                </a>

                <!-- Kategori 4: Langganan -->
                <a href="#" class="flex items-center gap-3 px-3 py-1 group">
                    <div
                        class="w-10 h-10 md:w-12 md:h-12 rounded-xl bg-teal-50/80 group-hover:bg-teal-100 text-teal-700 flex items-center justify-center shrink-0 transition">
                        <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <h4
                            class="font-heading font-bold text-xs md:text-sm text-slate-800 group-hover:text-blue-900 transition">
                            Langganan</h4>
                        <p class="text-[11px] text-slate-500 leading-tight">Hemat Bulanan</p>
                    </div>
                </a>

                <!-- Kategori 5: Aksesoris -->
                <a href="#" class="flex items-center gap-3 px-3 py-1 group">
                    <div
                        class="w-10 h-10 md:w-12 md:h-12 rounded-xl bg-cyan-50/80 group-hover:bg-cyan-100 text-cyan-800 flex items-center justify-center shrink-0 transition">
                        <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <div>
                        <h4
                            class="font-heading font-bold text-xs md:text-sm text-slate-800 group-hover:text-blue-900 transition">
                            Aksesoris</h4>
                        <p class="text-[11px] text-slate-500 leading-tight">Pompa & Rak</p>
                    </div>
                </a>

                <!-- Kategori 6: Semua -->
                <a href="#" class="flex items-center gap-3 px-3 py-1 group">
                    <div
                        class="w-10 h-10 md:w-12 md:h-12 rounded-xl bg-slate-100 group-hover:bg-slate-200 text-slate-700 flex items-center justify-center shrink-0 transition">
                        <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </div>
                    <div>
                        <h4
                            class="font-heading font-bold text-xs md:text-sm text-slate-800 group-hover:text-blue-900 transition">
                            Semua</h4>
                        <p class="text-[11px] text-slate-500 leading-tight">Lihat Katalog</p>
                    </div>
                </a>

            </div>
        </div>
    </section>

    <!-- 2. PRODUCTS SECTION (E-COMMERCE UI SAMA DENGAN REFERENSI) -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 pt-20 font-sans space-y-10" id="products">

        <!-- 2. TOP PICKS PRODUCT CARD CONTAINER (LOLOS AUDIT & KONTRASTING) -->
        <div class="bg-white rounded-3xl p-6 md:p-8 border border-slate-200/80 shadow-sm">

            <!-- Header Section Card -->
            <div class="flex items-center justify-between mb-6">
                <h2 class="font-heading text-xl md:text-2xl font-bold text-slate-900 flex items-center gap-2">
                    Pilihan Terbaik <span class="text-amber-400">✨</span>
                </h2>
                <a href="#"
                    class="text-xs md:text-sm font-semibold text-slate-700 hover:text-blue-900 flex items-center gap-1 transition">
                    <span>Lihat Semua Promo</span>
                    <span>&rarr;</span>
                </a>
            </div>

            <!-- Product Grid (5 Kolom Sesuai Gambar) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">

                <!-- Produk 1 -->
                <div
                    class="bg-slate-50/70 rounded-2xl p-3 flex flex-col justify-between hover:bg-white hover:shadow-xl hover:border-slate-200 border border-transparent transition duration-300 relative group">
                    <!-- Badge Diskon -->
                    <span
                        class="absolute top-3 left-3 bg-red-500 text-white text-[10px] font-bold px-2 py-0.5 rounded-md z-10">
                        -20%
                    </span>
                    <div class="h-40 w-full flex items-center justify-center p-2 mb-2">
                        <img src="https://placehold.co/200x200/transparent/0284c7?text=Galon+19L" alt="Galon 19L"
                            class="h-full object-contain group-hover:scale-105 transition" />
                    </div>
                    <div>
                        <h3 class="font-heading font-semibold text-slate-800 text-xs line-clamp-2">Galon Isi Ulang 19 Liter
                        </h3>
                        <div class="flex items-center gap-1 mt-1 text-amber-400 text-[10px]">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            <span class="text-slate-400 ml-0.5">(1,234)</span>
                        </div>
                        <div class="flex items-center justify-between mt-2">
                            <div>
                                <span class="font-heading font-extrabold text-blue-900 text-sm">Rp 20.000</span>
                                <span class="block text-[10px] text-slate-400 line-through">Rp 25.000</span>
                            </div>
                            <!-- Tombol Keranjang Bulat Hijau Tua/Biru -->
                            <button
                                class="w-8 h-8 rounded-lg bg-emerald-900 hover:bg-emerald-950 text-white flex items-center justify-center shadow-md transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Produk 2 -->
                <div
                    class="bg-slate-50/70 rounded-2xl p-3 flex flex-col justify-between hover:bg-white hover:shadow-xl hover:border-slate-200 border border-transparent transition duration-300 relative group">
                    <span
                        class="absolute top-3 left-3 bg-red-500 text-white text-[10px] font-bold px-2 py-0.5 rounded-md z-10">
                        -15%
                    </span>
                    <div class="h-40 w-full flex items-center justify-center p-2 mb-2">
                        <img src="https://placehold.co/200x200/transparent/0284c7?text=Botol+600ml" alt="Botol 600ml"
                            class="h-full object-contain group-hover:scale-105 transition" />
                    </div>
                    <div>
                        <h3 class="font-heading font-semibold text-slate-800 text-xs line-clamp-2">1 Dus Air Botol 600ml
                            (24 Pcs)</h3>
                        <div class="flex items-center gap-1 mt-1 text-amber-400 text-[10px]">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            <span class="text-slate-400 ml-0.5">(812)</span>
                        </div>
                        <div class="flex items-center justify-between mt-2">
                            <div>
                                <span class="font-heading font-extrabold text-blue-900 text-sm">Rp 45.000</span>
                                <span class="block text-[10px] text-slate-400 line-through">Rp 52.000</span>
                            </div>
                            <button
                                class="w-8 h-8 rounded-lg bg-emerald-900 hover:bg-emerald-950 text-white flex items-center justify-center shadow-md transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Produk 3 -->
                <div
                    class="bg-slate-50/70 rounded-2xl p-3 flex flex-col justify-between hover:bg-white hover:shadow-xl hover:border-slate-200 border border-transparent transition duration-300 relative group">
                    <span
                        class="absolute top-3 left-3 bg-red-500 text-white text-[10px] font-bold px-2 py-0.5 rounded-md z-10">
                        -25%
                    </span>
                    <div class="h-40 w-full flex items-center justify-center p-2 mb-2">
                        <img src="https://placehold.co/200x200/transparent/0284c7?text=Botol+1.5L" alt="Botol 1.5L"
                            class="h-full object-contain group-hover:scale-105 transition" />
                    </div>
                    <div>
                        <h3 class="font-heading font-semibold text-slate-800 text-xs line-clamp-2">1 Dus Air Botol 1.5
                            Liter (12 Pcs)</h3>
                        <div class="flex items-center gap-1 mt-1 text-amber-400 text-[10px]">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            <span class="text-slate-400 ml-0.5">(545)</span>
                        </div>
                        <div class="flex items-center justify-between mt-2">
                            <div>
                                <span class="font-heading font-extrabold text-blue-900 text-sm">Rp 48.000</span>
                                <span class="block text-[10px] text-slate-400 line-through">Rp 64.000</span>
                            </div>
                            <button
                                class="w-8 h-8 rounded-lg bg-emerald-900 hover:bg-emerald-950 text-white flex items-center justify-center shadow-md transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Produk 4 -->
                <div
                    class="bg-slate-50/70 rounded-2xl p-3 flex flex-col justify-between hover:bg-white hover:shadow-xl hover:border-slate-200 border border-transparent transition duration-300 relative group">
                    <span
                        class="absolute top-3 left-3 bg-red-500 text-white text-[10px] font-bold px-2 py-0.5 rounded-md z-10">
                        -10%
                    </span>
                    <div class="h-40 w-full flex items-center justify-center p-2 mb-2">
                        <img src="https://placehold.co/200x200/transparent/0284c7?text=Langganan" alt="Paket Langganan"
                            class="h-full object-contain group-hover:scale-105 transition" />
                    </div>
                    <div>
                        <h3 class="font-heading font-semibold text-slate-800 text-xs line-clamp-2">Paket Langganan 10 Galon
                        </h3>
                        <div class="flex items-center gap-1 mt-1 text-amber-400 text-[10px]">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            <span class="text-slate-400 ml-0.5">(963)</span>
                        </div>
                        <div class="flex items-center justify-between mt-2">
                            <div>
                                <span class="font-heading font-extrabold text-blue-900 text-sm">Rp 180.000</span>
                                <span class="block text-[10px] text-slate-400 line-through">Rp 200.000</span>
                            </div>
                            <button
                                class="w-8 h-8 rounded-lg bg-emerald-900 hover:bg-emerald-950 text-white flex items-center justify-center shadow-md transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Produk 5 -->
                <div
                    class="bg-slate-50/70 rounded-2xl p-3 flex flex-col justify-between hover:bg-white hover:shadow-xl hover:border-slate-200 border border-transparent transition duration-300 relative group">
                    <span
                        class="absolute top-3 left-3 bg-red-500 text-white text-[10px] font-bold px-2 py-0.5 rounded-md z-10">
                        -20%
                    </span>
                    <div class="h-40 w-full flex items-center justify-center p-2 mb-2">
                        <img src="https://placehold.co/200x200/transparent/0284c7?text=Dispenser" alt="Dispenser Air"
                            class="h-full object-contain group-hover:scale-105 transition" />
                    </div>
                    <div>
                        <h3 class="font-heading font-semibold text-slate-800 text-xs line-clamp-2">Pompa Galon Elektrik
                            Charge</h3>
                        <div class="flex items-center gap-1 mt-1 text-amber-400 text-[10px]">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            <span class="text-slate-400 ml-0.5">(1,108)</span>
                        </div>
                        <div class="flex items-center justify-between mt-2">
                            <div>
                                <span class="font-heading font-extrabold text-blue-900 text-sm">Rp 39.900</span>
                                <span class="block text-[10px] text-slate-400 line-through">Rp 49.900</span>
                            </div>
                            <button
                                class="w-8 h-8 rounded-lg bg-emerald-900 hover:bg-emerald-950 text-white flex items-center justify-center shadow-md transition">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <!-- 3. PROMO BOTTOM BANNERS (3 GRID DI BAGIAN BAWAH GAMBAR REFF) -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">

            <!-- Banner 1 (Hijau Muda Soft) -->
            <div
                class="bg-emerald-50/80 rounded-3xl p-6 border border-emerald-100 flex items-center justify-between relative overflow-hidden group">
                <div class="space-y-2 z-10">
                    <span class="text-[11px] font-bold text-slate-500 uppercase tracking-wider">Produk Baru</span>
                    <h3 class="font-heading font-extrabold text-slate-900 text-lg leading-snug">Kemasan Galon<br />BPA
                        Free
                    </h3>
                    <a href="#"
                        class="inline-flex items-center gap-1 text-xs font-bold text-slate-900 hover:underline pt-1">
                        <span>Beli Sekarang</span>
                        <span>&rarr;</span>
                    </a>
                </div>
                <img src="https://placehold.co/150x150/transparent/047857?text=BPA+Free" alt="Promo 1"
                    class="w-28 h-28 object-contain group-hover:scale-105 transition" />
            </div>

            <!-- Banner 2 (Kuning/Krem Soft) -->
            <div
                class="bg-amber-50/80 rounded-3xl p-6 border border-amber-100 flex items-center justify-between relative overflow-hidden group">
                <div class="space-y-2 z-10">
                    <span class="text-[11px] font-bold text-slate-500 uppercase tracking-wider">Hemat Bulanan</span>
                    <h3 class="font-heading font-extrabold text-slate-900 text-lg leading-snug">Langganan<br />Lebih
                        Praktis</h3>
                    <a href="#"
                        class="inline-flex items-center gap-1 text-xs font-bold text-slate-900 hover:underline pt-1">
                        <span>Cek Paket</span>
                        <span>&rarr;</span>
                    </a>
                </div>
                <img src="https://placehold.co/150x150/transparent/b45309?text=Paket" alt="Promo 2"
                    class="w-28 h-28 object-contain group-hover:scale-105 transition" />
            </div>

            <!-- Banner 3 (Biru Muda Soft) -->
            <div
                class="bg-sky-50/80 rounded-3xl p-6 border border-sky-100 flex items-center justify-between relative overflow-hidden group">
                <div class="space-y-2 z-10">
                    <span class="text-[11px] font-bold text-slate-500 uppercase tracking-wider">Layanan
                        Pengiriman</span>
                    <h3 class="font-heading font-extrabold text-slate-900 text-lg leading-snug">Bebas Ongkir<br />Area
                        Terdekat</h3>
                    <a href="#"
                        class="inline-flex items-center gap-1 text-xs font-bold text-slate-900 hover:underline pt-1">
                        <span>Pesan Sekarang</span>
                        <span>&rarr;</span>
                    </a>
                </div>
                <img src="https://placehold.co/150x150/transparent/0284c7?text=Ongkir+0" alt="Promo 3"
                    class="w-28 h-28 object-contain group-hover:scale-105 transition" />
            </div>

        </div>

    </section>

    <!-- 3. ABOUT US / TENTANG KAMI SECTION -->
    <section class="w-full bg-slate-50/60 pt-24 md:pt-32 pb-20 relative z-10 font-sans overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-center">

                <!-- BINGKAI FOTO GALON KIRI (5/12) -->
                <div class="lg:col-span-5 relative">

                    <!-- Frame Image Utama -->
                    <div class="relative z-10 bg-white p-3 rounded-3xl shadow-xl border border-slate-100">
                        <div
                            class="relative h-[380px] md:h-[420px] rounded-2xl overflow-hidden bg-gradient-to-br from-sky-100 via-blue-50 to-white flex items-center justify-center">

                            <!-- Gambar Utama Galon Vitra Qua -->
                            <img src="{{ asset('images/beranda/galon.webp') }}" alt="Kemurnian Galon Vitra Qua"
                                class="h-4/5 object-contain drop-shadow-xl hover:scale-105 transition duration-500" />

                            <!-- Badge Overlay Kaca Melayang (Ukuran Teks Sesuai Standar Minimal 12px) -->
                            <div
                                class="absolute bottom-4 left-4 right-4 bg-white/90 backdrop-blur-md p-4 rounded-xl border border-white/80 shadow-lg flex items-center gap-3">
                                <div
                                    class="w-10 h-10 rounded-lg bg-blue-600 text-white flex items-center justify-center font-heading font-black text-sm shrink-0 shadow-md">
                                    AQ
                                </div>
                                <div>
                                    <h4 class="font-heading text-xs font-bold text-slate-800">Mata Air Pegunungan Asli</h4>
                                    <p class="text-xs text-slate-500 mt-0.5">Disaring langsung dari kedalaman alami</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Badge Pengalaman Melayang (Ukuran Teks Sesuai Standar Minimal 12px) -->
                    <div
                        class="absolute -top-5 -right-2 md:-right-4 z-20 bg-blue-900 text-white px-5 py-4 rounded-2xl shadow-xl border-2 border-white flex items-center gap-3">
                        <span class="font-heading text-3xl font-black text-white leading-none">24</span>
                        <div class="text-xs font-semibold uppercase tracking-wider leading-tight text-white">
                            Tahun<br /><span class="text-white font-bold">Pengalaman</span>
                        </div>
                    </div>

                </div>

                <!-- DESKRIPSI & KEUNGGULAN KANAN (7/12) -->
                <div class="lg:col-span-7 space-y-6">

                    <!-- Tag Subheading -->
                    <div
                        class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-100/70 border border-blue-200/60 text-blue-800 text-xs font-semibold tracking-wide">
                        <span>Tentang VitraQua</span>
                    </div>

                    <!-- Main Heading -->
                    <h2 class="font-heading text-2xl md:text-3xl font-extrabold text-slate-900 leading-tight">
                        Komitmen Menghadirkan Kemurnian Air Mineral Setiap Hari
                    </h2>

                    <!-- Main Description (Diberi max-w-2xl Agar Line-Length Pas) -->
                    <p class="text-slate-600 text-sm md:text-base leading-relaxed font-normal max-w-2xl">
                        Vitra Qua diproses menggunakan teknologi mikro-filtrasi steril berkualifikasi internasional untuk
                        menjaga keaslian nutrisi dan keseimbangan kadar pH alami air mineral bagi keluarga Anda.
                    </p>

                    <!-- Grid Kartu Fitur (Ukuran Font Diperbesar) -->
                    <div class="grid sm:grid-cols-2 gap-4 pt-2">

                        <!-- Fitur 1 -->
                        <div
                            class="p-5 rounded-2xl bg-white border border-slate-200/80 hover:border-blue-300 hover:shadow-md transition group">
                            <div
                                class="w-9 h-9 rounded-lg bg-sky-50 group-hover:bg-blue-600 group-hover:text-white text-blue-600 transition duration-300 flex items-center justify-center font-heading font-black text-xs mb-3">
                                01
                            </div>
                            <h3 class="font-heading font-bold text-slate-800 text-sm">Standar Higienis Khas</h3>
                            <p class="text-slate-600 text-xs md:text-sm mt-1 leading-relaxed">
                                Pembersihan galon multi-tahap menggunakan sinar ultraviolet steril.
                            </p>
                        </div>

                        <!-- Fitur 2 -->
                        <div
                            class="p-5 rounded-2xl bg-white border border-slate-200/80 hover:border-blue-300 hover:shadow-md transition group">
                            <div
                                class="w-9 h-9 rounded-lg bg-sky-50 group-hover:bg-blue-600 group-hover:text-white text-blue-600 transition duration-300 flex items-center justify-center font-heading font-black text-xs mb-3">
                                02
                            </div>
                            <h3 class="font-heading font-bold text-slate-800 text-sm">Layanan Lintas Antar</h3>
                            <p class="text-slate-600 text-xs md:text-sm mt-1 leading-relaxed">
                                Pemesanan cepat dan siap diantar langsung oleh armada resmi kami.
                            </p>
                        </div>

                    </div>

                    <!-- Action CTA & Direksi Footer (Ukurannya Lebih Jelas) -->
                    <div
                        class="pt-4 flex flex-col sm:flex-row items-start sm:items-center gap-6 border-t border-slate-200/60">
                        <a href="#products"
                            class="bg-blue-900 hover:bg-blue-950 text-white px-8 py-3.5 rounded-full text-xs md:text-sm font-heading font-semibold shadow-md transition transform hover:-translate-y-0.5">
                            Pesan Air Sekarang
                        </a>

                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-full bg-slate-200 overflow-hidden shrink-0 border-2 border-white shadow-sm">
                                <img src="https://placehold.co/100x100/1e3a8a/ffffff?text=CEO" alt="Direksi Vitra Qua"
                                    class="w-full h-full object-cover" />
                            </div>
                            <div>
                                <h4 class="font-heading font-bold text-xs text-slate-800">Direksi Vitra Qua</h4>
                                <p class="text-xs text-slate-500">Kualitas & Kesegaran Utama</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>


@endsection
