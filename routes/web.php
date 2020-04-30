<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/','welcome');
Auth::routes();

Route::get('/login/pigeon', 'Auth\LoginController@showPigeonLoginForm')->name('login.pigeon');
Route::get('/login/driver', 'Auth\LoginController@showDriverLoginForm')->name('login.driver');;
Route::get('/login/restaurant', 'Auth\LoginController@showRestaurantLoginForm')->name('login.restaurant');;
Route::get('/register/pigeon', 'Auth\RegisterController@showPigeonRegisterForm')->name('register.pigeon');
Route::get('/register/driver', 'Auth\RegisterController@showDriverRegisterForm')->name('register.driver');
Route::get('/register/restaurant', 'Auth\RegisterController@showRestaurantRegisterForm')->name('register.restaurant');

Route::post('/login/pigeon', 'Auth\LoginController@pigeonLogin');
Route::post('/login/driver', 'Auth\LoginController@driverLogin');
Route::post('/login/restaurant', 'Auth\LoginController@restaurantLogin');
Route::post('/register/pigeon', 'Auth\RegisterController@createPigeon')->name('register.pigeon');
Route::post('/register/driver', 'Auth\RegisterController@createDriver')->name('register.driver');
Route::post('/register/restaurant', 'Auth\RegisterController@createrestaurant')->name('register.restaurant');
Route::view('/get-back-to-you', 'get-back-to-you');

Route::get('/home', 'HomeController@index')->name('home.index');//->middleware('auth');
Route::get('/home/s','HomeController@search')->name('home.search');
Route::get('/account/settings', 'HomeController@settings')->middleware('auth');
Route::get('/r/{restaurant}', 'HomeController@show')->name('home.show');

Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart/{menu}', 'CartController@store')->name('cart.store');
Route::delete('/cart/{menu}', 'CartController@remove')->name('cart.remove');;
Route::get('/cart/clear', 'CartController@clear');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/{restaurant}/checkout', 'CheckoutController@index')->name('checkout');
    Route::post('/{restaurant}/checkout', 'CheckoutController@store')->name('checkout.store');
    Route::post('/{restaurant}/checkout/tip','CheckoutController@tip')->name('checkout.tip');
    Route::view('/order-complete', 'order-complete');
});

Route::group(['middleware' => 'auth:driver'], function () {
    Route::view('/driver', 'driver');
});

Route::group(['middleware' => 'auth:restaurant'], function () {
    Route::get('/restaurant', 'RestaurantController@index')->name('restaurant.index');
    Route::get('/menu', 'RestaurantController@menu')->name('restaurant.menu');
    Route::get('/menu/new', 'RestaurantController@newMenuItem')->name('restaurant.newMenuItem');
    Route::get('/menu/{menu}/edit', 'RestaurantController@editMenuItem')->name('restaurant.editMenuItem');
    Route::get('/management', 'RestaurantController@management')->name('restaurant.manage');

    Route::post('/menu/new', 'RestaurantController@createMenuItem')->name('restaurant.createMenuItem');
    Route::patch('/menu/{menu}/edit', 'RestaurantController@updateMenuItem')->name('restaurant.updateMenuItem');
    Route::delete('/menu/{menu}/edit', 'RestaurantController@deleteMenuItem')->name('restaurant.deleteMenuItem');
    Route::post('/set-image', 'RestaurantController@setImage')->name('setImage');
    Route::post('/set-hours', 'RestaurantController@setOperatingHours')->name('setOperatingHours');
    Route::patch('/update-hours', 'RestaurantController@updateOperatingHours')->name('updateOperatingHours');
    Route::post('/add-category', 'RestaurantController@addCategory')->name('addCategory');
});

Route::group(['middleware' => 'auth:pigeon'], function () {
    Route::get('/pigeon', 'PigeonController@index')->name('pigeon.index');
    Route::get('/users', 'PigeonController@users')->name('pigeon.users');
    Route::get('/users/{user}/details', 'PigeonController@userDetails')->name('pigeon.userDetails');
    Route::get('/drivers', 'PigeonController@drivers')->name('pigeon.drivers');
    Route::get('/drivers/{driver}/details', 'PigeonController@driverDetails')->name('pigeon.driverDetails');
    Route::get('/restaurants', 'PigeonController@restaurants')->name('pigeon.restaurants');
    Route::get('/restaurants/applications', 'PigeonController@applications')->name('pigeon.applications');
    Route::get('/restaurants/{restaurant}/details', 'PigeonController@restaurantDetails')->name('pigeon.restaurantDetails');
    Route::get('/account/settings', 'PigeonController@settings')->name('pigeon.settings');

    Route::post('/restaurants/{restaurant}/details', 'PigeonController@setTempPassword')->name('pigeon.setTempPass');
    Route::patch('/restaurants/{restaurant}/details', 'PigeonController@activateRestaurant')->name('pigeon.activateRestaurant');
    Route::delete('/restaurants/{restaurant}/details', 'PigeonController@delRestaurant')->name('pigeon.delRestaurant');
    Route::patch('/account/settings', 'PigeonController@updateAccount')->name('pigeon.updateAccount');
});

Route::get('/account/address/create', 'AddressController@create')->name('address.create');
Route::post('/account/address', 'AddressController@store')->name('address.store');
