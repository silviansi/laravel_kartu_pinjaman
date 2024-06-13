<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LogsPinjaman extends Model
{
    use HasFactory;
    protected $table = 'pinjaman_logs';

    protected $fillable = [
        'user_id', 'tanggal', 'no_bukti', 'jumlah_pinjaman', 'total', 'uraian', 'no_rek'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public $timestamps = false;
}
