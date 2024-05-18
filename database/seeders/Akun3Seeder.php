<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Akun3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('akun3s')->insert([
            [
                'kode' => 1101,
                'nama' => 'Kas',
                'akun1_kode' => 1,
                'akun2_kode' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 1102,
                'nama' => 'Piutang Usaha',
                'akun1_kode' => 1,
                'akun2_kode' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 1103,
                'nama' => 'Perlengkapan Kantor',
                'akun1_kode' => 1,
                'akun2_kode' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 1104,
                'nama' => 'Sewa Dibayar dimuka',
                'akun1_kode' => 1,
                'akun2_kode' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 1105,
                'nama' => 'Ansuransi Dibayar dimuka',
                'akun1_kode' => 1,
                'akun2_kode' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 1201,
                'nama' => 'Peralatan Kantor',
                'akun1_kode' => 1,
                'akun2_kode' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 1202,
                'nama' => 'Akumulasi Penyusutan P. Kantor',
                'akun1_kode' => 1,
                'akun2_kode' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 1203,
                'nama' => 'Tanah',
                'akun1_kode' => 1,
                'akun2_kode' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 2101,
                'nama' => 'Utang Usaha',
                'akun1_kode' => 2,
                'akun2_kode' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 2102,
                'nama' => 'Utang Gaji',
                'akun1_kode' => 2,
                'akun2_kode' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 2103,
                'nama' => 'Pendapatan diterima dimuka',
                'akun1_kode' => 2,
                'akun2_kode' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 2201,
                'nama' => 'Utang Hipotek',
                'akun1_kode' => 2,
                'akun2_kode' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 2202,
                'nama' => 'Utang Obligasi',
                'akun1_kode' => 2,
                'akun2_kode' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 3101,
                'nama' => 'Modal Pemilik',
                'akun1_kode' => 3,
                'akun2_kode' => 31,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 3201,
                'nama' => 'Prive Tuan Najwan',
                'akun1_kode' => 3,
                'akun2_kode' => 32,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 4101,
                'nama' => 'Pendapatan Jasa',
                'akun1_kode' => 4,
                'akun2_kode' => 41,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
