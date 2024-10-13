<?php

namespace App\Http\Controllers;

use App\Http\Resources\CarResource;
use App\Models\Car;

class CarController extends Controller
{

    public function getAll(){
        return CarResource::collection(Car::all());
    }

    public function getCarById($id){
        return new CarResource(Car::findOrFail($id));
    }

    public function getBrandCarsByBrandId($brand_id){
        return CarResource::collection(Car::where("brand_id",$brand_id)->get());
    }

}
