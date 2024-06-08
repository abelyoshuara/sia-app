<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('akun1', Controllers\Akun1Controller::class)->except(['show']);
    Route::resource('akun2', Controllers\Akun2Controller::class)->except(['show']);
    Route::resource('akun3', Controllers\Akun3Controller::class)->except(['show']);
    Route::resource('transaksi-jurnal', Controllers\TransaksiJurnalController::class);
    Route::resource('transaksi-penyesuaian', Controllers\TransaksiPenyesuaianController::class);
});


require __DIR__ . '/auth.php';
