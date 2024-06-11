<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiPenyesuaianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transaksi_penyesuaian')->insert([
            [
                'tanggal' => '2021-12-02',
                'deskripsi' => 'Sewa gedung selama 6 bulan dibayar 2 Desember 2021 sebesar Rp 15.000.000',
                'nilai' => 15000000,
                'waktu' => 6,
                'jumlah' => (15000000 / 6),
            ],
            [
                'tanggal' => '2021-12-05',
                'deskripsi' => 'Asunsuransi untuk 1 tahun dibayar 5 Desember 2021 sebesar Rp 4.200.000',
                'nilai' => 4200000,
                'waktu' => 1,
                'jumlah' => (4200000 / 1),
            ],
            [
                'tanggal' => '2021-12-05',
                'deskripsi' => 'Peralatan kantor disusutan sebesar Rp 7.200.000 per tahun',
                'nilai' => 7200000,
                'waktu' => 1,
                'jumlah' => (7200000 / 1),
            ],
            [
                'tanggal' => '2021-12-05',
                'deskripsi' => 'Perlengkapan yang masih tersisa sebesar Rp 3.200.000',
                'nilai' => 3200000,
                'waktu' => 1,
                'jumlah' => (3200000 / 1),
            ],
            [
                'tanggal' => '2017-01-07',
                'deskripsi' => 'Pendapatan jasa yang telah selesai dikerjakan tetapi pembayarannya akan dilakukan tanggal 7 Januari 2027 sebesar Rp. 2.500.000',
                'nilai' => 2500000,
                'waktu' => 1,
                'jumlah' => (2500000 / 1),
            ],
        ]);
    }
}
