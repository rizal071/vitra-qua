<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Akun Superadmin
        User::create([
            'name'     => 'Super Admin Vitra Qua',
            'email'    => 'superadmin@vitraqua.com',
            'password' => Hash::make('password123'),
            'role'     => 'superadmin',
        ]);

        // 2. Akun Admin
        User::create([
            'name'     => 'Admin Toko',
            'email'    => 'admin@vitraqua.com',
            'password' => Hash::make('password123'),
            'role'     => 'admin',
        ]);

        // 3. Akun Kurir
        User::create([
            'name'     => 'Budi Kurir',
            'email'    => 'kurir@vitraqua.com',
            'password' => Hash::make('password123'),
            'role'     => 'kurir',
        ]);

        // 4. Akun Customer
        User::create([
            'name'     => 'Pelanggan Setia',
            'email'    => 'customer@gmail.com',
            'password' => Hash::make('password123'),
            'role'     => 'customer',
        ]);
    }
}