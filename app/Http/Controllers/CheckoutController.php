<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderMenu;
use App\Restaurant;
use App\RestaurantHours;
use App\Mail\OrderPlaced;
use Illuminate\Support\Facades\Mail;
use Darryldecode\Cart\CartCondition;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;

class CheckoutController extends Controller
{
    public function index(Restaurant $restaurant) {
        if (\Cart::session($restaurant->id)->isEmpty() || !RestaurantHours::isOpen($restaurant->id)) {
            return redirect()->back();
        }
        $delivery_condition = new CartCondition(array(
            'name' => 'Delivery Fee',
            'type' => 'delivery',
            'target' => 'total',
            'value' => '+3.49',
            'order' => 1,
            'attributes' => array(
                'amount' => '3.49'
            )
        ));
        $tax_condition = new CartCondition(array(
            'name' => 'GST/QST 14.975%',
            'type' => 'tax',
            'target' => 'total',
            'value' => '14.975%',
            'order' => 2
        ));
        $tip = new CartCondition(array(
            'name' => 'Tip',
            'type' => 'tip',
            'target' => 'total',
            'value' => '2.00',
            'order' => 3
        ));
        \Cart::session($restaurant->id)->condition([$delivery_condition, $tax_condition,
            \Cart::getCondition('Tip') ?: $tip
        ]);

        return view('checkout', ['restaurant' => $restaurant]);
    }

    public function tip(Restaurant $restaurant){
        $data = request()->validate([
            'tip' => 'required|numeric|min:0|max:500'
        ]);

        $tip = new CartCondition(array(
            'name' => 'Tip',
            'type' => 'tip',
            'target' => 'total',
            'value' => $data['tip'],
            'order' => 3
        ));

        \Cart::session($restaurant->id)->removeCartCondition('Tip');
        \Cart::condition($tip);
        return redirect()->back();
    }

    public function store(Restaurant $restaurant) {
        if(!\Session::has('address')){
            return redirect()->back()->withErrors('Please enter your delivery address.');
        }
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

            $order = $this->addToOrdersTables($restaurant->id, $charge['id'], null);

            //SEND ORDER PLACED EMAIL TO USER
            Mail::send(new OrderPlaced($order));

            //SUCCESSFUL
            $cart->clear();

            return view('order-complete')->with('success', 'Order Completed Successfully');
        } catch (CardErrorException $e){
            $this->addToOrdersTables($restaurant->id, $charge['id'], $e->getMessage(), 'failed');
            return redirect()->back()->withErrors('Error! ' . $e->getMessage());
        }
    }

    protected function addToOrdersTables($rest_id, $charge_id, $error, $status = 'new')
    {
        $order = Order::create([
            'user_id' => auth()->user()->id,
            'restaurant_id' => $rest_id,
            'total_items_qty' => \Cart::getTotalQuantity(),
            'billing_subtotal' => \Cart::getSubtotal(),
            'billing_delivery' => \Cart::getCondition('Delivery Fee')->getAttributes()['amount'],
            'billing_tax' => number_format(\Cart::getCondition('GST/QST 14.975%')->getCalculatedValue(\Cart::getSubTotal()), 2, '.', ','),
            'driver_tip' =>number_format(\Cart::getCondition('Tip')->getValue(), 2, '.', ','),
            'billing_total' => \Cart::getTotal(),
            'status' => $status,
            'stripe_id' => $charge_id,
            'error' => $error,
        ]);

        foreach(\Cart::getContent() as $item){
            OrderMenu::create([
                'order_id' => $order->id,
                'menu_id' => $item->id,
                'quantity' => $item->quantity,
                'special' => $item->attributes['instructions']
            ]);
        }

        return $order;
    }
}
