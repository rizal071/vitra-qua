<?php

namespace App\Models;

// 1. Aktifkan/Uncomment Impor MustVerifyEmail
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

// 2. Tambahkan "implements MustVerifyEmail" pada Class User
class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role', // 3. Ditambahkan agar role (customer, kurir, admin, superadmin) bisa disimpan
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // 4. Helper Functions untuk Memudahkan Pengecekan Role di Controller/Blade
    public function isSuperAdmin(): bool { return $this->role === 'superadmin'; }
    public function isAdmin(): bool { return $this->role === 'admin'; }
    public function isKurir(): bool { return $this->role === 'kurir'; }
    public function isCustomer(): bool { return $this->role === 'customer'; }
}