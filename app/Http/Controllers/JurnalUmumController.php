<?php

namespace App\Http\Controllers;

use App\Models\TransaksiJurnal;
use Illuminate\Http\Request;

class JurnalUmumController extends Controller
{
    public function index()
    {
        $jurnalUmum = TransaksiJurnal::paginate(10)->withQueryString();

        return view('jurnal-umum.index', compact('jurnalUmum'));
    }
}
