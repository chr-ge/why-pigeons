<?php

namespace App\Http\Controllers;

use App\Order;
use App\Review;

class ReviewController extends Controller
{
    public function index(){

    }

    public function store(Order $order){
        $data = request()->validate([
            'rating' => 'required|numeric|min:1|max:5',
            'comment' => 'nullable|string'
        ]);
        Review::create([
            'user_id' => auth()->user()->id,
            'restaurant_id' => $order->restaurant->id,
            'rating' => $data['rating'],
            'comment' => $data['comment']
        ]);
        return response()->noContent();
    }
}
