<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LogsPinjaman extends Model
{
    use HasFactory;
    protected $table = 'pinjaman_logs';

    protected $fillable = [
        'user_id', 'tanggal', 'no_bukti', 'jumlah_pinjaman', 'total', 'uraian', 'status'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public $timestamps = false;
}
