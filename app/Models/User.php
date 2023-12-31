<?php

namespace App\Models;

use App\Models\Pinjaman;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'kebun',
        'luas_kebun',
        'no_vak',
        'no_kontrak',
        'kategori',
        'kecamatan',
        'kota',
        'username',
        'email',
        'password'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $attributes = [
        'role_id' => 2
    ];
    public function profile() {
        return $this->hasOne(Profile::class, 'user_id');
    }
    public function pinjaman():BelongsToMany {
        return $this->belongsToMany(Pinjaman::class, 'pinjaman', 'profile_id', 'pinjaman_id');
    }
    public $timestamps = false;
}
