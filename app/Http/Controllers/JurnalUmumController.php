<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JurnalUmumController extends Controller
{
    public function index()
    {
        return view('jurnal-umum.index');
    }
}
