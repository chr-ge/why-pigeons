<?php

namespace App\Http\Controllers;

use App\Category;
use App\Restaurant;

class RestaurantController extends Controller
{
    public function index(){
        $restaurant = auth()->user();
        $categories = Category::pluck('id', 'name');

        return view('restaurant', compact('restaurant', 'categories'));
    }

    public function addCategory(){
        $data = request()->validate([
            'category_id' => 'required|numeric'
        ]);

        if(!auth()->user()->categories->contains($data['category_id'])){
            switch ($data['category_id']){
                case 1:
                    auth()->user()->categories()->detach(['2', '3']);
                    auth()->user()->categories()->attach('1');
                    break;
                case 2:
                    auth()->user()->categories()->detach(['1', '3']);
                    auth()->user()->categories()->attach('2');
                    break;
                case 3:
                    auth()->user()->categories()->detach(['1', '2']);
                    auth()->user()->categories()->attach('3');
                    break;
                default:
                    auth()->user()->categories()->attach($data['category_id']);
            }
        }
        else {
            return redirect()->back()->with('error', 'That category already exists for this restaurant');
        }

        return redirect()->back();
    }
}
