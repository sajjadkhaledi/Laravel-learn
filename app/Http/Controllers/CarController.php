<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\FuelService;

class CarController extends Controller
{
    // public function calc(){
    //     $fuel = new FuelService();
    //     dd($fuel->refuling(50));
    // }

    public function calc(FuelService $fuel){

        dd($fuel->refuling(50));
    }
}
