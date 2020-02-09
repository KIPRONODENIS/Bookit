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
  if(\Auth::check()){
      if(\Auth::user()->user_type=="client") {
          return redirect()->route('home');
      }else {
          return redirect()->route('hotel.index');
      }
  }
  return view('auth.register');
})->name('register');

//Route to show login form
Route::get('/login','Auth.LoginController@showLoginForm')->name('login');
//Route to register

//Authentication routes
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/hotel/home', 'HomeController@hotel')->name('hotel.index');
Route::get('/hotel/{hotel}', 'HotelController@show')->name('hotel.show');

//booking route
Route::get('book/{service}','BookingController@hotels')->middleware('auth');
//bookking form
Route::get('book/{hotel}/form','BookingController@booking')->middleware('auth');
//bOOKING booking-success
Route::get('/booking-success',function(){
  return view('booking-success');
});
