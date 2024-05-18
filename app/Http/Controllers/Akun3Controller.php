<?php

namespace App\Http\Controllers;

use App\Models\Akun3;
use App\Http\Requests\StoreAkun3Request;
use App\Http\Requests\UpdateAkun3Request;
use Illuminate\View\View;

class Akun3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $akun3s = Akun3::with(['akun1', 'akun2'])->get();

        return view('akun3.index', compact('akun3s'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAkun3Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Akun3 $akun3)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Akun3 $akun3)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAkun3Request $request, Akun3 $akun3)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Akun3 $akun3)
    {
        //
    }
}
