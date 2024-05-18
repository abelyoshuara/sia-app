<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Akun2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('akun2s')->insert([
            [
                'kode' => 11,
                'nama' => 'Aktiva Lancar',
                'akun1_kode' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 12,
                'nama' => 'Activa Tetap',
                'akun1_kode' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 21,
                'nama' => 'Utang Jangka Pendek',
                'akun1_kode' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 22,
                'nama' => 'Utang Jangka Panjang',
                'akun1_kode' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 31,
                'nama' => 'Modal Pemilik',
                'akun1_kode' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 32,
                'nama' => 'Prive Pemilik',
                'akun1_kode' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 41,
                'nama' => 'Pendapatan Usaha',
                'akun1_kode' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 42,
                'nama' => 'Pendapatan diluar Usaha',
                'akun1_kode' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 51,
                'nama' => 'Beban Usaha',
                'akun1_kode' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 52,
                'nama' => 'Beban diluar Usaha',
                'akun1_kode' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
