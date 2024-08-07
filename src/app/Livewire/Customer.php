<?php

namespace App\Livewire;

use App\Handler\CustomerHandler;
use App\Models\Customer as ModelsCustomer;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\WithPagination;

class Customer extends Component
{
    use WithPagination;

    public $nic;
    public $name;
    public $email;
    public $password;
    public $phone;
    public $address;
    public $search;
    public $editingCustomerID;

    protected $customerHandler;
    public $modalOpen = false;

    public function create(){

        $rules = [
            'nic' => 'required|min:10|max:15',
            'name' => 'required|min:3|max:50',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'phone' => 'required|regex:/^\d{10}$/',
            'address' => 'required|string|max:255',
        ];

        $validated = $this->validate($rules);
        CustomerHandler::addCustomer($validated);
        $this->modalOpen = false;
        $this->reset('name', );
        Session::flash('success', 'Saved.');
    }

    public function render()
    {
        return view('livewire.customer', 
        [
            'customers' => ModelsCustomer::latest()->where('email', 'like', "%{$this->search}%")->paginate(2)
        ]
        );
    }
}
