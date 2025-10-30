<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            'name' => 'Jhon pek',
            'nim' => 12345678,
            'prodi' => 'Teknologi Informasi',
            'email' => 'kukuh@gmail.com',
            'nohp' => 62857326329,
        ]);
    }
}