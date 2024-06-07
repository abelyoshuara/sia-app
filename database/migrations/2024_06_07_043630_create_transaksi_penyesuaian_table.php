<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksi_penyesuaian', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->text('deskripsi');
            $table->float('nilai');
            $table->integer('waktu');
            $table->float('jumlah');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaksi_penyesuaian', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::dropIfExists('transaksi_penyesuaian');
    }
};
