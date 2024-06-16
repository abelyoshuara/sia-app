<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Akun3 extends Model
{
    use HasFactory;

    protected $table = 'akun3';

    protected $guarded = ['id'];

    public function akun1(): BelongsTo
    {
        return $this->belongsTo(Akun1::class, 'akun1_kode', 'kode');
    }

    public function akun2(): BelongsTo
    {
        return $this->belongsTo(Akun2::class, 'akun2_kode', 'kode');
    }
}
