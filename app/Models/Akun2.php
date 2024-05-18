<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Akun2 extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function akun1(): BelongsTo
    {
        return $this->belongsTo(Akun1::class, 'akun1_kode', 'kode');
    }
}
