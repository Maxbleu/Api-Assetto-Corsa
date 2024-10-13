<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CircuitoController;
use Illuminate\Support\Facades\Route;

Route::prefix('brands')->group(function(){

    Route::get('/', [BrandController::class, "getAll"]);

    Route::get('{id}', [BrandController::class, "getBrandById"]);

    Route::get('/country/{country}', [BrandController::class, "getBrandsByCountry"]);

    Route::get('/{id}/cars', [CarController::class, "getBrandCarsByBrandId"]);

});

Route::prefix('cars')->group(function(){

    Route::get('/', [CarController::class, "getAll"]);

    Route::get('{id}', [CarController::class, "getCarById"]);

    Route::get('/{id}/brand', [BrandController::class, "getCarBrandByCarId"]);

});

Route::prefix("circuits")->group(function(){

    Route::get('/', [CircuitoController::class, "getAll"]);

    Route::get('{id}', [CircuitoController::class, "getCircuitById"]);

    Route::get('/country/{country}', [CircuitoController::class, "getCircuitsByCountry"]);

});
