<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;

class Akun2 extends Model
{
    use HasFactory;

    protected $table = 'akun2';

    protected $guarded = ['id'];

    public function scopeFilter(Builder $query): void
    {
        $query->when(request('search'), function ($query, $search) {
            return $query->where('nama', 'like', '%' . $search . '%')
                ->orWhere('kode', 'like', '%' . $search . '%');
        });
    }

    public function akun1(): BelongsTo
    {
        return $this->belongsTo(Akun1::class, 'akun1_kode', 'kode');
    }
}
