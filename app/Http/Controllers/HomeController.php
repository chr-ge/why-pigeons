<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Restaurant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application index.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $restaurants = Restaurant::where('active', true)->get();
        return view('home', compact('restaurants'));
    }

    public function show(Restaurant $restaurant){
        $menus = Menu::where('restaurant_id', $restaurant->id)->get();
        return view('r.show', compact('restaurant', 'menus'));
    }
}
