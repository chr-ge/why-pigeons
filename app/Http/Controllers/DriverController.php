<?php

namespace App\Http\Controllers;

use App\DriversLicense;
use App\Http\Requests\DriversLicenseRequest;
use App\Order;

class DriverController extends Controller
{
    public function index()
    {
        $orders = Order::where('status', 'ready_for_pickup')->latest()->get();
        return view('driver.driver', compact('orders'));
    }

    public function order(Order $order)
    {
        return view('driver.order', compact('order'));
    }

    public function setup()
    {
        if(\Gate::allows('license-is-created', auth()->user()->id)){
            return redirect()->back();
        }
        return view('driver.setup');
    }

    public function reserve(Order $order){
        $order->update([
            'status' => 'reserved',
            'driver_id' => auth()->user()->id
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
