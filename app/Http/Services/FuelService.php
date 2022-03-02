<?php

namespace App\Http\Services;


class FuelService{


    public function refuling($liters){

        return [
            'distance' => $liters * 10,
        ];

    }


}


?>
