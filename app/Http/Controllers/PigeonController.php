<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Pigeon;
use App\Restaurant;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;

class PigeonController extends Controller
{
    public function index(){
        $users = Cache::remember('users.count.', now()->addSeconds(30), function () {
            return User::all()->count();
        });
        $restaurants = Cache::remember('restaurants.count.', now()->addSeconds(30), function () {
            return Restaurant::all()->count();
        });
        return view('dashboard.pigeon.dashboard', compact('users', 'restaurants'));
    }

    public function users(){
        $users = User::whereNotNull('name')->paginate(10);
        return view('dashboard.pigeon.users', compact('users'));
    }

    public function restaurants(){
        $restaurants = Restaurant::where('active', true)->paginate(10);
        return view('dashboard.pigeon.restaurants', compact('restaurants'));
    }

    public function applications(){
        $restaurants = Restaurant::where('active', false)->whereNull('password')->paginate(10);
        return view('dashboard.pigeon.applications', compact('restaurants'));
    }

    public function settings(){
        $pigeon = auth()->user();
        return view('dashboard.pigeon.settings', compact('pigeon'));
    }

    public function restaurantDetails(Restaurant $restaurant){
        $menu_items = Cache::remember('menu.count.'.$restaurant->id, now()->addSeconds(30), function () use ($restaurant){
            return $restaurant->menu_items_count();
        });
        $menu_change = Cache::remember('menu.change.'.$restaurant->id, now()->addSeconds(30), function () use ($restaurant){
            return Pigeon::getPercentatgeChange( Menu::newMenuItemsLastMonth($restaurant->id), Menu::newMenuItemsThisMonth($restaurant->id));
        });

        return view('dashboard.pigeon.r-details', compact('restaurant', 'menu_items', 'menu_change'));
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
        $data = request()->validate([
            'temp_pass' => 'required|string'
        ]);

        $restaurant->update([
            'password' => Hash::make($data['temp_pass'])
        ]);

        return redirect()->back()->with('success', 'Updated Successfully');
    }

    public function updateAccount(){
        $data = request()->validate([
            'name' => 'required|string|min:3',
            'username' => 'required|string|min:3|unique:pigeons,username,'.auth()->user()->id,
            'password' => 'nullable|string|min:6',
            'new_password' => 'required_if:password'
        ]);

        auth()->user()->update([
            'name' => $data['name'],
            'username' => $data['username'],
            'new_password' => Hash::make($data['new_password']),
        ]);

        return redirect()->back()->with('success', 'Updated Successfully');
    }
}
