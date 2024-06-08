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
        Schema::create('nilai_penyesuaian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transaksi_penyesuaian_id');
            $table->unsignedBigInteger('akun3_kode');
            $table->float('debit');
            $table->float('kredit');
            $table->unsignedBigInteger('status_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('transaksi_penyesuaian_id')->references('id')->on('transaksi_penyesuaian')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('akun3_kode')->references('kode')->on('akun3s')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('status')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('nilai_penyesuaian', function (Blueprint $table) {
            $table->dropForeign(['transaksi_penyesuaian_id', 'akun3_kode', 'status_id']);
        });

        Schema::dropIfExists('nilai_penyesuaian');
    }
};
