<?php

namespace App\Models;

use App\Models\Pinjaman;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LogsPinjaman extends Model
{
    use HasFactory;
    protected $table = 'pinjaman_logs';

    protected $fillable = [
        'user_id', 'pinjaman_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function book(): BelongsTo
    {
        return $this->belongsTo(Pinjaman::class, 'pinjaman_id', 'id');
    }
}
