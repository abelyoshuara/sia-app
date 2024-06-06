<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TransaksiJurnal extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'transaksi_jurnal';

    protected $guarded = ['id'];

    public function nilaiJurnal(): HasMany
    {
        return $this->hasMany(NilaiJurnal::class);
    }
}
