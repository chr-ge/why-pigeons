<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderMenu;
use App\Restaurant;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Cartalyst\Stripe\Exception\CardErrorException;
use Darryldecode\Cart\CartCondition;

class CheckoutController extends Controller
{
    public function index(Restaurant $restaurant) {
        if (\Cart::session($restaurant->id)->isEmpty()) {
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
        \Cart::session($restaurant->id)->condition([$delivery_condition, $tax_condition]);

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

            $this->addToOrdersTables(null);
            //$order = $this->addToOrdersTables( null);
            //Mail::send(new OrderPlaced($order));

            //SUCCESSFUL
            $cart->clear();

            return view('order-complete')->with('success', 'Order Completed Successfully');
        } catch (CardErrorException $e){
            $this->addToOrdersTables($e->getMessage(), 'failed');
            return redirect()->back()->withErrors('Error! ' . $e->getMessage());
        }
    }

    protected function addToOrdersTables($error, $status = 'new')
    {
        $order = Order::create([
            'user_id' => auth()->user()->id,
            'total_items_qty' => \Cart::getTotalQuantity(),
            'billing_subtotal' => \Cart::getSubtotal(),
            'billing_delivery' => \Cart::getCondition('Delivery Fee')->getAttributes()['amount'],
            'billing_tax' => number_format(\Cart::getCondition('GST/QST 14.975%')->getCalculatedValue(\Cart::getSubTotal()), 2, '.', ','),
            'billing_total' => \Cart::getTotal(),
            'status' => $status,
            'error' => $error,
        ]);

        foreach(\Cart::getContent() as $item){
            OrderMenu::create([
                'order_id' => $order->id,
                'menu_id' => $item->id,
                'quantity' => $item->quantity
            ]);
        }

        return $order;
    }
}
