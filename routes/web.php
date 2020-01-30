<?php

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


Route::get('/',function(){

  return view('auth.register');
})->name('register');

//Route to show login form
Route::get('/login','Auth.LoginController@showLoginForm')->name('login');
//Route to register

//Authentication routes
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/hotel/home', 'HomeController@hotel')->name('hotel.index');

//booking route
Route::get('book/{service}','BookingController@bookingForm')->middleware('auth');
