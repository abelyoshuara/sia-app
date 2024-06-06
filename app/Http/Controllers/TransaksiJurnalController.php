<?php

namespace App\Http\Controllers;

use App\Models\TransaksiJurnal;
use App\Http\Requests\StoreTransaksiJurnalRequest;
use App\Http\Requests\UpdateTransaksiJurnalRequest;
use App\Models\Akun3;
use App\Models\NilaiJurnal;
use App\Models\Status;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
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
    public function store(StoreTransaksiJurnalRequest $request): JsonResponse
    {
        $transaksiJurnal = TransaksiJurnal::create($request->validated());
        $nilai = $request->nilai;

        $data = [];
        foreach ($nilai as &$n) {
            $data[] = [
                'transaksi_jurnal_id' => $transaksiJurnal->id,
                'akun3_kode' => $n['kode_akun'],
                'debit' => $n['debit'],
                'kredit' => $n['kredit'],
                'status_id' => $n['status'],
            ];
        }

        NilaiJurnal::insert($data);

        return response()->json([
            'status' => 'success',
            'message' => 'Data saved successfully',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(TransaksiJurnal $transaksiJurnal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TransaksiJurnal $transaksiJurnal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransaksiJurnalRequest $request, TransaksiJurnal $transaksiJurnal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TransaksiJurnal $transaksiJurnal)
    {
        //
    }
}
