
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
Route::get('account/hotel', 'HotelController@account')->name('hotel.account');
Route::post('/withdraw','WithDrawController@withdraw')->name('withdraw');

Route::get('/messages/hotel/{user?}', 'HotelController@messages')->name('hotel.messages');
Route::put('/hotel/profile','HotelController@profile')->name('hotel.update');
Route::post('/hotel/new','HotelController@store')->name('hotel.store');
Route::get('/hotel-orders','HotelController@orders')->name('hotel.orders')->middleware('auth');
//booking route
Route::get('book/{service}','BookingController@hotels')->middleware('auth')->name('service.hotels');

Route::post('service/rate','HotelController@rate')->name('service.rate')->middleware('auth');
//bookking form
Route::get('hotel/{hotel}/book/{service}','BookingController@booking')->middleware('auth');
//bOOKING booking-success
Route::get('/booking-success','BookingController@success');

Route::get('/payed','BookingController@payed');

//Route to your profiel

Route::get('profile','UserController@profile')->name('profile');
//admin
Route::get('/admin','AdminController@index')->name('admin');
Route::get('/admin/users','AdminController@users')->name('admin.users');
Route::get('/admin/payments','AdminController@payments')->name('admin.payments');
Route::get('/admin/revenue','RevenueController@revenue')->name('admin.revenues');
Route::get('/admin/withdrawals','AdminController@withdrawals')->name('admin.withdrawals');
Route::get('/admin/hotels','AdminController@hotels')->name('admin.hotels');
Route::get('/admin/bookings','AdminController@bookings')->name('admin.bookings');
Route::get('/admin/services','AdminController@services')->name('admin.services');
Route::get('/admin/report','AdminController@report')->name('admin.report');

Route::post('/admin/user/create','AdminUserController@store')->name('admin.store');

Route::post('/admin/service/create','AdminServiceController@store')->name('admin.service.store');
Route::get('/admin/users/{user}','AdminUserController@show')->name('admin.user.show');
Route::put('/admin/users/{user}','AdminUserController@update')->name('admin.user.update');
Route::get('/admin/users/{user}/remove','AdminUserController@destroy')->name('admin.users.destroy');

Route::get('/admin/hotel/show/{hotel}','AdminHotelController@show')->name('admin.hotel.show');

Route::put('/admin/hotel/update','AdminHotelController@update')->name('admin.hotel.update');
Route::post('/admin/hotel/create','AdminHotelController@create')->name('admin.hotel.store');

Route::get('/admin/hotel/remove/{hotel}','AdminHotelController@destroy')->name('admin.hotel.destroy');


Route::get('/admin/service/show/{service}','AdminServiceController@show')->name('admin.service.show');
Route::put('/admin/service/update/{service}','AdminServiceController@update')->name('admin.service.update');


Route::get('/admin/service/remove/{service}','AdminServiceController@destroy')->name('admin.service.destroy');

Route::get('/admin/booking/show/{order}','AdminBookingsController@show')->name('admin.bookings.show');

Route::get('/admin/booking/remove/{order}',
	'AdminBookingsController@destroy')->name('admin.bookings.destroy');

Route::get('/admin/payments/show/{payment}','AdminPaymentsController@show')->name('admin.payments.show');

Route::get('/admin/payments/remove/{payment}',
	'AdminPaymentsController@destroy')->name('admin.payments.destroy');

