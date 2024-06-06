<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NilaiJurnal extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'nilai_jurnal';

    protected $guarded = ['id'];
}
