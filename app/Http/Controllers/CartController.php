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

    /**
     * Add menu item to cart.
     *
     * @param Menu $menu
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Menu $menu){
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

    /**
     * Remove item from cart.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove($id){
        \Cart::remove($id);
        return redirect()->back();
    }

    public function clear(){
        \Cart::clear();
        return redirect()->back();
    }
}
