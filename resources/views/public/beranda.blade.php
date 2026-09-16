@extends('layouts.app')

@section('title', 'Vitra Qua - Water Delivery Company')

@section('content')

    <!-- 1. HERO BANNER SECTION -->
    <section class="relative w-full min-h-[90vh] md:min-h-screen overflow-hidden">

        <!-- SWIPER CONTAINER -->
        <div class="swiper hero-swiper w-full h-full min-h-[90vh] md:min-h-screen">
            <div class="swiper-wrapper">

                <!-- SLIDE 1 -->
                <div class="swiper-slide flex items-center bg-cover bg-center min-h-[90vh] md:min-h-screen"
                    style="background-image: url('{{ asset('images/beranda/hero-bg.webp') }}');">
                    <div
                        class="max-w-7xl mx-auto px-6 md:px-12 grid md:grid-cols-2 gap-12 md:gap-20 items-center relative z-10 w-full pt-20 pb-36">
                        <div class="pl-2 md:pl-4">
                            <span
                                class="inline-block bg-white/90 backdrop-blur-sm text-blue-900 font-semibold text-xs md:text-sm px-4 py-1.5 rounded-full tracking-wide shadow-sm mb-2">
                                Kemurnian Air Alami, Langsung ke Rumah Anda
                            </span>
                            <h1
                                class="text-5xl md:text-7xl font-black text-blue-950 mt-1 leading-tight tracking-tight drop-shadow-md">
                                Vitra Qua
                            </h1>
                            <p
                                class="text-white mt-4 text-base md:text-lg font-semibold max-w-lg leading-relaxed drop-shadow-md">
                                Diproses higienis dari sumber mata air alami untuk menjaga kadar mineral esensial harian
                                Anda.
                            </p>
                            <div class="mt-8">
                                <a href="#products"
                                    class="inline-block bg-blue-900 hover:bg-blue-950 text-white font-bold px-9 py-4 rounded-full text-sm md:text-base shadow-2xl transition transform hover:-translate-y-1">
                                    Pesan Sekarang &rarr;
                                </a>
                            </div>
                        </div>
                        <div class="flex justify-center md:justify-end">
                            <img src="{{ asset('images/beranda/galon.webp') }}" alt="Natural Spring Water"
                                class="w-full max-w-md md:max-w-xl object-contain drop-shadow-2xl relative z-10 mt-8 md:mt-12 translate-y-4 md:translate-y-8" />
                        </div>
                    </div>
                </div>

                <!-- SLIDE 2 -->
                <div class="swiper-slide flex items-center bg-cover bg-center min-h-[90vh] md:min-h-screen"
                    style="background-image: url('{{ asset('images/beranda/hero-bg2.webp') }}');">
                    <div
                        class="max-w-7xl mx-auto px-6 md:px-12 grid md:grid-cols-2 gap-12 md:gap-20 items-center relative z-10 w-full pt-20 pb-36">
                        <div class="pl-2 md:pl-4">
                            <span
                                class="inline-block bg-white/90 backdrop-blur-sm text-blue-900 font-semibold text-xs md:text-sm px-4 py-1.5 rounded-full tracking-wide shadow-sm mb-2">
                                Pengantaran Cepat & Tepat
                            </span>
                            <h1
                                class="text-5xl md:text-7xl font-black text-blue-950 mt-1 leading-tight tracking-tight drop-shadow-md">
                                Bebas Repot
                            </h1>
                            <p
                                class="text-white mt-4 text-base md:text-lg font-semibold max-w-lg leading-relaxed drop-shadow-md">
                                Kurir siap mengantarkan galon Vitra Qua tepat sampai di depan pintu rumah Anda tanpa biaya
                                tersembunyi.
                            </p>
                            <div class="mt-8">
                                <a href="#products"
                                    class="inline-block bg-blue-900 hover:bg-blue-950 text-white font-bold px-9 py-4 rounded-full text-sm md:text-base shadow-2xl transition transform hover:-translate-y-1">
                                    Pesan Sekarang &rarr;
                                </a>
                            </div>
                        </div>
                        <div class="flex justify-center md:justify-end">
                            <img src="{{ asset('images/beranda/galon.webp') }}" alt="Delivery"
                                class="w-full max-w-md md:max-w-xl object-contain drop-shadow-2xl relative z-10 mt-8 md:mt-12 translate-y-4 md:translate-y-8" />
                        </div>
                    </div>
                </div>

                <!-- SLIDE 3 -->
                <div class="swiper-slide flex items-center bg-cover bg-center min-h-[90vh] md:min-h-screen"
                    style="background-image: url('{{ asset('images/beranda/hero-bg3.webp') }}');">
                    <div
                        class="max-w-7xl mx-auto px-6 md:px-12 grid md:grid-cols-2 gap-12 md:gap-20 items-center relative z-10 w-full pt-20 pb-36">
                        <div class="pl-2 md:pl-4">
                            <span
                                class="inline-block bg-white/90 backdrop-blur-sm text-blue-900 font-semibold text-xs md:text-sm px-4 py-1.5 rounded-full tracking-wide shadow-sm mb-2">
                                Penawaran Spesial Pelanggan Baru
                            </span>
                            <h1
                                class="text-5xl md:text-7xl font-black text-blue-950 mt-1 leading-tight tracking-tight drop-shadow-md">
                                Lebih Hemat
                            </h1>
                            <p
                                class="text-white mt-4 text-base md:text-lg font-semibold max-w-lg leading-relaxed drop-shadow-md">
                                Dapatkan promo khusus pemesanan paket langganan bulanan. Bebas biaya kirim untuk wilayah
                                perkotaan!
                            </p>
                            <div class="mt-8">
                                <a href="#products"
                                    class="inline-block bg-blue-900 hover:bg-blue-950 text-white font-bold px-9 py-4 rounded-full text-sm md:text-base shadow-2xl transition transform hover:-translate-y-1">
                                    Klaim Promo &rarr;
                                </a>
                            </div>
                        </div>
                        <div class="flex justify-center md:justify-end">
                            <img src="{{ asset('images/beranda/galon.webp') }}" alt="Promo"
                                class="w-full max-w-md md:max-w-xl object-contain drop-shadow-2xl relative z-10 mt-8 md:mt-12 translate-y-4 md:translate-y-8" />
                        </div>
                    </div>
                </div>

            </div>

            <!-- TOMBOL NAVIGASI -->
            <button
                class="hero-prev absolute left-6 top-1/2 -translate-y-1/2 z-20 w-12 h-12 bg-blue-900/80 hover:bg-blue-950 rounded-full flex items-center justify-center text-white font-bold text-base shadow-lg transition cursor-pointer">
                &#10094;
            </button>
            <button
                class="hero-next absolute right-6 top-1/2 -translate-y-1/2 z-20 w-12 h-12 bg-blue-900/80 hover:bg-blue-950 rounded-full flex items-center justify-center text-white font-bold text-base shadow-lg transition cursor-pointer">
                &#10095;
            </button>
        </div>

        <!-- LENGKUNGAN OMBAK BAWAH -->
        <div class="absolute bottom-0 left-0 right-0 leading-none z-10 pointer-events-none overflow-hidden">
            <!-- Layer 1: Bayangan Transparan di Belakang -->
            <svg class="w-full h-16 md:h-24 text-white/40 fill-current" viewBox="0 0 1440 120" preserveAspectRatio="none">
                <path d="M0,32 C320,90 640,10 960,65 C1280,100 1380,30 1440,45 L1440,120 L0,120 Z"></path>
            </svg>

            <!-- Layer 2: Gelombang Putih Solid Utama di Depan -->
            <svg class="w-full h-12 md:h-20 text-white fill-current -mt-10 md:-mt-16 relative z-20" viewBox="0 0 1440 120"
                preserveAspectRatio="none">
                <path d="M0,60 C360,110 720,20 1080,70 C1260,95 1380,45 1440,55 L1440,120 L0,120 Z"></path>
            </svg>
        </div>
    </section>

    <!-- 2. ABOUT US SECTION -->
    <section class="w-full bg-white py-16 relative z-20">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12 items-center">

                <!-- Lingkaran Gambar Air Kiri -->
                <div class="relative flex justify-center items-center">
                    <div
                        class="w-72 h-72 md:w-80 md:h-80 rounded-full border-4 border-sky-200 p-2 relative flex items-center justify-center bg-sky-50/50 shadow-xl">
                        <div
                            class="w-full h-full rounded-full overflow-hidden bg-sky-50 flex items-center justify-center relative">
                            <img src="https://placehold.co/300x300/e0f2fe/0284c7?text=Galon+Water.webp"
                                alt="Galon Experience" class="w-3/4 h-3/4 object-contain" />
                        </div>

                        <!-- Badge 1: 24 Years of Experience -->
                        <div
                            class="absolute top-4 -left-2 bg-blue-900 text-white w-24 h-24 rounded-full flex flex-col items-center justify-center text-center p-2 shadow-lg border-2 border-white z-20">
                            <span class="text-2xl font-black leading-none">24</span>
                            <span class="text-[9px] font-semibold uppercase leading-tight mt-1">Years
                                of<br />Experience</span>
                        </div>

                        <!-- Badge 2: 250 Special Expert Team -->
                        <div
                            class="absolute bottom-4 -right-2 bg-blue-900 text-white w-24 h-24 rounded-full flex flex-col items-center justify-center text-center p-2 shadow-lg border-2 border-white z-20">
                            <span class="text-2xl font-black leading-none">250</span>
                            <span class="text-[9px] font-semibold uppercase leading-tight mt-1">Special
                                Expert<br />Team</span>
                        </div>
                    </div>
                </div>

                <!-- Deskripsi Teks Kanan -->
                <div class="pr-4">
                    <h2 class="text-2xl md:text-3xl font-extrabold text-blue-950 leading-tight">
                        The address of safe and healthy water with natural minerals
                    </h2>
                    <p class="text-slate-600 text-xs md:text-sm mt-3 leading-relaxed">
                        You will be able to get the liters of water you want in our special bottled water types. Stay
                        healthier
                        with our high mineral natural spring water for you to drink safe and healthy water whether at home,
                        in
                        the office or outside.
                    </p>

                    <div class="mt-6 space-y-4">
                        <div class="flex items-start gap-3">
                            <div class="p-2.5 bg-sky-50 rounded-xl text-blue-600 border border-sky-100 shadow-sm">
                                💧
                            </div>
                            <div>
                                <h4 class="font-bold text-blue-950 text-xs md:text-sm">Natural Mineral</h4>
                                <p class="text-xs text-slate-500 mt-0.5">You will not be able to get enough of drinking with
                                    our high mineral natural spring water.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="p-2.5 bg-sky-50 rounded-xl text-blue-600 border border-sky-100 shadow-sm">
                                ❤️
                            </div>
                            <div>
                                <h4 class="font-bold text-blue-950 text-xs md:text-sm">Healthy Water</h4>
                                <p class="text-xs text-slate-500 mt-0.5">For a healthy body, we recommend that you consume 3
                                    liters of water a day.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Tombol Kapsul Biru Tua -->
                    <button
                        class="mt-8 bg-blue-900 hover:bg-blue-950 text-white px-8 py-3.5 rounded-full text-xs font-bold transition flex items-center gap-2 shadow-lg">
                        <span>Get to know us</span>
                        <span>&rarr;</span>
                    </button>
                </div>

            </div>
        </div>
    </section>

    <!-- 3. PRODUCTS SECTION -->
    <section class="max-w-6xl mx-auto px-6 py-12" id="products">
        <div class="text-center mb-10">
            <h2 class="text-2xl font-extrabold text-blue-950">Choose Your Water</h2>
            <p class="text-slate-400 text-xs mt-1">Take advantage of our natural mineral waters.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <!-- Produk 1 -->
            <div
                class="bg-white rounded-xl p-4 flex flex-col justify-between hover:shadow-md transition border border-slate-50">
                <div class="h-44 bg-slate-50/60 rounded-xl flex items-center justify-center p-2 mb-3">
                    <img src="https://placehold.co/200x200/transparent/0284c7?text=12+Pcs+Carboy.webp" alt="Product"
                        class="h-full object-contain" />
                </div>
                <div class="text-center">
                    <h3 class="font-bold text-slate-800 text-xs">12 Pcs 0.5 Liter Carboy</h3>
                    <p class="text-blue-900 font-extrabold text-xs mt-1">Rp 45.000</p>
                </div>
                <button
                    class="mt-4 w-full bg-sky-500 hover:bg-sky-600 text-white py-2 rounded-full text-xs font-bold transition flex items-center justify-center gap-1.5 shadow-sm">
                    <span>🛒</span> Add to cart
                </button>
            </div>

            <!-- Produk 2 -->
            <div
                class="bg-white rounded-xl p-4 flex flex-col justify-between hover:shadow-md transition border border-slate-50">
                <div class="h-44 bg-slate-50/60 rounded-xl flex items-center justify-center p-2 mb-3">
                    <img src="https://placehold.co/200x200/transparent/0284c7?text=19+Liter+Carboy.webp" alt="Product"
                        class="h-full object-contain" />
                </div>
                <div class="text-center">
                    <h3 class="font-bold text-slate-800 text-xs">19 Liter Galon Vitra Qua</h3>
                    <p class="text-blue-900 font-extrabold text-xs mt-1">Rp 20.000</p>
                </div>
                <button
                    class="mt-4 w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-full text-xs font-bold transition flex items-center justify-center gap-1.5 shadow-sm">
                    <span>🛒</span> Add to cart
                </button>
            </div>

            <!-- Produk 3 -->
            <div
                class="bg-white rounded-xl p-4 flex flex-col justify-between hover:shadow-md transition border border-slate-50">
                <div class="h-44 bg-slate-50/60 rounded-xl flex items-center justify-center p-2 mb-3">
                    <img src="https://placehold.co/200x200/transparent/0284c7?text=2+Pcs+Pet+Water.webp" alt="Product"
                        class="h-full object-contain" />
                </div>
                <div class="text-center">
                    <h3 class="font-bold text-slate-800 text-xs">2 Pcs 1.5 Liter Botol</h3>
                    <p class="text-blue-900 font-extrabold text-xs mt-1">Rp 15.000</p>
                </div>
                <button
                    class="mt-4 w-full bg-sky-500 hover:bg-sky-600 text-white py-2 rounded-full text-xs font-bold transition flex items-center justify-center gap-1.5 shadow-sm">
                    <span>🛒</span> Add to cart
                </button>
            </div>

            <!-- Produk 4 -->
            <div
                class="bg-white rounded-xl p-4 flex flex-col justify-between hover:shadow-md transition border border-slate-50">
                <div class="h-44 bg-slate-50/60 rounded-xl flex items-center justify-center p-2 mb-3">
                    <img src="https://placehold.co/200x200/transparent/0284c7?text=Paket+Langganan.webp" alt="Product"
                        class="h-full object-contain" />
                </div>
                <div class="text-center">
                    <h3 class="font-bold text-slate-800 text-xs">Paket Langganan Bulanan</h3>
                    <p class="text-blue-900 font-extrabold text-xs mt-1">Rp 180.000</p>
                </div>
                <button
                    class="mt-4 w-full bg-sky-500 hover:bg-sky-600 text-white py-2 rounded-full text-xs font-bold transition flex items-center justify-center gap-1.5 shadow-sm">
                    <span>🛒</span> Add to cart
                </button>
            </div>

        </div>
    </section>

@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            new Swiper('.hero-swiper', {
                loop: true,
                speed: 800,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: '.hero-next',
                    prevEl: '.hero-prev',
                },
            });
        });
    </script>
@endpush
