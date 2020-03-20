<?php

namespace App\Http\Controllers;

use App\Category;
use App\Restaurant;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class RestaurantController extends Controller
{
    public function index(){
        return view('restaurant');
    }
}
