<?php

namespace App\Http\Controllers\Auth;

use App\Address;
use App\Category;
use App\Driver;
use App\Http\Controllers\Controller;
use App\Pigeon;
use App\Providers\RouteServiceProvider;
use App\Restaurant;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:pigeon');
        $this->middleware('guest:driver');
        $this->middleware('guest:restaurant');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function showPigeonRegisterForm()
    {
        return view('auth.register', ['url' => 'pigeon']);
    }

    public function showDriverRegisterForm()
    {
        return view('auth.register', ['url' => 'driver']);
    }

    public function showRestaurantRegisterForm()
    {
        $countries = ['Canada', 'United States of America'];
        $categories = Category::pluck('id', 'name');
        $url = 'restaurant';
        return view('auth.apply', compact('categories', 'url', 'countries'));
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function createPigeon(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|alpha',
            'username' => 'required|unique:pigeons,username|alpha_dash',
            'password' => 'required',
        ]);

        Pigeon::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
        ]);
        return redirect()->intended('login/pigeon');
    }

    protected function createDriver(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|alpha',
            'email' => 'required|unique:drivers,email',
            'phone' => 'required|unique:drivers,phone|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'password' => 'required',
        ]);

        Driver::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
        ]);
        return redirect()->intended('login/driver');
    }

    protected function createRestaurant(Request $request)
    {
        $data  = request()->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:restaurants,email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|unique:restaurants,phone',
            'category_id' => 'required',

            'street_address' => 'required|string',
            'city' => 'required|string',
            'province' => 'required|string',
            'postal_code' => 'required|string',
            'country' => 'required|string',
        ]);

        $newRestaurant = Restaurant::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'category_id' => $data['category_id']
        ]);

        Address::create([
            'account_id' => $newRestaurant->id,
            'description' => 'restaurant',
            'street_address' => $data['street_address'],
            'city' => $data['city'],
            'province' => $data['province'],
            'postal_code' => $data['postal_code'],
            'country' => $data['country'],
        ]);

        return redirect()->intended('get-back-to-you');
    }
}
