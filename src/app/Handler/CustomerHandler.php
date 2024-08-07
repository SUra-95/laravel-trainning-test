<?php

namespace App\Handler;

use App\Mail\TodoCreatedEmail;
use App\Mail\TodoMarkdownMail;
use App\Models\Customer;
use Illuminate\Support\Facades\Mail;

class CustomerHandler
{
    
    public static function addCustomer($validated)
    {
        $customer= Customer::create($validated);
        // Mail::to(auth()->user()->email)->send(new TodoMarkdownMail([
        //     'name' => auth()->user()->email,
        //     'todo' => $todo->name,
        //     'createdAt' => $todo->created_at->format('Y-m-d H:i:s'),
        //     'image' => $todo->image,
        // ]));
    }


    public static function deleteCustomer($id)
    {
        Customer::find($id)->delete();
    }

    
}
