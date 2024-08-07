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

    public static function updateCar($id, $model)
    {
        $car = Car::find($id);
        dd($model);
        if ($car) {
            $car->registration_number = '111111111';
            $car->model = $model;
            $car->fuel_type = 'petrol';
            $car->transmission = 'auto';
            $car->save();
        }
    }

    
}
