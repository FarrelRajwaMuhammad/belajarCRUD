<?php

use App\Http\Controllers\RegionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/cek-data', function () {
    $provinces = DB::table('provinces')->get();
    $cities = DB::table('cities')->get();

    return response()->json([
        'provinces' => $provinces,
        'cities' => $cities
    ]);
});

Route::get('/', [RegionController::class, 'create']);
Route::post('/', [RegionController::class, 'store']);

Route::get('/index', [RegionController::class, 'index']);
