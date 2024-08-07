<?php

namespace App\Livewire;

use App\Handler\CarHandler;
use App\Models\Car as ModelsCar;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Car extends Component                               
{
    use WithPagination;

    public $registration_number;
    public $model;
    public $fuel_type;
    public $transmission;
    public $search;
    public $isdeleted;
    public $editingCarID;
    // #[Rule('required|min:5|max:50')]
    public $editingCarName;
    public $editingCarModel;
    public $editingCarDetails;

    public $modalOpen = false;

    public function create()
    {

        $rules = [
            'registration_number' => 'required',
            'model' => 'required',
            'fuel_type' => 'required|in:petrol,diesel',
            'transmission' => 'required|in:manual,auto,other',
        ];

        $validated = $this->validate($rules);
        CarHandler::addCar($validated);
        $this->modalOpen = false;
        // $this->reset('name',);
        Session::flash('success', 'Saved.');
    }

    public function delete($carId)
    {
        CarHandler::deleteCar($carId);
    }

    public function edit($carId)
    {
        $this->editingCarID = $carId;
        // $this->editingCarName = '';
        // $editingCarDetails = CarHandler::editCar($this->editingCarID);
        // dd($editingCarDetails);
        // return view(
        //     'livewire.includes.car-card',
        //     ['carDetails' => $editingCarDetails]
        // );
    }

    public function cancelEdit()
    {
        $this->reset('editingCarID', 'editingCarName');
    }

    public function update()
    {
        // dd('here');
        // $this->validateOnly('editingCarName');

        CarHandler::updateCar($this->editingCarID);
        $this->cancelEdit();
    }


    public function render()
    {
        return view(
            'livewire.car',
            [
                'cars' => ModelsCar::latest()
                    ->where('model', 'like', "%{$this->search}%")
                    ->orWhere('registration_number', 'like', "%{$this->search}%")
                    ->paginate(2)
            ]
        );
    }
}
