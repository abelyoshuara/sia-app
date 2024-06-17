<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NilaiPenyesuaianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nilai_penyesuaian')->insert([
            [
                'transaksi_penyesuaian_id' => 1,
                'akun3_kode' => 1201,
                'debit' => 0,
                'kredit' => 10,
                'status_id' => 1,
            ],
            [
                'transaksi_penyesuaian_id' => 1,
                'akun3_kode' => 1202,
                'debit' => 0,
                'kredit' => 200,
                'status_id' => 2,
            ],
        ]);
    }
}
