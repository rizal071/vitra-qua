<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center p-4 md:p-8 bg-slate-100">

        <!-- CARD MAIN CONTAINER -->
        <div
            class="w-full max-w-4xl bg-white rounded-3xl shadow-2xl overflow-hidden flex flex-col md:flex-row relative my-auto">

            <!-- 1. SISI KIRI: BRANDING HERO (DESKTOP) & HEADER (MOBILE) -->
            <div
                class="relative bg-gradient-to-br from-blue-600 via-blue-700 to-blue-900 text-white p-8 md:p-12 md:w-5/12 flex flex-col justify-between items-center text-center min-h-[240px] md:min-h-[520px]">

                <!-- BRANDING LOGO & ANIMATED ICON -->
                <div class="relative z-30 my-auto flex flex-col items-center">
                    <!-- Icon Amplop Animasi Membal/Melayang -->
                    <div class="relative mb-2">
                        <div
                            class="w-20 h-20 md:w-24 md:h-24 bg-white/10 backdrop-blur-md rounded-full flex items-center justify-center border border-white/20 shadow-inner animate-bounce">
                            <span class="text-4xl md:text-5xl">📩</span>
                        </div>
                        <!-- Halo Cahaya di Belakang Icon -->
                        <div class="absolute inset-0 rounded-full bg-sky-400/20 animate-ping pointer-events-none"></div>
                    </div>
                    <h1 class="text-3xl md:text-4xl font-black tracking-tight drop-shadow-md">Vitra Qua</h1>
                    <p class="text-xs uppercase tracking-widest text-sky-200 font-semibold mb-1">Cek Email Anda</p>
                </div>

                <!-- MOBILE MULTI-LAYER SMOOTH WAVES (UNTUK HP) -->
                <div class="absolute -bottom-3 left-0 right-0 md:hidden pointer-events-none z-20 h-14 w-full">
                    <svg class="absolute inset-0 w-full h-full text-white/30 fill-current" viewBox="0 0 1440 120"
                        preserveAspectRatio="none">
                        <path d="M0,20 C360,90 720,0 1080,70 C1260,95 1380,25 1440,35 L1440,120 L0,120 Z"></path>
                    </svg>
                    <svg class="absolute inset-0 w-full h-full text-white fill-current" viewBox="0 0 1440 120"
                        preserveAspectRatio="none">
                        <path d="M0,50 C320,110 640,20 960,80 C1200,100 1360,40 1440,50 L1440,120 L0,120 Z"></path>
                    </svg>
                </div>
            </div>

            <!-- 2. SISI KANAN: KONTEN VERIFIKASI EMAIL -->
            <div class="p-8 md:p-12 md:w-7/12 flex flex-col justify-center bg-white relative z-10 md:pl-16">

                <div class="mb-4 relative z-30">
                    <h2 class="text-2xl md:text-3xl font-extrabold text-blue-950">Verifikasi Email Anda</h2>
                    <p class="text-xs text-slate-400 mt-1">Kami telah mengirimkan tautan konfirmasi pendaftaran ke:</p>
                </div>

                <!-- BOX ALAMAT EMAIL TUJUAN -->
                <div
                    class="relative z-30 bg-sky-50/80 border border-sky-100 rounded-2xl p-3.5 mb-5 flex items-center gap-3">
                    <div class="p-2 bg-blue-600 text-white rounded-xl shadow-sm text-xs">
                        ✉️
                    </div>
                    <div class="overflow-hidden">
                        <p class="text-[10px] uppercase tracking-wider font-bold text-sky-600">Dikirim Ke Alamat Email
                        </p>
                        <p class="text-xs md:text-sm font-bold text-blue-950 truncate">
                            {{ Auth::user()->email ?? 'email.anda@domain.com' }}
                        </p>
                    </div>
                </div>

                <!-- NOTIFIKASI STATUS PENGIRIMAN ULANG -->
                @if (session('status') == 'verification-link-sent')
                    <div
                        class="relative z-30 mb-5 font-semibold text-xs text-emerald-700 bg-emerald-50 border border-emerald-200 p-3 rounded-xl flex items-center gap-2">
                        <span>✅</span>
                        <span>Tautan verifikasi baru telah berhasil dikirim ke alamat email Anda.</span>
                    </div>
                @endif

                <p class="text-xs text-slate-500 leading-relaxed mb-6 relative z-30">
                    Silakan buka email Anda dan klik tombol verifikasi di dalamnya. Jika belum menerima email, Anda bisa
                    mengeklik tombol di bawah untuk mengirim ulang.
                </p>

                <!-- TOMBOL-TOMBOL AKSI -->
                <div class="relative z-30 space-y-3">

                    <!-- Form Kirim Ulang Email -->
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <x-primary-button
                            class="w-full justify-center bg-blue-700 hover:bg-blue-800 py-3 rounded-full text-xs font-bold transition shadow-md">
                            {{ __('Kirim Ulang Email Verifikasi') }}
                        </x-primary-button>
                    </form>

                    <!-- Tombol Kembali ke Beranda -->
                    <a href="{{ route('landing') }}"
                        class="block w-full text-center border-2 border-slate-200 hover:border-blue-700 text-slate-600 hover:text-blue-700 py-2.5 rounded-full text-xs font-bold transition">
                        ← Kembali ke Beranda
                    </a>

                </div>

            </div>

        </div>
    </div>
</x-guest-layout>
