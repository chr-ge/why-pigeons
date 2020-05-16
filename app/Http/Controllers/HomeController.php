<?php

namespace App\Http\Controllers;

use App\Address;
use App\Category;
use App\Favorite;
use App\Menu;
use App\Restaurant;
use App\Review;

class HomeController extends Controller
{
    /**
     * Show the application index.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(request()->search){
            $restaurants = Restaurant::searchRestaurants(request()->search);
            $title = '<i class="fas fa-search"></i> Search Results';
        }
        else if (request()->sort === 'reviews') {
            $restaurants = Restaurant::orderByAvgRating();
            $title = '<i class="fas fa-award"></i> Reviews High->Low';
        }
        else if(request()->sort === 'delivery'){
            $restaurants = Restaurant::orderByDeliveryFee();
            $title = '<i class="fas fa-car"></i> Delivery Fee Low->High';
        }
        else {
            $restaurants = Restaurant::where('active', true)->paginate(12);
            $title = '<i class="fas fa-highlighter"></i> Featured Restaurants';
        }

        return view('home', compact('restaurants', 'title'));
    }

    public function address()
    {
        \Session::put('address', request()->all());
        return response()->noContent();
    }

    public function storeAddress()
    {
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
        return response()->noContent();
    }

    public function show(Restaurant $restaurant)
    {
        $favorite = auth()->user()
            ? auth()->user()->favorites->contains($restaurant->id)
            : null;

        $menus = Menu::where('restaurant_id', $restaurant->id)->get();

        $rating = number_format(Review::where('restaurant_id', $restaurant->id)->avg('rating'), 1, '.', '');

        $categories = [];
        foreach($menus as $category){
           array_push($categories, Category::find($category->category_id));
        }
        $categories = array_unique($categories);
        return view('show', compact('restaurant', 'categories', 'menus', 'favorite', 'rating'));
    }

    public function favorite(Restaurant $restaurant)
    {
        auth()->user()->favorites()->toggle($restaurant->id);
        return response()->noContent();
    }
}
