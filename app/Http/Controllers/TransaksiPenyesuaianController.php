<?php

namespace App\Http\Controllers;

use App\Models\TransaksiPenyesuaian;
use App\Http\Requests\StoreTransaksiPenyesuaianRequest;
use App\Http\Requests\UpdateTransaksiPenyesuaianRequest;
use App\Models\Akun3;
use App\Models\NilaiPenyesuaian;
use App\Models\Status;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
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
    public function store(StoreTransaksiPenyesuaianRequest $request): JsonResponse
    {
        $transaksiPenyesuaian = TransaksiPenyesuaian::create($request->validated());
        $nilai_penyesuaian = $request->nilai_penyesuaian;

        $data = [];
        foreach ($nilai_penyesuaian as &$n) {
            $data[] = [
                'transaksi_penyesuaian_id' => $transaksiPenyesuaian->id,
                'akun3_kode' => $n['kode_akun'],
                'debit' => $n['debit'],
                'kredit' => $n['kredit'],
                'status_id' => $n['status'],
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        NilaiPenyesuaian::insert($data);

        return response()->json([
            'status' => 'success',
            'message' => 'Data saved successfully',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(TransaksiPenyesuaian $transaksiPenyesuaian): JsonResponse
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Data retrieved successfully',
            'data' => $transaksiPenyesuaian->load('nilaiPenyesuaian', 'nilaiPenyesuaian.akun3', 'nilaiPenyesuaian.status'),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TransaksiPenyesuaian $transaksiPenyesuaian): View
    {
        $akun3 = Akun3::all();
        $status = Status::all();

        return view(
            'transaksi-penyesuaian.edit',
            compact('akun3', 'status', 'transaksiPenyesuaian')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransaksiPenyesuaianRequest $request, TransaksiPenyesuaian $transaksiPenyesuaian): JsonResponse
    {
        $transaksiPenyesuaian->update($request->validated());
        $nilai_penyesuaian = $request->nilai_penyesuaian;

        NilaiPenyesuaian::where('transaksi_penyesuaian_id', $transaksiPenyesuaian->id)->delete();

        $data = [];
        foreach ($nilai_penyesuaian as &$n) {
            $data[] = [
                'transaksi_penyesuaian_id' => $transaksiPenyesuaian->id,
                'akun3_kode' => $n['akun3_kode'],
                'debit' => $n['debit'],
                'kredit' => $n['kredit'],
                'status_id' => $n['status_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        NilaiPenyesuaian::insert($data);

        return response()->json([
            'status' => 'success',
            'message' => 'Data updated successfully',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TransaksiPenyesuaian $transaksiPenyesuaian): RedirectResponse
    {
        $transaksiPenyesuaian->delete();

        return back()->with('success', 'Data deleted successfully.');
    }
}
