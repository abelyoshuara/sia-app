<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NilaiPenyesuaian extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'nilai_penyesuaian';

    protected $guarded = ['id'];
}
