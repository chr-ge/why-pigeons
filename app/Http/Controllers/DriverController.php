<?php

namespace App\Http\Controllers;

use App\DriversLicense;
use App\Http\Requests\DriversLicenseRequest;
use App\Order;

class DriverController extends Controller
{
    public function index()
    {
        $reserved = Order::getDriverReserved()->get();
        $orders = Order::getAvailableOrders()->get();
        return view('driver.driver', compact('orders', 'reserved'));
    }

    public function order(Order $order)
    {
        if($order->driver_id !== auth()->user()->id){
            return redirect()->back();
        }
        return view('driver.order', compact('order'));
    }

    public function trips()
    {
        $trips = Order::getDriverCompletedOrders()->paginate(5);
        return view('driver.trips', compact('trips'));
    }

    public function setup()
    {
        if(\Gate::allows('license-is-created', auth()->user()->id)){
            return redirect()->back();
        }
        return view('driver.setup');
    }

    public function reserve(Order $order){
        if(\Gate::denies('driver-can-reserve', auth()->user()->id)){
            return redirect()->back()->withErrors('You already have an active reserved order.');
        }
        $order->update([
            'driver_id' => auth()->user()->id,
            'status' => 'reserved'
        ]);
        return view('driver.order', compact('order'));
    }

    public function storeDriversLicense(DriversLicenseRequest $request)
    {
        DriversLicense::create([
            'driver_id' => auth()->user()->id,
            'license_number' => $request['license_number'],
            'reference_number' => $request['reference_number'],
            'dob' => $request['dob'],
            'valid_on' => $request['valid_on'],
            'expires_on' => $request['expires_on'],
        ]);

        return view('driver.driver');
    }
}
