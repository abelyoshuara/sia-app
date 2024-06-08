<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NilaiPenyesuaian extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'nilai_penyesuaian';

    protected $guarded = ['id'];

    public function akun3(): BelongsTo
    {
        return $this->belongsTo(Akun3::class, 'akun3_kode', 'kode');
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }
}
