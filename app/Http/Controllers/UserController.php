<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function orders(){
        $orders = Order::where('user_id', auth()->user()->id)->get();
        return view('account.orders', compact('orders'));
    }
}
