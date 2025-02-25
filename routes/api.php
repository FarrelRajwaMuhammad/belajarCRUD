<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegionController;

// Route untuk kota
Route::middleware('api')->group(function () {
    Route::get('/cities', [RegionController::class, 'getCities']);
    Route::post('/cities-id', [RegionController::class, 'getCityById']);
    Route::post('/cities-by-provinces', [RegionController::class, 'getCitiesByProvinceId']);
    Route::post('/create-cities', [RegionController::class, 'storeCity']);
    Route::post('/update-cities', [RegionController::class, 'updateCity']);
    Route::delete('/delete-cities', [RegionController::class, 'deleteCity']);
});


// Route untuk provinsi
Route::middleware('api')->group(function () {
    Route::get('/provinces', [RegionController::class, 'getProvinces']);
    Route::post('/province-id', [RegionController::class, 'getProvinceById']);
    Route::post('/create-province', [RegionController::class, 'storeProvince']);
    Route::post('/update-province', [RegionController::class, 'updateProvince']);
    Route::delete('/delete-provinces', [RegionController::class, 'deleteProvince']);
});

Route::get('/test', function () {
    return response()->json(['message' => 'API is working']);
});
