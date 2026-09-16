<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center p-4 md:p-8 bg-slate-100">

        <!-- CARD MAIN CONTAINER -->
        <div
            class="w-full max-w-4xl bg-white rounded-3xl shadow-2xl overflow-hidden flex flex-col md:flex-row relative my-auto">

            <!-- 1. SISI KIRI: BRANDING HERO (DESKTOP) & HEADER (MOBILE) -->
            <div
                class="relative bg-gradient-to-br from-blue-600 via-blue-700 to-blue-900 text-white p-8 md:p-12 md:w-5/12 flex flex-col justify-between items-center text-center min-h-[240px] md:min-h-[520px]">

                <!-- BRANDING LOGO & TEXT -->
                <div class="relative z-30 my-auto flex flex-col items-center">
                    <div
                        class="w-20 h-20 md:w-24 md:h-24 bg-white/10 backdrop-blur-md rounded-full flex items-center justify-center border border-white/20 shadow-inner mb-4">
                        <span class="text-4xl md:text-5xl">💧</span>
                    </div>

                    <p class="text-xs uppercase tracking-widest text-sky-200 font-semibold mb-1">Welcome to</p>
                    <h1 class="text-3xl md:text-4xl font-black tracking-tight drop-shadow-md">Vitra Qua</h1>

                    <p class="text-xs text-sky-100/80 mt-3 max-w-xs hidden md:block leading-relaxed">
                        Layanan antar air minum murni & alami langsung ke rumah Anda dengan cepat dan higienis.
                    </p>
                </div>


                <!-- MOBILE MULTI-LAYER SMOOTH WAVES (UNTUK TAMPILAN HP) -->
                <div class="absolute -bottom-1 left-0 right-0 md:hidden pointer-events-none z-20 h-14 w-full">
                    <svg class="absolute inset-0 w-full h-full text-blue-600/40 fill-current" viewBox="0 0 1440 120"
                        preserveAspectRatio="none">
                        <path d="M0,20 C360,90 720,0 1080,70 C1260,95 1380,25 1440,35 L1440,120 L0,120 Z"></path>
                    </svg>
                    <svg class="absolute inset-0 w-full h-full text-white fill-current" viewBox="0 0 1440 120"
                        preserveAspectRatio="none">
                        <path d="M0,50 C320,110 640,20 960,80 C1200,100 1360,40 1440,50 L1440,120 L0,120 Z"></path>
                    </svg>
                </div>
            </div>

            <!-- 2. SISI KANAN: FORM LOGIN -->
            <div class="p-8 md:p-12 md:w-7/12 flex flex-col justify-center bg-white relative z-10 md:pl-16">

                <div class="mb-6">
                    <h2 class="text-2xl md:text-3xl font-extrabold text-blue-950">Masuk ke Akun</h2>
                    <p class="text-xs text-slate-400 mt-1">Silakan masukkan email dan kata sandi Anda</p>
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('E-mail Address')" class="text-xs font-bold text-slate-700" />
                        <x-text-input id="email"
                            class="block mt-1 w-full border-0 border-b-2 border-slate-200 rounded-none px-0 py-2 focus:ring-0 focus:border-blue-700 text-sm transition"
                            type="email" name="email" :value="old('email')" placeholder="nama@email.com" required
                            autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-1" />
                    </div>

                    <!-- Password -->
                    <div>
                        <x-input-label for="password" :value="__('Password')" class="text-xs font-bold text-slate-700" />
                        <x-text-input id="password"
                            class="block mt-1 w-full border-0 border-b-2 border-slate-200 rounded-none px-0 py-2 focus:ring-0 focus:border-blue-700 text-sm transition"
                            type="password" name="password" placeholder="••••••••" required
                            autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-1" />
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between pt-1">
                        <label for="remember_me" class="inline-flex items-center cursor-pointer">
                            <input id="remember_me" type="checkbox"
                                class="rounded border-slate-300 text-blue-700 shadow-sm focus:ring-blue-700"
                                name="remember">
                            <span class="ms-2 text-xs font-semibold text-slate-600">{{ __('Remember me') }}</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a class="text-xs text-blue-700 hover:text-blue-900 font-bold hover:underline"
                                href="{{ route('password.request') }}">
                                {{ __('Lupa kata sandi?') }}
                            </a>
                        @endif
                    </div>

                    <!-- Submit Buttons -->
                    <div class="pt-4 flex flex-col sm:flex-row items-center gap-3">
                        <x-primary-button
                            class="w-full sm:w-auto justify-center bg-blue-700 hover:bg-blue-800 px-8 py-3 rounded-full text-xs font-bold transition shadow-md">
                            {{ __('Masuk Akun') }}
                        </x-primary-button>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="w-full sm:w-auto text-center border-2 border-slate-200 hover:border-blue-700 text-slate-600 hover:text-blue-700 px-8 py-2.5 rounded-full text-xs font-bold transition">
                                {{ __('Daftar Akun') }}
                            </a>
                        @endif
                    </div>
                </form>

            </div>

        </div>
    </div>
</x-guest-layout>
