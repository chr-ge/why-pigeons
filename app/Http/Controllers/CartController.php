<?php

namespace App\Http\Controllers;

use App\Menu;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function showCart(){

    }

    public function addItem(Menu $menu){
        Cart::session(auth()->user()->id)->add(array(
            'id' => $menu->id,
            'name' => $menu->name,
            'price' => $menu->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $menu
        ));
    }

    public function empty(){
        Cart::clear();
    }
}
