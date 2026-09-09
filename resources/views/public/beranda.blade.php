@extends('layouts.app')

@section('title', 'Watera - Water Delivery Company')

@section('content')

    <!-- 1. HERO BANNER SLIDER SECTION -->
    <section class="relative bg-gradient-to-b from-sky-400 via-sky-300 to-sky-200 text-white pt-10 pb-28 overflow-hidden">
        <!-- Tombol Slider Kiri -->
        <button
            class="absolute left-4 top-1/2 -translate-y-1/2 z-20 w-9 h-9 bg-blue-900/40 hover:bg-blue-900/70 rounded-full flex items-center justify-center text-white text-xs transition">
            &#10094;
        </button>

        <!-- Tombol Slider Kanan -->
        <button
            class="absolute right-4 top-1/2 -translate-y-1/2 z-20 w-9 h-9 bg-blue-900/40 hover:bg-blue-900/70 rounded-full flex items-center justify-center text-white text-xs transition">
            &#10095;
        </button>

        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-8 items-center relative z-10">
            <!-- Teks Kiri -->
            <div class="pl-4">
                <span class="text-white font-bold text-sm tracking-wide uppercase drop-shadow-sm">Natural Mineral</span>
                <h1 class="text-4xl md:text-5xl font-extrabold mt-1 leading-tight text-white drop-shadow-md">
                    Natural Spring Water
                </h1>
                <p class="text-sky-50 mt-3 text-xs md:text-sm max-w-sm leading-relaxed">
                    High mineral water from nature.
                </p>
            </div>

            <!-- Gambar Botol Air Banner -->
            <div class="flex justify-center relative">
                <!-- Tempat Gambar WebP Banner -->
                <img src="https://placehold.co/500x350/transparent/0284c7?text=Hero+Bottles+Water.webp"
                    alt="Natural Spring Water" class="w-full max-w-md object-contain drop-shadow-2xl" />
            </div>
        </div>

        <!-- Indicator Dots Slider -->
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 z-20 flex gap-1.5">
            <span class="w-6 h-1.5 bg-lime-400 rounded-full"></span>
            <span class="w-6 h-1.5 bg-lime-500 rounded-full"></span>
            <span class="w-6 h-1.5 bg-blue-900 rounded-full"></span>
        </div>

        <!-- Wave Shape Divider Bawah -->
        <div class="absolute bottom-0 left-0 right-0 leading-none z-10">
            <svg class="w-full h-12 md:h-16 text-white fill-current" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0 C150,90 350,-40 500,45 C650,130 900,10 1200,40 L1200,120 L0,120 Z"></path>
            </svg>
        </div>
    </section>


    <!-- 2. ABOUT US SECTION -->
    <section class="max-w-6xl mx-auto px-6 py-16 bg-white">
        <div class="grid md:grid-cols-2 gap-12 items-center">

            <!-- Lingkaran Gambar Air Kiri -->
            <div class="relative flex justify-center items-center">
                <div
                    class="w-72 h-72 md:w-80 md:h-80 rounded-full border-4 border-sky-200 p-2 relative flex items-center justify-center">
                    <!-- Inner Water Image Circle -->
                    <div
                        class="w-full h-full rounded-full overflow-hidden bg-sky-50 flex items-center justify-center relative">
                        <img src="https://placehold.co/300x300/e0f2fe/0284c7?text=Galon+Water.webp" alt="Galon Experience"
                            class="w-3/4 h-3/4 object-contain" />
                    </div>

                    <!-- Badge 1: 24 Years of Experience -->
                    <div
                        class="absolute top-4 -left-2 bg-blue-900 text-white w-24 h-24 rounded-full flex flex-col items-center justify-center text-center p-2 shadow-lg border-2 border-white z-20">
                        <span class="text-2xl font-black leading-none">24</span>
                        <span class="text-[9px] font-semibold uppercase leading-tight mt-1">Years of<br />Experience</span>
                    </div>

                    <!-- Badge 2: 250 Special Expert Team -->
                    <div
                        class="absolute bottom-4 -right-2 bg-blue-900 text-white w-24 h-24 rounded-full flex flex-col items-center justify-center text-center p-2 shadow-lg border-2 border-white z-20">
                        <span class="text-2xl font-black leading-none">250</span>
                        <span class="text-[9px] font-semibold uppercase leading-tight mt-1">Special Expert<br />Team</span>
                    </div>
                </div>
            </div>

            <!-- Deskripsi Teks Kanan -->
            <div class="pr-4">
                <h2 class="text-2xl md:text-3xl font-extrabold text-blue-950 leading-tight">
                    The address of safe and healthy water with natural minerals
                </h2>
                <p class="text-slate-500 text-xs mt-3 leading-relaxed">
                    You will be able to get the liters of water you want in our special bottled water types. Stay healthier
                    with our high mineral natural spring water for you to drink safe and healthy water whether at home, in
                    the office or outside.
                </p>

                <div class="mt-6 space-y-4">
                    <div class="flex items-start gap-3">
                        <div class="p-2 bg-sky-50 rounded-lg text-blue-600 border border-sky-100">
                            💧
                        </div>
                        <div>
                            <h4 class="font-bold text-blue-950 text-xs">Natural Mineral</h4>
                            <p class="text-[11px] text-slate-500 mt-0.5">You will not be able to get enough of drinking with
                                our high mineral natural spring water.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="p-2 bg-sky-50 rounded-lg text-blue-600 border border-sky-100">
                            ❤️
                        </div>
                        <div>
                            <h4 class="font-bold text-blue-950 text-xs">Healthy Water</h4>
                            <p class="text-[11px] text-slate-500 mt-0.5">For a healthy body, we recommend that you consume 3
                                liters of water a day.</p>
                        </div>
                    </div>
                </div>

                <!-- Tombol Kapsul Biru Tua -->
                <button
                    class="mt-8 bg-blue-900 hover:bg-blue-950 text-white px-7 py-3 rounded-full text-xs font-bold transition flex items-center gap-2 shadow-md">
                    <span>Get to know us</span>
                    <span>&rarr;</span>
                </button>
            </div>

        </div>
    </section>


    <!-- 3. PRODUCTS SECTION (Choose Your Water) -->
    <section class="max-w-6xl mx-auto px-6 py-12">
        <div class="text-center mb-10">
            <h2 class="text-2xl font-extrabold text-blue-950">Choose Your Water</h2>
            <p class="text-slate-400 text-xs mt-1">Take advantage of our natural mineral waters.</p>
        </div>

        <!-- Grid Produk 4 Kolom -->
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
                    <p class="text-blue-900 font-extrabold text-xs mt-1">$9.50</p>
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
                    <h3 class="font-bold text-slate-800 text-xs">19 Liter Carboy</h3>
                    <p class="text-blue-900 font-extrabold text-xs mt-1">$6.50</p>
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
                    <h3 class="font-bold text-slate-800 text-xs">2 Pcs 1 Liter Pet Water</h3>
                    <p class="text-blue-900 font-extrabold text-xs mt-1">$5.90</p>
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
                    <img src="https://placehold.co/200x200/transparent/0284c7?text=3+Pcs+19+Liter.webp" alt="Product"
                        class="h-full object-contain" />
                </div>
                <div class="text-center">
                    <h3 class="font-bold text-slate-800 text-xs">3 Pcs 19 Liter Carboy</h3>
                    <p class="text-blue-900 font-extrabold text-xs mt-1">$11.50</p>
                </div>
                <button
                    class="mt-4 w-full bg-sky-500 hover:bg-sky-600 text-white py-2 rounded-full text-xs font-bold transition flex items-center justify-center gap-1.5 shadow-sm">
                    <span>🛒</span> Add to cart
                </button>
            </div>

        </div>
    </section>

@endsection
