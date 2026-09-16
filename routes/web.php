<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// 1. Landing Page
Route::get('/', function () {
    return view('public.beranda');
})->name('landing');

// 2. Redirect Dashboard Berdasarkan Role
Route::get('/dashboard', function () {
    $role = Auth::user()->role ?? 'pelanggan'; 

    if ($role === 'pelanggan') {
        // MENGARAHKAN LANGSUNG KE HALAMAN PROFIL PELANGGAN
        return view('dashboard.pelanggan.akun.profil');
    } elseif ($role === 'admin') {
        return view('dashboard.admin.index');
    } elseif ($role === 'kurir') {
        return view('dashboard.kurir.index');
    } elseif ($role === 'superadmin') {
        return view('dashboard.superadmin.index');
    }

    return redirect()->route('landing');
})->middleware(['auth', 'verified'])->name('dashboard');

// 3. Profile Routes (Breeze)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// 4. Group Route Pelanggan
Route::middleware(['auth', 'verified'])->prefix('pelanggan')->name('pelanggan.')->group(function () {

    // Menu Akun Saya
    Route::get('/profil', function () { 
        return view('dashboard.pelanggan.akun.profil'); 
    })->name('akun.profil');

    Route::get('/alamat', function () { 
        return view('dashboard.pelanggan.akun.alamat'); 
    })->name('akun.alamat');

    Route::get('/ubah-password', function () { 
        return view('dashboard.pelanggan.akun.ubah-password'); 
    })->name('akun.ubah-password');

    // Menu Pesanan Saya
    Route::get('/pesanan', function () { 
        return view('dashboard.pelanggan.pesanan.index'); 
    })->name('pesanan.index');

    Route::get('/pesanan/{id}', function ($id) { 
        return view('dashboard.pelanggan.pesanan.detail'); 
    })->name('pesanan.detail');

    // Menu Keranjang & Pembayaran
    Route::get('/keranjang', function () { 
        return view('dashboard.pelanggan.keranjang.index'); 
    })->name('keranjang.index');

    Route::get('/bayar', function () { 
        return view('dashboard.pelanggan.keranjang.bayar'); 
    })->name('keranjang.bayar');

});

require __DIR__.'/auth.php';