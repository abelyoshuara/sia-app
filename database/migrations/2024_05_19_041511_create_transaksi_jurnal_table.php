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
        Schema::create('transaksi_jurnal', function (Blueprint $table) {
            $table->id();
            $table->string('kwitansi');
            $table->date('tanggal');
            $table->text('deskripsi');
            $table->string('keterangan_jurnal');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaksi_jurnal', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::dropIfExists('transaksi_jurnal');
    }
};
