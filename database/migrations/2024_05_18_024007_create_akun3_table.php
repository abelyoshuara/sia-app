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
        Schema::create('akun3', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kode')->unique();
            $table->string('nama');
            $table->unsignedBigInteger('akun1_kode');
            $table->unsignedBigInteger('akun2_kode');
            $table->timestamps();

            $table->foreign('akun1_kode')->references('kode')->on('akun1');
            $table->foreign('akun2_kode')->references('kode')->on('akun2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('akun3', function (Blueprint $table) {
            $table->dropForeign(['akun1_kode', 'akun2_kode']);
        });

        Schema::dropIfExists('akun3');
    }
};
