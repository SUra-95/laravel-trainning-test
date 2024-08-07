<?php

namespace App\Handler;

use App\Models\Car;

class CarHandler
{

    public static function addCar($validated)
    {
        $car = Car::create($validated);
        
    }


    public static function deleteCar($id)
    {
        car::find($id)->delete();
    }

    public static function editCar($id)
    {
        $car = Car::find($id);
        if ($car) {
            return $car;
        }
    }

    public static function updateCar($id)
    {
        $car = Car::find($id);
        if ($car) {
            // dd($car);
        }
    }
}
