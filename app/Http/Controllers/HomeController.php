<?php

namespace App\Http\Controllers;

use App\Category;
use App\Menu;
use App\Restaurant;

class HomeController extends Controller
{
    /**
     * Show the application index.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $restaurants = Restaurant::where('active', true)->paginate(8);
        return view('home', compact('restaurants'));
    }

    public function search(){
        $data = request()->validate(['search' => 'string|max:50']);
        $restaurants = Restaurant::where('name','like','%'. $data['search'] .'%')->paginate(8);
        return view('home', compact('restaurants'));
    }

    public function show(Restaurant $restaurant){
        $menus = Menu::where('restaurant_id', $restaurant->id)->get();

        $categories = [];
        foreach($menus as $category){
           array_push($categories, Category::find($category->category_id));
        }
        $categories = array_unique($categories);
        return view('r.show', compact('restaurant', 'categories', 'menus'));
    }
}
