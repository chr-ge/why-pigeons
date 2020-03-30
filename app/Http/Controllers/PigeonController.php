<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PigeonController extends Controller
{
    public function index(){
        $all_restaurants = Restaurant::where('active', true)->get();
        return view('dashboard.pigeon.dashboard', compact('new_restaurants', 'all_restaurants'));
    }

    public function applications(){
        $restaurants = Restaurant::where('active', false)->paginate(10);;
        return view('dashboard.pigeon.applications', compact('restaurants'));
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
