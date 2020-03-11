<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function create(){
        return view('account/address/create');
    }

    public function createAddress(){
        $data  = request()->validate([
            'street_address' => 'required',
            'city' => 'required',
            'province' => 'required',
            'postal_code' => 'required',
            'country' => 'required',
        ]);

        auth()->user()->addresses()->create($data);

        return redirect('account');
    }
}
