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
        Schema::create('akun2s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kode')->unique();
            $table->string('nama');
            $table->unsignedBigInteger('akun1_kode');
            $table->timestamps();

            $table->foreign('akun1_kode')->references('kode')->on('akun1s');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('akun2s', function (Blueprint $table) {
            $table->dropForeign(['akun1_kode']);
        });

        Schema::dropIfExists('akun2s');
    }
};
