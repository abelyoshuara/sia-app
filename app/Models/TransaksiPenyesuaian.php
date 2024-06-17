<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Builder;

class TransaksiPenyesuaian extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'transaksi_penyesuaian';

    protected $guarded = ['id'];

    public function scopeFilter(Builder $query): void
    {
        $query->when(request('search'), function ($query, $search) {
            return $query->where('nilai', 'like', '%' . $search . '%')
                ->orWhere('tanggal', 'like', '%' . $search . '%')
                ->orWhere('deskripsi', 'like', '%' . $search . '%')
                ->orWhere('waktu', 'like', '%' . $search . '%');
        });
    }

    public function nilaiPenyesuaian(): HasMany
    {
        return $this->hasMany(NilaiPenyesuaian::class);
    }
}
