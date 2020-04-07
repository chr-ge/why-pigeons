<?php

namespace App\Http\Controllers;

use App\Category;
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
        $restaurants = Restaurant::where('active', true)->paginate(6);
        return view('home', compact('restaurants'));
    }

    public function show(Restaurant $restaurant){
        $menus = Menu::where('restaurant_id', $restaurant->id)->get();

        $categories = [];
        foreach($menus as $category){
           array_push($categories,Category::find($category->category_id));
        }
        $categories = array_unique($categories);
        return view('r.show', compact('restaurant', 'categories', 'menus'));
    }

    public function search(Request $request){
        $search = $request->get('search');
        $restaurants = Restaurant::where('name','like','%'. $search .'%')->paginate(6);
        return view('home', compact('restaurants'));
    }
}
