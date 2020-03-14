<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'RestaurantController@index');
Route::get('/r/create', 'RestaurantController@create')->name('r.create');
Route::post('/r', 'RestaurantController@store')->name('r.store');
Route::get('/r/{restaurant}', 'RestaurantController@show')->name('r.show');

//Route::get('/account', 'AccountController@index')->name('account');
Route::get('/account/address/create', 'AddressController@create')->name('address.create');
Route::post('/account/address', 'AddressController@store')->name('address.store');
