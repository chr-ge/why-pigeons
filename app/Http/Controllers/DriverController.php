<?php

namespace App\Http\Controllers;

use App\Order;
use App\Vehicle;
use App\OrderStatus;
use App\DriversLicense;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Crypt;
use App\Http\Requests\DriversLicenseRequest;

class DriverController extends Controller
{
    public function index()
    {
        $reserved = Order::getDriverReserved()->first();
        $orders = Order::getAvailableOrders()->get();
        return view('driver.driver', compact('orders', 'reserved'));
    }

    public function order(Order $order)
    {
        if($order->driver_id !== auth()->user()->id)
        {
            return redirect()->back()->setStatusCode(403);
        }
        $restaurant_address = $order->status->first()->status === 'reserved'
            ? $order->restaurant->fullAddress()
            : $order->fullAddress();
        return view('driver.order', compact('order', 'restaurant_address'));
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
        $types = ['Automobile', 'Motorcycle', 'Scooter', 'Moped'];
        return view('driver.vehicle', compact('types'));
    }

    public function profilePicture()
    {
        $data = request()->validate([ 'image' => 'required|image' ]);

        $imagePath = $data['image']->store('uploads/drivers', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(600, 600);
        $image->save();

        auth()->user()->update([
            'profile_picture' => $imagePath
        ]);

        return redirect()->back();
    }

    public function reserve(Order $order)
    {
        if(\Gate::denies('license-is-created', auth()->user()->id) || auth()->user()->vehicle == null){
            return redirect()->back()->withErrors('Complete your profile to reserve an order.');
        }
        if(\Gate::denies('driver-can-reserve', auth()->user()->id)){
            return redirect()->back()->withErrors('You already have an active reserved order.');
        }
        $order->update([ 'driver_id' => auth()->user()->id ]);
        OrderStatus::create(['order_id' => $order->id, 'status' => 'reserved']);
        $restaurant_address = $order->status->first()->status === 'reserved'
            ? $order->restaurant->fullAddress()
            : $order->fullAddress();
        return view('driver.order', compact('order', 'restaurant_address'));
    }

    public function foodPickupComplete(Order $order)
    {
        if($order->driver_id !== auth()->user()->id){
            return redirect()->back()->setStatusCode(403);
        }
        OrderStatus::create(['order_id' => $order->id, 'status' => 'food_picked_up']);
        $restaurant_address = $order->fullAddress();
        return view('driver.order', compact('order', 'restaurant_address'));
    }

    public function foodDeliveryComplete(Order $order)
    {
        if($order->driver_id !== auth()->user()->id){
            return redirect()->back()->setStatusCode(403);
        }
        OrderStatus::create(['order_id' => $order->id, 'status' => 'delivered']);
        $restaurant_address = $order->fullAddress();
        return view('driver.order', compact('order', 'restaurant_address'));
    }

    public function storeDriversLicense(DriversLicenseRequest $request)
    {
        DriversLicense::create([
            'driver_id' => auth()->user()->id,
            'license_number' => Crypt::encryptString($request['license_number']),
            'reference_number' => Crypt::encryptString($request['reference_number']),
            'dob' => $request['dob'],
            'valid_on' => $request['valid_on'],
            'expires_on' => $request['expires_on'],
        ]);
        if(auth()->user()->vehicle){
            $reserved = Order::getDriverReserved()->first();
            $orders = Order::getAvailableOrders()->get();
            return view('driver.driver', compact('orders', 'reserved'));
        }
        else {
            $types = ['Automobile', 'Motorcycle', 'Scooter', 'Moped'];
            return view('driver.vehicle', compact('types'));
        }
    }

    public function storeVehicle()
    {
        $data = request()->validate([
            'type' => 'required',
            'plate' => 'required|string|min:2|max:7',
            'model' => 'required|string|min:2',
            'year' => 'required|date_format:Y|after:1901|before:2050',
            'color' => 'required|string|min:2'
        ]);

        auth()->user()->update([
            'type' => $data['type']
        ]);

        Vehicle::create([
            'driver_id' => auth()->user()->id,
            'license_plate' => $data['plate'],
            'car_model' => $data['model'],
            'year' => $data['year'],
            'color' => $data['color']
        ]);

        if(\Gate::allows('license-is-created', auth()->user()->id)){
            $reserved = Order::getDriverReserved()->first();
            $orders = Order::getAvailableOrders()->get();
            return view('driver.driver', compact('orders', 'reserved'));
        }
        else {
            return view('driver.setup');
        }
    }
}
