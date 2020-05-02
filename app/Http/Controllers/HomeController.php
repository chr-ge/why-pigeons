<?php

namespace App\Http\Controllers;

use App\Address;
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
        $restaurants = Restaurant::where('active', true)->paginate(12);
        return view('home', compact('restaurants'));
    }

    public function search(){
        $data = request()->validate(['search' => 'string|max:50']);
        $restaurants = Restaurant::where('name','like','%'. $data['search'] .'%')->paginate(12);
        return view('home', compact('restaurants'));
    }

    public function address(){
        \Session::put('address', request()->all());
        return http_response_code(201);
    }

    public function storeAddress() {
        Address::create([
            'account_id' => auth()->user()->id,
            'description' => 'user',
            'street_address' => request()->short,
            'city' => request()->context[1],
            'province' => request()->context[3],
            'postal_code' => request()->context[2],
            'country' => request()->context[4],
            'latitude' => request()->coordinates[0],
            'longitude' => request()->coordinates[1],
        ]);
        return http_response_code(201);
    }

    public function show(Restaurant $restaurant){
        $menus = Menu::where('restaurant_id', $restaurant->id)->get();

        $categories = [];
        foreach($menus as $category){
           array_push($categories, Category::find($category->category_id));
        }
        $categories = array_unique($categories);
        return view('show', compact('restaurant', 'categories', 'menus'));
    }
}
