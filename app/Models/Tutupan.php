<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tutupan extends Model
{
    use HasFactory;
    protected $table = 'tutupan';
    protected $fillable = ['user_id', 'tanggal', 'no_bukti', 'jumlah_tutupan', 'total', 'uraian'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public $timestamps = false;
}
