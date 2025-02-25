<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            ['nama_kota' => 'Banda Aceh', 'level' => 'Kota', 'province_id' => 1],
            ['nama_kota' => 'Medan', 'level' => 'Kota', 'province_id' => 2],
            ['nama_kota' => 'Padang', 'level' => 'Kota', 'province_id' => 3],
            ['nama_kota' => 'Pekanbaru', 'level' => 'Kota', 'province_id' => 4],
            ['nama_kota' => 'Jambi', 'level' => 'Kota', 'province_id' => 5],
            ['nama_kota' => 'Palembang', 'level' => 'Kota', 'province_id' => 6],
            ['nama_kota' => 'Bengkulu', 'level' => 'Kota', 'province_id' => 7],
            ['nama_kota' => 'Bandar Lampung', 'level' => 'Kota', 'province_id' => 8],
            ['nama_kota' => 'Pangkal Pinang', 'level' => 'Kota', 'province_id' => 9],
            ['nama_kota' => 'Tanjung Pinang', 'level' => 'Kota', 'province_id' => 10],
            ['nama_kota' => 'Jakarta', 'level' => 'Provinsi', 'province_id' => 11],
            ['nama_kota' => 'Bandung', 'level' => 'Kota', 'province_id' => 12],
            ['nama_kota' => 'Semarang', 'level' => 'Kota', 'province_id' => 13],
            ['nama_kota' => 'Yogyakarta', 'level' => 'Provinsi', 'province_id' => 14],
            ['nama_kota' => 'Surabaya', 'level' => 'Kota', 'province_id' => 15],
            ['nama_kota' => 'Serang', 'level' => 'Kota', 'province_id' => 16],
            ['nama_kota' => 'Denpasar', 'level' => 'Kota', 'province_id' => 17],
            ['nama_kota' => 'Mataram', 'level' => 'Kota', 'province_id' => 18],
            ['nama_kota' => 'Kupang', 'level' => 'Kota', 'province_id' => 19],
            ['nama_kota' => 'Pontianak', 'level' => 'Kota', 'province_id' => 20],
            ['nama_kota' => 'Palangka Raya', 'level' => 'Kota', 'province_id' => 21],
            ['nama_kota' => 'Banjarmasin', 'level' => 'Kota', 'province_id' => 22],
            ['nama_kota' => 'Samarinda', 'level' => 'Kota', 'province_id' => 23],
            ['nama_kota' => 'Tanjung Selor', 'level' => 'Kota', 'province_id' => 24],
            ['nama_kota' => 'Manado', 'level' => 'Kota', 'province_id' => 25],
            ['nama_kota' => 'Palu', 'level' => 'Kota', 'province_id' => 26],
            ['nama_kota' => 'Makassar', 'level' => 'Kota', 'province_id' => 27],
            ['nama_kota' => 'Kendari', 'level' => 'Kota', 'province_id' => 28],
            ['nama_kota' => 'Gorontalo', 'level' => 'Kota', 'province_id' => 29],
            ['nama_kota' => 'Mamuju', 'level' => 'Kota', 'province_id' => 30],
            ['nama_kota' => 'Ambon', 'level' => 'Kota', 'province_id' => 31],
            ['nama_kota' => 'Sofifi', 'level' => 'Kota', 'province_id' => 32],
            ['nama_kota' => 'Jayapura', 'level' => 'Kota', 'province_id' => 33],
            ['nama_kota' => 'Manokwari', 'level' => 'Kota', 'province_id' => 34],
        ];

        DB::table('cities')->insert($cities);
    }
}
