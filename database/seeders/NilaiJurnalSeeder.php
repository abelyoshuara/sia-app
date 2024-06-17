<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NilaiJurnalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nilai_jurnal')->insert([
            [
                'transaksi_jurnal_id' => 1,
                'akun3_kode' => 1101,
                'debit' => 0,
                'kredit' => 100,
                'status_id' => 1,
            ],
            [
                'transaksi_jurnal_id' => 1,
                'akun3_kode' => 1102,
                'debit' => 50,
                'kredit' => 0,
                'status_id' => 2,
            ]
        ]);
    }
}
