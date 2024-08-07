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

    public static function editCar($id, &$name)
    {
        $car = Car::find($id);
        if ($car) {
            $name = $car->name;
        }
    }

    public static function updateCar($id, $name)
    {
        $car = Car::find($id);
        dd($car);
        if ($car) {
            $car->name = $name;
            $car->save();
        }
    }

    
}
