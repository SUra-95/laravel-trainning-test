<?php

namespace App\Handler;

use App\Models\Car;

class CarHandler
{
    
    public static function addCar($validated)
    {
        $car= Car::create($validated);
    }


    public static function deleteCar($id)
    {
        car::find($id)->delete();
    }

    
}
