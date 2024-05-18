<?php

namespace App\Http\Controllers;

use App\Models\Akun2;
use App\Http\Requests\StoreAkun2Request;
use App\Http\Requests\UpdateAkun2Request;
use App\Models\Akun1;
use Illuminate\View\View;

class Akun2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $akun2s = Akun2::all();

        return view('akun2.index', compact('akun2s'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $akun1s = Akun1::all();

        return view('akun2.create', compact('akun1s'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAkun2Request $request)
    {
        Akun2::create($request->validated());

        return to_route('akun2.index')->with('success', 'Akun 2 created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Akun2 $akun2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Akun2 $akun2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAkun2Request $request, Akun2 $akun2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Akun2 $akun2)
    {
        //
    }
}
