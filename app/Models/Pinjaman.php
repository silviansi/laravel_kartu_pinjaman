<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Pinjaman extends Model
{
    use HasFactory;
    protected $table = 'pinjaman';
    protected $fillable = ['tanggal', 'no_bukti', 'jumlah_pinjaman', 'uraian'];
    public function pinjaman():BelongsToMany {
        return $this->belongsToMany(User::class, 'pinjaman', 'user_id', 'pinjaman_id');
    }
}
