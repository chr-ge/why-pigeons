<?php

namespace App\Http\Controllers;

use App\Menu;
use Darryldecode\Cart\Cart;

class CartController extends Controller
{
    public function index(){
        return view('cart');
    }

    public function addItem(Menu $menu){
        Cart::session(auth()->user()->id)->add(array(
            'id' => $menu->id,
            'name' => $menu->name,
            'price' => $menu->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => 'Menu'
        ));
    }

    public function empty(){
        Cart::clear();
    }
}
