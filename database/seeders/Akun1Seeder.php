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
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => '2',
                'nama' => 'Kewajiban',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => '3',
                'nama' => 'Modal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => '4',
                'nama' => 'Pendapatan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => '5',
                'nama' => 'Beban',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
