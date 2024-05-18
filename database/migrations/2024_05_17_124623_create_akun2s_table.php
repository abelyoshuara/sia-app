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
            $table->string('kode');
            $table->string('nama');
            $table->unsignedBigInteger('akun1s_id');
            $table->timestamps();

            $table->foreign('akun1s_id')->references('id')->on('akun1s');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('akun2s', function (Blueprint $table) {
            $table->dropForeign(['akun1s_id']);
        });

        Schema::dropIfExists('akun2s');
    }
};
