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
                'nama' => 'Sewa Dibayar dimuka',
                'akun1_id' => 1,
                'akun2_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 1104,
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
                'kode' => 2101,
                'nama' => 'Utang Usaha',
                'akun1_id' => 2,
                'akun2_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
