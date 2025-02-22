<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegionController;

Route::middleware('api')->group(function () {
    Route::get('/provinces', [RegionController::class, 'getProvinces']);
    Route::get('/cities', [RegionController::class, 'getCities']);
    Route::post('/city', [RegionController::class, 'getCityById']);
    Route::post('/province', [RegionController::class, 'getProvinceById']);
    Route::post('/cities-by-province', [RegionController::class, 'getCitiesByProvinceId']);
    Route::post('/create-cities', [RegionController::class, 'storeCity']);
    Route::post('/create-province', [RegionController::class, 'storeProvince']);
    Route::put('/update-city', [RegionController::class, 'updateCity']);
    Route::put('/update-province', [RegionController::class, 'updateProvince']);
    Route::delete('/delete-city', [RegionController::class, 'deleteCity']);
    Route::delete('/delete-province', [RegionController::class, 'deleteProvince']);
});

Route::get('/test', function () {
    return response()->json(['message' => 'API is working']);
});
