<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Query;

class RegionController extends Controller
{
    protected $queryService;

    public function __construct(Query $queryService)
    {
        $this->queryService = $queryService;
    }

    public function getProvinces()
    {
        return response()->json($this->queryService->getProvinces());
    }

    public function getCities()
    {
        return response()->json($this->queryService->getCities());
    }

    public function getCityById(Request $request)
    {
        $id = $request->input('id');

        if (!$id) {
            return response()->json(['error' => 'City ID is required'], 400);
        }

        return response()->json($this->queryService->getCitiesByID($id));
    }

    public function getProvinceById(Request $request)
    {
        $id = $request->input('id');

        if (!$id) {
            return response()->json(['error' => 'Province ID is required'], 400);
        }

        return response()->json($this->queryService->getProvincesByID($id));
    }

    public function getCitiesByProvinceId(Request $request)
    {
        $provinceId = $request->input('province_id');

        if (!$provinceId) {
            return response()->json(['error' => 'Province ID is required'], 400);
        }

        return response()->json($this->queryService->getCitiesByProvinceID($provinceId));
    }

    public function storeCity(Request $request)
    {
        try {
            $cityName = $request->input('nama_kota');
            $level = $request->input('level');
            $provinceId = $request->input('province_id');

            // Panggil service untuk insert data
            $this->queryService->createCity($cityName, $level, $provinceId);

            return response()->json(['message' => 'City created successfully'], 201);
        } catch (\Illuminate\Database\QueryException $e) {
            // Tangkap error dari database (misalnya constraint violation)
            return response()->json([
                'error' => 'Database Error',
                'message' => $e->getMessage()
            ], 500);
        } catch (\Exception $e) {
            // Tangkap error umum lainnya
            return response()->json([
                'error' => 'General Error',
                'message' => $e->getMessage()
            ], 500);
        }
    }


    public function storeProvince(Request $request)
    {

        $provinceName = $request->input('nama_provinsi');

        $this->queryService->createProvince($provinceName);

        return response()->json(['message' => 'Province created successfully']);
    }

    public function updateCity(Request $request)
    {
        try {
            $id = $request->input('id');
            $cityName = $request->input('nama_kota');

            if (!$id || !$cityName) {
                return response()->json(['error' => 'City ID and name are required'], 400);
            }

            $updated = $this->queryService->updateCity($id, $cityName);

            return response()->json([
                'message' => $updated ? 'City updated successfully' : 'City update failed'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'An error occurred while updating the city',
                'details' => $e->getMessage()
            ], 500);
        }
    }

    public function updateProvince(Request $request)
    {
        $id = $request->input('id');
        $provinceName = $request->input('nama_provinsi');

        if (!$id || !$provinceName) {
            return response()->json(['error' => 'Province ID and name are required'], 400);
        }

        $updated = $this->queryService->updateProvince($id, $provinceName);

        return response()->json(['message' => $updated ? 'Province updated successfully' : 'Province update failed']);
    }

    public function deleteCity(Request $request)
    {
        $id = $request->input('id');

        if (!$id) {
            return response()->json(['error' => 'City ID is required'], 400);
        }

        $deleted = $this->queryService->deleteCity($id);

        return response()->json(['message' => $deleted ? 'City deleted successfully' : 'City delete failed']);
    }

    public function deleteProvince(Request $request)
    {
        $id = $request->input('id');

        if (!$id) {
            return response()->json(['error' => 'Province ID is required'], 400);
        }

        $deleted = $this->queryService->deleteProvince($id);

        return response()->json(['message' => $deleted ? 'Province deleted successfully' : 'Province delete failed']);
    }
}
