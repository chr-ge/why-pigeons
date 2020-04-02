<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;

class PigeonController extends Controller
{
    public function index(){
        return view('dashboard.pigeon.dashboard');
    }

    public function restaurants(){
        $restaurants = Restaurant::where('active', true)->paginate(10);
        return view('dashboard.pigeon.restaurants', compact('restaurants'));
    }

    public function applications(){
        $restaurants = Restaurant::where('active', false)->paginate(10);
        return view('dashboard.pigeon.applications', compact('restaurants'));
    }

    public function restaurantDetails(Restaurant $restaurant){
        $menu_items = Cache::remember('menu.count.'.$restaurant->id, now()->addSeconds(30), function () use ($restaurant){
            return $restaurant->menu_items()->count();
        });
        return view('dashboard.pigeon.r-details', compact('restaurant', 'menu_items'));
    }

    public function activateRestaurant(Restaurant $restaurant){
        $restaurant->update([
            'active' => !$restaurant->active
        ]);
        return redirect()->back();
    }

    public function delRestaurant(Restaurant $restaurant){
        $restaurant->delete();
        return redirect()->route('pigeon.restaurants');
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
