@extends('layouts.pelanggan')

@section('title', 'Ubah Password - Vitra Qua')

@section('content')
    <div class="bg-white rounded-lg border border-slate-200 shadow-sm" x-data="{ openConfirmModal: false }">

        <!-- Header Halaman -->
        <div class="px-6 py-4 border-b border-slate-200">
            <h1 class="text-base font-bold text-slate-800">Ubah Password</h1>
            <p class="text-xs text-slate-500 mt-0.5">Demi keamanan akun Anda, mohon tidak memberikan password kepada orang
                lain.</p>
        </div>

        <!-- Alert Notifikasi Berhasil -->
        @if (session('status') === 'password-updated')
            <div
                class="mx-6 mt-6 p-3 bg-emerald-50 border border-emerald-200 text-emerald-700 rounded text-xs flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>Password Anda berhasil diperbarui!</span>
                </div>
            </div>
        @endif

        <!-- Form Ubah Password -->
        <form id="changePasswordForm" action="{{ route('password.update') }}" method="POST" class="p-6">
            @csrf
            @method('put')

            <div class="max-w-md space-y-4">

                <!-- Password Saat Ini -->
                <div>
                    <label for="current_password" class="block text-xs font-normal text-slate-600 mb-1">
                        Password Saat Ini
                    </label>
                    <input type="password" id="current_password" name="current_password" required
                        class="w-full text-xs px-3 py-2 bg-white border border-slate-300 rounded focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition text-slate-800"
                        placeholder="Masukkan password saat ini">
                    @error('current_password', 'updatePassword')
                        <p class="text-[11px] text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password Baru -->
                <div>
                    <label for="password" class="block text-xs font-normal text-slate-600 mb-1">
                        Password Baru
                    </label>
                    <input type="password" id="password" name="password" required
                        class="w-full text-xs px-3 py-2 bg-white border border-slate-300 rounded focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition text-slate-800"
                        placeholder="Minimal 8 karakter">
                    @error('password', 'updatePassword')
                        <p class="text-[11px] text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Konfirmasi Password Baru -->
                <div>
                    <label for="password_confirmation" class="block text-xs font-normal text-slate-600 mb-1">
                        Konfirmasi Password Baru
                    </label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required
                        class="w-full text-xs px-3 py-2 bg-white border border-slate-300 rounded focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition text-slate-800"
                        placeholder="Ketik ulang password baru">
                    @error('password_confirmation', 'updatePassword')
                        <p class="text-[11px] text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Tombol Trigger Modal Konfirmasi -->
                <div class="pt-2">
                    <button type="button" @click="openConfirmModal = true"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-medium text-xs px-6 py-2 rounded shadow-sm transition">
                        Simpan Password
                    </button>
                </div>

            </div>
        </form>

        <!-- MODAL POPUP KONFIRMASI -->
        <div x-show="openConfirmModal" x-cloak
            class="fixed inset-0 z-50 flex items-center justify-center bg-slate-900/40 backdrop-blur-sm p-4"
            x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-100"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">

            <div class="bg-white rounded-lg shadow-lg border border-slate-200 w-full max-w-sm overflow-hidden p-6 text-center"
                @click.away="openConfirmModal = false">

                <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center mx-auto mb-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                        </path>
                    </svg>
                </div>

                <h3 class="text-sm font-bold text-slate-800 mb-1">Konfirmasi Ubah Password</h3>
                <p class="text-xs text-slate-500 mb-6">Apakah Anda yakin ingin mengubah password akun Anda saat ini?</p>

                <div class="flex items-center justify-center gap-2">
                    <button type="button" @click="openConfirmModal = false"
                        class="px-4 py-2 border border-slate-300 rounded text-xs font-medium text-slate-700 hover:bg-slate-50 transition w-full">
                        Batal
                    </button>
                    <button type="button" @click="document.getElementById('changePasswordForm').submit()"
                        class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded text-xs font-medium shadow-sm transition w-full">
                        Ya, Ubah
                    </button>
                </div>
            </div>
        </div>

    </div>
@endsection
