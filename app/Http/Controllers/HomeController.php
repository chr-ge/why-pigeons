<?php

namespace App\Http\Controllers;

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
        return view('r.show', compact('restaurant'));
    }
}
