<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;

class CheckoutController extends Controller
{
    public function index(Restaurant $restaurant) {
        if (\Cart::session($restaurant->id)->getTotalQuantity() < 1) {
            return redirect()->back();
        }
        return view('checkout', ['restaurant' => $restaurant]);
    }

    public function store(Restaurant $restaurant) {
        $cart = \Cart::session($restaurant->id);
        $contents = $cart->getContent()->map(function ($item) {
            return $item->name.', '.$item->quantity;
        })->values()->toJson();

        try {
            $charge = Stripe::charges()->create([
                'amount' => $cart->getTotal(),
                'currency' => 'CAD',
                'source' => request()->stripeToken,
                'description' => 'Order',
                'receipt_email' => auth()->user()->email,
                'metadata' => [
                    'contents' => $contents,
                    'quantity' => $cart->getTotalQuantity()
                ],
            ]);

            //SUCCESSFUL
            $cart->clear();

            return view('order-complete')->with('success', 'Order Completed Successfully');
        } catch (CardErrorException $e){
            return redirect()->back()->withErrors('Error! ' . $e->getMessage());
        }
    }
}
