<?php

namespace App\Http\Controllers;

use App\Models\TransaksiPenyesuaian;
use App\Http\Requests\StoreTransaksiPenyesuaianRequest;
use App\Http\Requests\UpdateTransaksiPenyesuaianRequest;
use App\Models\Akun3;
use App\Models\Status;
use Illuminate\View\View;

class TransaksiPenyesuaianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $transaksiPenyesuaian = TransaksiPenyesuaian::all();

        return view('transaksi-penyesuaian.index', compact('transaksiPenyesuaian'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $akun3 = Akun3::all();
        $status = Status::all();

        return view('transaksi-penyesuaian.create', compact('akun3', 'status'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransaksiPenyesuaianRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TransaksiPenyesuaian $transaksiPenyesuaian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TransaksiPenyesuaian $transaksiPenyesuaian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransaksiPenyesuaianRequest $request, TransaksiPenyesuaian $transaksiPenyesuaian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TransaksiPenyesuaian $transaksiPenyesuaian)
    {
        //
    }
}
