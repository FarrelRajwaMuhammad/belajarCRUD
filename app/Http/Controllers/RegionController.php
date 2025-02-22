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

        $cityName = $request->input('namaKota');
        $provinceId = $request->input('province_id');

        return response()->json(['message' => 'City created successfully']);
    }

    public function storeProvince(Request $request)
    {
        $request->validate([
            'namaProvinsi' => 'required|string'
        ]);

        $provinceName = $request->input('namaProvinsi');

        $this->queryService->createProvince($provinceName);

        return response()->json(['message' => 'Province created successfully']);
    }

    public function updateCity(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('namaKota');

        if (!$id || !$name) {
            return response()->json(['error' => 'City ID and name are required'], 400);
        }

        $updated = $this->queryService->updateCity($id, $name);

        return response()->json(['message' => $updated ? 'City updated successfully' : 'City update failed']);
    }

    public function updateProvince(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('namaProvinsi');

        if (!$id || !$name) {
            return response()->json(['error' => 'Province ID and name are required'], 400);
        }

        $updated = $this->queryService->updateProvince($id, $name);

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
