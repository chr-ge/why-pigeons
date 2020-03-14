<?php

namespace App\Http\Controllers;

use App\Category;
use App\Restaurant;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class RestaurantController extends Controller
{
    public function index(){
        $restaurants = Restaurant::all();
        return view('home', compact('restaurants'));
    }

    public function show(Restaurant $restaurant){
        return view('r.show', compact('restaurant'));
    }

    public function create(){
        $categories = Category::pluck('id', 'name');

        return view('/r/create', compact('categories'));
    }

    public function store(){
        $data  = request()->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'image' => 'required|image',
        ]);

        $imagePath = request('image')->store('uploads', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        $restaurant = Restaurant::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'phone' => $data['phone'],
            'category_id' => $data['category_id'],
            'image' => $imagePath,
        ]);

        return redirect('/r/' . $restaurant->id);
    }
}
