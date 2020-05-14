<?php

namespace App\Http\Controllers;

use App\Order;
use App\Vehicle;
use App\DriversLicense;
use App\Http\Requests\DriversLicenseRequest;

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
        if($order->driver_id !== auth()->user()->id)
        {
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

    public function vehicle()
    {
        if(\Gate::allows('driver-has-vehicle', auth()->user()->id)){
            return view('driver.driver');
        }
        else {
            return view('driver.vehicle');
        }
    }

    public function reserve(Order $order)
    {
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

        if(\Gate::allows('driver-has-vehicle', auth()->user()->id)){
            return view('driver.driver');
        }
        else {
            return view('driver.vehicle');
        }
    }

    public function storeVehicle()
    {
        //dd(request()->all());
        $data = request()->validate([
            'plate' => 'required|string|min:2|max:7',
            'model' => 'required|string|min:2',
            'year' => 'required|date_format:Y',
            'color' => 'required|string|min:2'
        ]);

        Vehicle::create([
            'driver_id' => auth()->user()->id,
            'license_plate' => $data['plate'],
            'car_model' => $data['model'],
            'year' => $data['year'],
            'color' => $data['color']
        ]);

        if(\Gate::allows('license-is-created', auth()->user()->id)){
            return view('driver.driver');
        }
        else {
            return view('driver.setup');
        }
    }
}
