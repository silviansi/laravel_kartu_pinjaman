<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pabrikasi extends Model
{
    use HasFactory;
    protected $table = 'laporan_pabrikasi';
    protected $fillable = [
        'user_id', 'tebu_giling', 'rendemen_petani', 'gula_petani', 'tetes_petani', 'tebu_masuk'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public $timestamps = false;
}
