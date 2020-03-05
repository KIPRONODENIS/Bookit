
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

Route::get('/','WelcomeController@index');
Route::get('/register',function(){
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
Route::get('book/{service}','BookingController@hotels')->middleware('auth')->name('service.hotels');
//bookking form
Route::get('hotel/{hotel}/book/{service}','BookingController@booking')->middleware('auth');
//bOOKING booking-success
Route::get('/booking-success','BookingController@success');

Route::get('/payed','BookingController@payed');

//Route to your profiel

Route::get('profile','UserController@profile')->name('profile');
