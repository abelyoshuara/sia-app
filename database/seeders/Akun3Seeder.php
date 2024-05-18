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
                'akun1_id' => 1,
                'akun2_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 1102,
                'nama' => 'Piutang Usaha',
                'akun1_id' => 1,
                'akun2_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 1103,
                'nama' => 'Perlengkapan Kantor',
                'akun1_id' => 1,
                'akun2_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 1104,
                'nama' => 'Sewa Dibayar dimuka',
                'akun1_id' => 1,
                'akun2_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 1105,
                'nama' => 'Ansuransi Dibayar dimuka',
                'akun1_id' => 1,
                'akun2_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 1201,
                'nama' => 'Peralatan Kantor',
                'akun1_id' => 1,
                'akun2_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 1202,
                'nama' => 'Akumulasi Penyusutan P. Kantor',
                'akun1_id' => 1,
                'akun2_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 1203,
                'nama' => 'Tanah',
                'akun1_id' => 1,
                'akun2_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 2101,
                'nama' => 'Utang Usaha',
                'akun1_id' => 2,
                'akun2_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 2102,
                'nama' => 'Utang Gaji',
                'akun1_id' => 2,
                'akun2_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 2103,
                'nama' => 'Pendapatan diterima dimuka',
                'akun1_id' => 2,
                'akun2_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 2201,
                'nama' => 'Utang Hipotek',
                'akun1_id' => 2,
                'akun2_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 2202,
                'nama' => 'Utang Obligasi',
                'akun1_id' => 2,
                'akun2_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 3101,
                'nama' => 'Modal Pemilik',
                'akun1_id' => 3,
                'akun2_id' => 31,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 3201,
                'nama' => 'Prive Tuan Najwan',
                'akun1_id' => 3,
                'akun2_id' => 32,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 4101,
                'nama' => 'Pendapatan Jasa',
                'akun1_id' => 4,
                'akun2_id' => 41,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
