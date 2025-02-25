<?php

namespace App\Services;

use App\Models\city;
use Illuminate\Support\Facades\DB;

class Query
{

    public function getprovinces()
    {
        $sql = "SELECT * FROM Provinces";

        return DB::select($sql);
    }

    public function getcities()
    {
        $sql = "SELECT * FROM cities";

        return DB::select($sql);
    }

    public function getCitiesByID($CityId)
    {
        $sql = "SELECT * FROM cities WHERE id = ?";

        return DB::select($sql, [$CityId]);
    }

    public function getProvincesByID($ProvincesId)
    {
        $sql = "SELECT * FROM provinces WHERE id = ?";

        return DB::select($sql, [$ProvincesId]);
    }

    public function getCitiesByProvinceID($provinceid)
    {
        $sql = "SELECT * FROM cities WHERE province_id = ?";

        return DB::select($sql, [$provinceid]);
    }

    public function createCity($cityName, $cityLevel, $provinceId)
    {
        $sql = "INSERT INTO cities (nama_kota, province_id, level) VALUES (?, ?, ?)";
        DB::insert($sql, [$cityName, $provinceId, $cityLevel]);
    }

    public function createProvince($provinceName)
    {
        $sql = "INSERT INTO provinces (nama_provinsi) VALUES (:nama_provinsi)";
        return DB::insert($sql, ['nama_provinsi' => $provinceName]);
    }

    public function updateCity($id, $cityName)
    {
        $sql = "UPDATE cities SET nama_kota = ? WHERE id = ?";
        return DB::update($sql, [$cityName, $id]);
    }

    public function updateProvince($id, $provinceName)
    {
        $sql = "UPDATE provinces SET nama_provinsi = ? WHERE id = ?";
        return DB::update($sql, [$provinceName, $id]);
    }

    public function deleteCity($city_id)
    {
        $sql = "DELETE FROM cities WHERE id = ?";
        return DB::delete($sql, [$city_id]);
    }

    public function deleteProvince($province_id)
    {
        $sql = "DELETE FROM provinces WHERE id = ?";
        return DB::delete($sql, [$province_id]);
    }
}
