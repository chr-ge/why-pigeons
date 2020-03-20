<?php

namespace App\Http\Controllers\Auth;

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
        $categories = Category::pluck('id', 'name');
        $url = 'restaurant';
        return view('auth.apply', compact('categories', 'url'));
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
            'name' => 'required',
            'email' => 'required|email|unique:restaurants,email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|unique:restaurants,phone',
            'category_id' => 'required',
            'image' => 'required|image',
        ]);

        $imagePath = request('image')->store('uploads', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        Restaurant::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'category_id' => $data['category_id'],
            'image' => $imagePath,
        ]);

        return redirect()->intended('login/restaurant');
    }
}
