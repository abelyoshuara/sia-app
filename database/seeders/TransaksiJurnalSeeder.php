<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiJurnalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transaksi_jurnal')->insert([
            [
                'kwitansi' => '001',
                'tanggal' => '2023-12-01',
                'deskripsi' => 'Tanggal 1 Desember: Tuan Andi menyetor modal berupa uang tunai sebesar Rp 30.000.000 perlengkapan kantor Rp 3.000.000 dan perlatan kantor Rp 3.5000.000',
                'keterangan_jurnal' => 'Setoran Modal Pemilik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kwitansi' => '002',
                'tanggal' => '2023-12-02',
                'deskripsi' => 'Tanggal 2 Desember: Membayar sewa gedung untuk 6 bulan sebesar Rp 15.000.000',
                'keterangan_jurnal' => 'Membayar sewa gedung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kwitansi' => '003',
                'tanggal' => '2023-12-03',
                'deskripsi' => 'Tanggal 3 Desember: Membeli perlatan kantor secara kredit dari Toko Sempurna sebesar Rp 5.000.000',
                'keterangan_jurnal' => 'Membeli perlatan kantor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kwitansi' => '004',
                'tanggal' => '2023-12-04',
                'deskripsi' => 'Tanggal 4 Desember: Menerima uang tunai dari klien sebagai uang muka jasa yang akan diberikan oleh Perusahaan X sebesar Rp 2.000.000',
                'keterangan_jurnal' => 'Menerima uang tunai dari klien',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kwitansi' => '005',
                'tanggal' => '2023-12-05',
                'deskripsi' => 'Tanggal 5 Desember: Membayar premi asuransi untuk kekayaan dan kecelakaan untuk 1 tahun sebesar Rp 4.200.000',
                'keterangan_jurnal' => 'Membayar premi asuransi untuk kekayaan dan kecelakaan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kwitansi' => '006',
                'tanggal' => '2023-12-07',
                'deskripsi' => 'Tanggal 7 Desember: Membayar iklan untuk sebuah surat kabar Radar Bogor sebesar Rp 300.000',
                'keterangan_jurnal' => 'Membayar iklan untuk sebuah surat kabar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kwitansi' => '007',
                'tanggal' => '2023-12-08',
                'deskripsi' => 'Tanggal 8 Desember: Membayar utang kepada Toko Makmur sebesar Rp 2.500.000',
                'keterangan_jurnal' => 'Membayar utang kepada Toko Makmur',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kwitansi' => '008',
                'tanggal' => '2023-12-10',
                'deskripsi' => 'Tanggal 10 Desember: Dilakukan jasa konsultasi untuk klien yang pembayaran jasanya akan dilakukan kemudian sebesar Rp 5.800.000. (Piutang Jasa)',
                'keterangan_jurnal' => 'Pembayaran jasa konsultasi untuk klien',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kwitansi' => '009',
                'tanggal' => '2023-12-15',
                'deskripsi' => 'Tanggal 15 Desember: Membayar gaji receptionis untuk setengah bulan pertama sebesar Rp 1.250.000',
                'keterangan_jurnal' => 'Membayar gaji receptionis',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kwitansi' => '010',
                'tanggal' => '2023-12-16',
                'deskripsi' => 'Tanggal 16 Desember: Menerima pembayaran dari klien atas jada yang telah diberikan pada 10 desember sebesar Rp 5.800.000.',
                'keterangan_jurnal' => 'Menerima pembayaran dari klien',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kwitansi' => '011',
                'tanggal' => '2023-12-17',
                'deskripsi' => 'Tanggal 17 Desember: Dilakukan jasa konsultasi untuk klien yang pembayaran jasanya akan dilakukan kemudian sebesar Rp. 19.400.000. (Piutang Jasa)',
                'keterangan_jurnal' => 'Dilakukan jasa konsultasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kwitansi' => '012',
                'tanggal' => '2023-12-19',
                'deskripsi' => 'Tanggal 19 Desember: Membeli perlengkapan kantor secara tunai sebesar Rp 1.2000.000',
                'keterangan_jurnal' => 'Membeli perlengkapan kantor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kwitansi' => '013',
                'tanggal' => '2023-12-20',
                'deskripsi' => 'Tanggal 20 Desember: Membayar rekening telepon bulan Dsember sebesar Rp 350.000',
                'keterangan_jurnal' => 'Membayar rekening telepon',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kwitansi' => '014',
                'tanggal' => '2023-12-20',
                'deskripsi' => 'Tanggal 20 Desember: Membayar rekening listrik bulan Desember sebesar Rp 170.000',
                'keterangan_jurnal' => 'Membayar rekening listrik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kwitansi' => '015',
                'tanggal' => '2023-12-24',
                'deskripsi' => 'Tanggal 24 Desember: Mencatat penerimaan kas dari klien atas tagihan jasa yang telah diberikan pada 17 desember sebesar Rp 8.000.000.',
                'keterangan_jurnal' => 'Mencatat penerimaan kas dari klien',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kwitansi' => '016',
                'tanggal' => '2023-12-30',
                'deskripsi' => 'Tanggal 30 Desember: Membayar gaji resepsionis setengah bulan kedua sebesar Rp 1.250.000',
                'keterangan_jurnal' => 'Membayar gaji resepsionis',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kwitansi' => '017',
                'tanggal' => '2023-12-30',
                'deskripsi' => 'Tanggal 30 Desember: Mencatat penerimaan kas dari klien yang pembayaran jasanya akan dilakukan kemudian sebesar Rp 11.400.000',
                'keterangan_jurnal' => 'Mencatat penerimaan kas dari klien',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kwitansi' => '018',
                'tanggal' => '2023-12-30',
                'deskripsi' => 'Tanggal 30 Desember: Dilakukan jasa konsultasi untuk klien yang pembayaran jasanya akan dilakukan kemudian sebesar Rp. 3.000.000. (Piutang Jasa)',
                'keterangan_jurnal' => 'Pembayaran jasa konsultasi untuk klien',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kwitansi' => '019',
                'tanggal' => '2023-12-30',
                'deskripsi' => 'Tanggal 30 Desember: Tuan Andi mengambil uang kas dari perusahaan untuk keperluan pribadi sebesar Rp. 1.2000.000',
                'keterangan_jurnal' => 'mengambil uang kas dari perusahaan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
