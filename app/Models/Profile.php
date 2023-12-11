<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = "profile";
    protected $fillable =[
    'nama',
    'kebun',
    'luas_kebun',
    'no_vak',
    'no_kontrak',
    'kecamatan',
    'kota',
    'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public $timestamps = false;
}
