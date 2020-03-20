<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:pigeon')->except('logout');
        $this->middleware('guest:driver')->except('logout');
        $this->middleware('guest:restaurant')->except('logout');
    }

    public function showPigeonLoginForm()
    {
        return view('auth.login', ['url' => 'pigeon']);
    }

    public function showDriverLoginForm()
    {
        return view('auth.login', ['url' => 'driver']);
    }

    public function showRestaurantLoginForm()
    {
        return view('auth.login', ['url' => 'restaurant']);
    }

    public function pigeonLogin(Request $request)
    {
        $this->validate($request, [
            'username'   => 'required',
            'password' => 'required|min:6'
        ]);
        if (Auth::guard('pigeon')->attempt(['username' => $request->username, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended('/pigeon');
        }

        return back()->withInput($request->only('username', 'remember'));
    }

    public function driverLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('driver')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended('/driver');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function restaurantLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('restaurant')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended('/restaurant');
        }
        return back()->withInput($request->only('email', 'remember'));
    }
}
