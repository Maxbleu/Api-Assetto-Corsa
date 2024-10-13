<?php

namespace App\Http\Controllers;

use App\Http\Resources\BrandResource;
use App\Models\Brand;
use App\Models\Car;
use Illuminate\Support\Facades\Http;

class BrandController extends Controller
{
    public function getAll(){
        return new BrandResource(Brand::all());
    }

    public function getBrandById($id){
        return new BrandResource(Brand::findOrFail($id));
    }

    public function getBrandsByCountry($country){
        $brandsFilteredByCountry = Brand::where("country",$country)->get();
        return BrandResource::collection($brandsFilteredByCountry);
    }

    public function getCarBrandByCarId($car_id){
        $coche = Car::findORFail($car_id);
        return new BrandResource($coche->brand);
    }
}
