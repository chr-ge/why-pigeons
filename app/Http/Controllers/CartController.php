<?php

namespace App\Http\Controllers;

use App\Menu;

class CartController extends Controller
{
    //https://github.com/darryldecode/laravelshoppingcart

    public function index(){
        $cart = \Cart::getContent();
        return view('cart', compact('cart'));
    }

    public function add(Menu $menu){
        $data = request()->validate([
            'quantity' => 'required|max:20'
        ]);

        \Cart::add(array(
            'id' => $menu->id,
            'name' => $menu->name,
            'price' => $menu->price,
            'quantity' => $data['quantity'],
            'attributes' => array(),
            'associatedModel' => 'Menu'
        ));

        return redirect()->back();
    }

    public function remove($id){
        \Cart::remove($id);
        return redirect()->back();
    }

    public function clear(){
        \Cart::clear();
        return redirect()->back();
    }
}
