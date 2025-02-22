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
            ['namaKota' => 'Banda Aceh', 'level' => 'Kota', 'province_id' => 1],
            ['namaKota' => 'Medan', 'level' => 'Kota', 'province_id' => 2],
            ['namaKota' => 'Padang', 'level' => 'Kota', 'province_id' => 3],
            ['namaKota' => 'Pekanbaru', 'level' => 'Kota', 'province_id' => 4],
            ['namaKota' => 'Jambi', 'level' => 'Kota', 'province_id' => 5],
            ['namaKota' => 'Palembang', 'level' => 'Kota', 'province_id' => 6],
            ['namaKota' => 'Bengkulu', 'level' => 'Kota', 'province_id' => 7],
            ['namaKota' => 'Bandar Lampung', 'level' => 'Kota', 'province_id' => 8],
            ['namaKota' => 'Pangkal Pinang', 'level' => 'Kota', 'province_id' => 9],
            ['namaKota' => 'Tanjung Pinang', 'level' => 'Kota', 'province_id' => 10],
            ['namaKota' => 'Jakarta', 'level' => 'Provinsi', 'province_id' => 11],
            ['namaKota' => 'Bandung', 'level' => 'Kota', 'province_id' => 12],
            ['namaKota' => 'Semarang', 'level' => 'Kota', 'province_id' => 13],
            ['namaKota' => 'Yogyakarta', 'level' => 'Provinsi', 'province_id' => 14],
            ['namaKota' => 'Surabaya', 'level' => 'Kota', 'province_id' => 15],
            ['namaKota' => 'Serang', 'level' => 'Kota', 'province_id' => 16],
            ['namaKota' => 'Denpasar', 'level' => 'Kota', 'province_id' => 17],
            ['namaKota' => 'Mataram', 'level' => 'Kota', 'province_id' => 18],
            ['namaKota' => 'Kupang', 'level' => 'Kota', 'province_id' => 19],
            ['namaKota' => 'Pontianak', 'level' => 'Kota', 'province_id' => 20],
            ['namaKota' => 'Palangka Raya', 'level' => 'Kota', 'province_id' => 21],
            ['namaKota' => 'Banjarmasin', 'level' => 'Kota', 'province_id' => 22],
            ['namaKota' => 'Samarinda', 'level' => 'Kota', 'province_id' => 23],
            ['namaKota' => 'Tanjung Selor', 'level' => 'Kota', 'province_id' => 24],
            ['namaKota' => 'Manado', 'level' => 'Kota', 'province_id' => 25],
            ['namaKota' => 'Palu', 'level' => 'Kota', 'province_id' => 26],
            ['namaKota' => 'Makassar', 'level' => 'Kota', 'province_id' => 27],
            ['namaKota' => 'Kendari', 'level' => 'Kota', 'province_id' => 28],
            ['namaKota' => 'Gorontalo', 'level' => 'Kota', 'province_id' => 29],
            ['namaKota' => 'Mamuju', 'level' => 'Kota', 'province_id' => 30],
            ['namaKota' => 'Ambon', 'level' => 'Kota', 'province_id' => 31],
            ['namaKota' => 'Sofifi', 'level' => 'Kota', 'province_id' => 32],
            ['namaKota' => 'Jayapura', 'level' => 'Kota', 'province_id' => 33],
            ['namaKota' => 'Manokwari', 'level' => 'Kota', 'province_id' => 34],
        ];

        DB::table('cities')->insert($cities);
    }
}
