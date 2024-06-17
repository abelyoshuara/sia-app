<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Builder;

class TransaksiJurnal extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'transaksi_jurnal';

    protected $guarded = ['id'];

    public function scopeFilter(Builder $query): void
    {
        $query->when(request('search'), function ($query, $search) {
            return $query->where('kwitansi', 'like', '%' . $search . '%')
                ->orWhere('tanggal', 'like', '%' . $search . '%')
                ->orWhere('deskripsi', 'like', '%' . $search . '%')
                ->orWhere('keterangan_jurnal', 'like', '%' . $search . '%');
        });
    }

    public function nilaiJurnal(): HasMany
    {
        return $this->hasMany(NilaiJurnal::class);
    }
}
