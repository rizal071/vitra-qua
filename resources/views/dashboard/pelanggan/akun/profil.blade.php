@extends('layouts.pelanggan')

@section('title', 'Profil Saya - Vitra Qua')

@section('content')
    <div class="bg-white rounded-lg border border-slate-200 shadow-sm">

        <!-- Header Halaman -->
        <div class="px-6 py-4 border-b border-slate-200">
            <h1 class="text-base font-bold text-slate-800">Profil Saya</h1>
            <p class="text-xs text-slate-500 mt-0.5">Kelola informasi profil Anda untuk mengontrol, melindungi, dan
                mengamankan akun.</p>
        </div>

        <!-- Form Edit Profil -->
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="p-6">
            @csrf
            @method('PATCH')

            <div class="flex flex-col-reverse lg:flex-row gap-8">

                <!-- KOLOM KIRI: FORM INPUT -->
                <div class="flex-1 space-y-5">

                    <!-- Username -->
                    <div class="flex flex-col sm:flex-row sm:items-center">
                        <label class="w-36 text-xs font-normal text-slate-500 mb-1 sm:mb-0">Username</label>
                        <span class="text-xs font-semibold text-slate-800">{{ Auth::user()->name }}</span>
                    </div>

                    <!-- Nama Lengkap -->
                    <div class="flex flex-col sm:flex-row sm:items-center">
                        <label for="name" class="w-36 text-xs font-normal text-slate-500 mb-1 sm:mb-0">Nama</label>
                        <div class="flex-1 max-w-md">
                            <input type="text" id="name" name="name"
                                value="{{ old('name', Auth::user()->name) }}"
                                class="w-full text-xs px-3 py-2 bg-white border border-slate-300 rounded focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition text-slate-800">
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex flex-col sm:flex-row sm:items-center">
                        <label class="w-36 text-xs font-normal text-slate-500 mb-1 sm:mb-0">Email</label>
                        <div class="flex items-center gap-2 text-xs text-slate-800">
                            <span>{{ Auth::user()->email }}</span>
                            <a href="#" class="text-blue-600 hover:text-blue-700 underline text-xs">Ubah</a>
                        </div>
                    </div>

                    <!-- Nomor Telepon -->
                    <div class="flex flex-col sm:flex-row sm:items-center">
                        <label class="w-36 text-xs font-normal text-slate-500 mb-1 sm:mb-0">Nomor Telepon</label>
                        <div class="flex items-center gap-2 text-xs text-slate-800">
                            <span>{{ Auth::user()->phone ?? '-' }}</span>
                            <a href="#" class="text-blue-600 hover:text-blue-700 underline text-xs">
                                {{ Auth::user()->phone ? 'Ubah' : 'Tambah' }}
                            </a>
                        </div>
                    </div>

                    <!-- Jenis Kelamin -->
                    <div class="flex flex-col sm:flex-row sm:items-center">
                        <label class="w-36 text-xs font-normal text-slate-500 mb-1 sm:mb-0">Jenis Kelamin</label>
                        <div class="flex items-center gap-6 text-xs text-slate-700">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="gender" value="L"
                                    {{ old('gender', Auth::user()->gender ?? '') == 'L' ? 'checked' : '' }}
                                    class="text-blue-600 focus:ring-blue-500 w-3.5 h-3.5">
                                <span>Laki-laki</span>
                            </label>
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="gender" value="P"
                                    {{ old('gender', Auth::user()->gender ?? '') == 'P' ? 'checked' : '' }}
                                    class="text-blue-600 focus:ring-blue-500 w-3.5 h-3.5">
                                <span>Perempuan</span>
                            </label>
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="gender" value="Lainnya"
                                    {{ old('gender', Auth::user()->gender ?? '') == 'Lainnya' ? 'checked' : '' }}
                                    class="text-blue-600 focus:ring-blue-500 w-3.5 h-3.5">
                                <span>Lainnya</span>
                            </label>
                        </div>
                    </div>

                    <!-- Tanggal Lahir -->
                    <div class="flex flex-col sm:flex-row sm:items-center">
                        <label for="birth_date" class="w-36 text-xs font-normal text-slate-500 mb-1 sm:mb-0">Tanggal
                            Lahir</label>
                        <div class="w-auto">
                            <input type="date" id="birth_date" name="birth_date"
                                value="{{ old('birth_date', Auth::user()->birth_date ?? '') }}"
                                class="text-xs px-3 py-2 bg-white border border-slate-300 rounded focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition text-slate-800">
                        </div>
                    </div>

                    <!-- Tombol Simpan -->
                    <div class="flex flex-col sm:flex-row sm:items-center pt-2">
                        <div class="w-36 hidden sm:block"></div>
                        <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white font-medium text-xs px-6 py-2 rounded shadow-sm transition">
                            Simpan
                        </button>
                    </div>

                </div>

                <!-- SEPARATOR / PEMBATAS -->
                <div class="hidden lg:block w-px bg-slate-200 self-stretch"></div>

                <!-- KOLOM KANAN: FOTO PROFIL -->
                <div class="w-full lg:w-64 flex flex-col items-center justify-start pt-2">
                    <div
                        class="w-24 h-24 rounded-full bg-slate-100 border border-slate-200 flex items-center justify-center overflow-hidden mb-4">
                        @if (Auth::user()->avatar)
                            <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="Avatar"
                                class="w-full h-full object-cover">
                        @else
                            <svg class="w-12 h-12 text-slate-300" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                            </svg>
                        @endif
                    </div>

                    <!-- Tombol Upload -->
                    <label
                        class="cursor-pointer bg-white hover:bg-slate-50 text-slate-700 font-normal text-xs px-4 py-1.5 border border-slate-300 rounded shadow-sm transition mb-3">
                        <span>Pilih Gambar</span>
                        <input type="file" name="avatar" class="hidden" accept="image/png, image/jpeg">
                    </label>

                    <!-- Keterangan -->
                    <div class="text-center text-[11px] text-slate-400 space-y-0.5">
                        <p>Ukuran gambar: maks. 1 MB</p>
                        <p>Format gambar: .JPEG, .PNG</p>
                    </div>
                </div>

            </div>
        </form>
    </div>
@endsection
