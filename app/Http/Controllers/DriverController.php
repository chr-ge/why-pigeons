<?php

namespace App\Http\Controllers;

use App\DriversLicense;
use App\Http\Requests\DriversLicenseRequest;

class DriverController extends Controller
{
    public function index()
    {
        return view('driver.driver');
    }

    public function setup()
    {
        return view('driver.setup');
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
