<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Akun1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('akun1s')->insert([
            [
                'kode' => '1',
                'nama' => 'Aktiva',
            ],
            [
                'kode' => '2',
                'nama' => 'Kewajiban',
            ],
            [
                'kode' => '3',
                'nama' => 'Modal',
            ],
            [
                'kode' => '4',
                'nama' => 'Pendapatan',
            ],
            [
                'kode' => '5',
                'nama' => 'Beban',
            ],
        ]);
    }
}
