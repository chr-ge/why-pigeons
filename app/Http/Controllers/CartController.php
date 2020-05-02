<?php

namespace App\Http\Controllers;

use App\Menu;

class CartController extends Controller
{
    //https://github.com/darryldecode/laravelshoppingcart

    /**
     * Add menu item to cart.
     *
     * @param Menu $menu
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Menu $menu){
        if(!$menu->available){
            return redirect()->back()->with('error', 'Item Unavailable');
        }

        $data = request()->validate([
            'quantity' => 'required|max:20',
            'instructions' => 'nullable|string|max:255'
        ]);

        \Cart::session($menu->restaurant_id)->add(array(
            'id' => $menu->id,
            'name' => $menu->name,
            'price' => $menu->price,
            'quantity' => $data['quantity'],
            'attributes' => array(
                'instructions' => $data['instructions']
            ),
            'associatedModel' => 'Menu'
        ));

        return redirect()->back();
    }

    /**
     * Remove item from cart.
     *
     * @param Menu $menu
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove(Menu $menu){
        \Cart::session($menu->restaurant_id)->remove($menu->id);
        return redirect()->back();
    }
}
