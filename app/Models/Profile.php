<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = "profile";
    protected $fillable =[
    'no_kontrak',
    'kebun',
    'luas_kebun',
    'no_vak',
    'no_kontrak',
    'kategori',
    'kecamatan',
    'kota',
    'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public $timestamps = false;
}
