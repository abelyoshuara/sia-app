<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAkun1Request;
use App\Http\Requests\UpdateAkun1Request;
use App\Models\Akun1;
use Illuminate\Http\Request;
use Illuminate\View\View;

class Akun1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $akun1s = Akun1::filter()->paginate(10)->withQueryString();

        return view('akun1.index', compact('akun1s'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('akun1.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAkun1Request $request)
    {
        Akun1::create($request->validated());

        return to_route('akun1.index')->with('success', 'Akun 1 created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Akun1 $akun1): View
    {
        return view('akun1.edit', compact('akun1'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAkun1Request $request, Akun1 $akun1)
    {
        $akun1->update($request->validated());

        return to_route('akun1.index')->with('success', 'Akun 1 updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Akun1 $akun1)
    {
        $akun1->delete();

        return to_route('akun1.index')->with('success', 'Akun 1 deleted successfully.');
    }
}
