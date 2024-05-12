<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAkun1Request;
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
        $akun1s = Akun1::all();

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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
