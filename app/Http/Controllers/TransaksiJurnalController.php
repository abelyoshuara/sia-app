<?php

namespace App\Http\Controllers;

use App\Models\TransaksiJurnal;
use App\Http\Requests\StoreTransaksiJurnalRequest;
use App\Http\Requests\UpdateTransaksiJurnalRequest;
use App\Models\Akun3;
use App\Models\Status;
use Illuminate\View\View;

class TransaksiJurnalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $transaksiJurnal = TransaksiJurnal::all();

        return view('transaksi-jurnal.index', compact('transaksiJurnal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $akun3 = Akun3::all();
        $status = Status::all();

        return view('transaksi-jurnal.create', compact('akun3', 'status'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransaksiJurnalRequest $request)
    {
        TransaksiJurnal::create($request->validated());

        return to_route('transaksi-jurnal.index')->with('success', 'Transaksi Jurnal created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(TransaksiJurnal $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TransaksiJurnal $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransaksiJurnalRequest $request, TransaksiJurnal $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TransaksiJurnal $transaksi)
    {
        //
    }
}
