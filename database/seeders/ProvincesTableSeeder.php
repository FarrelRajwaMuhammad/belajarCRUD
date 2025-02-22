<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinces = [
            ['id' => 1, 'namaProvinsi' => 'Aceh'],
            ['id' => 2, 'namaProvinsi' => 'Sumatera Utara'],
            ['id' => 3, 'namaProvinsi' => 'Sumatera Barat'],
            ['id' => 4, 'namaProvinsi' => 'Riau'],
            ['id' => 5, 'namaProvinsi' => 'Jambi'],
            ['id' => 6, 'namaProvinsi' => 'Sumatera Selatan'],
            ['id' => 7, 'namaProvinsi' => 'Bengkulu'],
            ['id' => 8, 'namaProvinsi' => 'Lampung'],
            ['id' => 9, 'namaProvinsi' => 'Kepulauan Bangka Belitung'],
            ['id' => 10, 'namaProvinsi' => 'Kepulauan Riau'],
            ['id' => 11, 'namaProvinsi' => 'DKI Jakarta'],
            ['id' => 12, 'namaProvinsi' => 'Jawa Barat'],
            ['id' => 13, 'namaProvinsi' => 'Jawa Tengah'],
            ['id' => 14, 'namaProvinsi' => 'DI Yogyakarta'],
            ['id' => 15, 'namaProvinsi' => 'Jawa Timur'],
            ['id' => 16, 'namaProvinsi' => 'Banten'],
            ['id' => 17, 'namaProvinsi' => 'Bali'],
            ['id' => 18, 'namaProvinsi' => 'Nusa Tenggara Barat'],
            ['id' => 19, 'namaProvinsi' => 'Nusa Tenggara Timur'],
            ['id' => 20, 'namaProvinsi' => 'Kalimantan Barat'],
            ['id' => 21, 'namaProvinsi' => 'Kalimantan Tengah'],
            ['id' => 22, 'namaProvinsi' => 'Kalimantan Selatan'],
            ['id' => 23, 'namaProvinsi' => 'Kalimantan Timur'],
            ['id' => 24, 'namaProvinsi' => 'Kalimantan Utara'],
            ['id' => 25, 'namaProvinsi' => 'Sulawesi Utara'],
            ['id' => 26, 'namaProvinsi' => 'Sulawesi Tengah'],
            ['id' => 27, 'namaProvinsi' => 'Sulawesi Selatan'],
            ['id' => 28, 'namaProvinsi' => 'Sulawesi Tenggara'],
            ['id' => 29, 'namaProvinsi' => 'Gorontalo'],
            ['id' => 30, 'namaProvinsi' => 'Sulawesi Barat'],
            ['id' => 31, 'namaProvinsi' => 'Maluku'],
            ['id' => 32, 'namaProvinsi' => 'Maluku Utara'],
            ['id' => 33, 'namaProvinsi' => 'Papua'],
            ['id' => 34, 'namaProvinsi' => 'Papua Barat'],
        ];

        DB::table('provinces')->insert($provinces);
    }
}
