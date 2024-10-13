<?php

namespace App\Http\Controllers;

use App\Http\Resources\CircuitoResource;
use App\Models\Circuito;

class CircuitoController extends Controller
{

    public function getAll(){
        return CircuitoResource::collection(Circuito::all());
    }

    public function getCircuitById($id){
        $circuit = Circuito::findOrFail($id);
        return new CircuitoResource($circuit);
    }

    public function getCircuitsByCountry($country){
        $circuitsFilteredByCountry = Circuito::where('country',$country)->get();
        return CircuitoResource::collection($circuitsFilteredByCountry);
    }

}
