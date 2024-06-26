<?php

namespace App\Http\Controllers;

use App\Models\Akun3;
use App\Http\Requests\StoreAkun3Request;
use App\Http\Requests\UpdateAkun3Request;
use App\Models\Akun1;
use App\Models\Akun2;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class Akun3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $akun3s = Akun3::with(['akun1', 'akun2'])->filter()->paginate(10)->withQueryString();

        return view('akun3.index', compact('akun3s'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $akun1s = Akun1::all();
        $akun2s = Akun2::all();

        return view('akun3.create', compact('akun1s', 'akun2s'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAkun3Request $request): RedirectResponse
    {
        Akun3::create($request->validated());

        return to_route('akun3.index')->with('success', 'Data berhasil disimpan.');
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
    public function edit(Akun3 $akun3): View
    {
        $akun1s = Akun1::all();
        $akun2s = Akun2::all();

        return view('akun3.edit', compact('akun1s', 'akun2s', 'akun3'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAkun3Request $request, Akun3 $akun3): RedirectResponse
    {
        $akun3->update($request->validated());

        return to_route('akun3.index')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Akun3 $akun3): RedirectResponse
    {
        $akun3->delete();

        return back()->with('success', 'Data berhasil dihapus.');
    }
}
