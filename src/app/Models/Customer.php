<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Customer extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nic',
        'name',
        'email',
        'password',
        'phone',
        'address',
    ];

    function cars() {
        return $this->hasMany(Car::class);
    }
}
