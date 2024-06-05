<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status')->insert([
            [
                'nama' => 'Penerimaan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Pengeluaran',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Investasi Masuk',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Investasi Keluar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Normal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
