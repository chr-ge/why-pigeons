<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PigeonController extends Controller
{
    public function index(){
        $new_restaurants = Restaurant::whereNull('password')->get();
        $all_restaurants = Restaurant::whereNotNull('password')->get();
        return view('pigeon', compact('new_restaurants', 'all_restaurants'));
    }

    public function details(Restaurant $restaurant){
        return view('pigeon.details', compact('restaurant'));
    }

    public function setTempPassword(Restaurant $restaurant){
        $data  = request()->validate([
            'temp_pass' => 'required|string'
        ]);

        $restaurant->update([
            'password' => Hash::make($data['temp_pass'])
        ]);

        return redirect()->back()->with('success', 'Updated Successfully');
    }
}
