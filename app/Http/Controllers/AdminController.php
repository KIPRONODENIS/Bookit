<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\Hotel;
use App\Order;
use App\Service;
use App\User;
use Auth;
use Carbon\Carbon;
use App\Withdarawal;
use App\Revenue;
class AdminController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
  }
    public function index() {

    	$revenues=Revenue::sum('amount');
    	$users=User::where('deleted_at','=',null)->count();
    	$hotels=Hotel::where('deleted_at','=',null)->count();
    	$bookings=Order::where('deleted_at','=',null)->count();
      $services=Service::where('deleted_at','=',null)->count();
    	$withdrawals=Withdarawal::sum('amount');
       $active="dashboard";
    	return view('admin.index',compact('revenues','hotels','bookings','services','users','active','withdrawals'));
    }

//display users
public function  users() {
    $users=User::latest()->where('id','!=',Auth::id())->where('deleted_at','=',null)->get();
      $active="users";
return view('admin.users',compact('users','active'));
}

//display subscriptions
public function  payments() {
$payments=Payment::latest()->where('deleted_at','=',null)->get();
  $active="payments";
return view('admin.payments',compact('payments','active'));
}  

    //display hotels
public function  hotels() {
    $hotels=Hotel::latest()->where('deleted_at','=',null)->get();
      $active="hotels";
	return view('admin.hotels',compact('hotels','active'));

}

    //display bookings

public function  bookings() {
    $orders=Order::latest()->where('deleted_at','=',null)->get();
      $active="bookings";
	return view('admin.bookings',compact('orders','active'));

}  

    //display services
    
public function  services() {
$services=Service::latest()->where('deleted_at','=',null)->get();
  $active="services";
return view('admin.services',compact('services','active'));
}
    //display withdrawals
    
public function  withdrawals() {
$withdrawals=Withdarawal::latest()->get();
  $active="withdrawals";
return view('admin.withdrawals',compact('withdrawals','active'));
}

//display report page
public function  report() {
  $active="report";
  $lastOneWeek=Carbon::now()->subWeeks(1);
  //users 
  $users=User::where('created_at','>',$lastOneWeek)->count();
  //
  $revenue=Revenue::where('created_at','>',$lastOneWeek)->sum('amount');
  $bookings=Order::where('created_at','>',$lastOneWeek)->count();
  $hotels=Hotel::where('created_at','>',$lastOneWeek)->count();
  $services=Service::where('created_at','>',$lastOneWeek)->count();

$week=[
'users'=>$users,
'revenue'=>$revenue,
'bookings'=>$bookings,
'hotels'=>$hotels,
'services'=>$services,

];

  $lastOneMonth=Carbon::now()->subMonths(1);
  //users 
  $usersm=User::where('created_at','>',$lastOneMonth)->count();
  //
  $revenuem=Revenue::where('created_at','>',$lastOneMonth)->sum('amount');
  $bookingsm=Order::where('created_at','>',$lastOneMonth)->count();
  $hotelsm=Hotel::where('created_at','>',$lastOneMonth)->count();
  $servicesm=Service::where('created_at','>',$lastOneMonth)->count();

$month=[
'users'=>$usersm,
'revenue'=>$revenuem,
'bookings'=>$bookingsm,
'hotels'=>$hotelsm,
'services'=>$servicesm,

];


  $last3Months=Carbon::now()->subMonths(3);
  //users 
  $users3m=User::where('created_at','>',$last3Months)->count();
  //
  $revenue3m=Revenue::where('created_at','>',$last3Months)->sum('amount');
  $bookings3m=Order::where('created_at','>',$last3Months)->count();
  $hotels3m=Hotel::where('created_at','>',$last3Months)->count();
  $services3m=Service::where('created_at','>',$last3Months)->count();

$_3months=[
'users'=>$users3m,
'revenue'=>$revenue3m,
'bookings'=>$bookings3m,
'hotels'=>$hotels3m,
'services'=>$services3m,

];

  $last6Month=Carbon::now()->subMonths(6);
  //users 
  $users6m=User::where('created_at','>',$last6Month)->count();
  //
  $revenue6m=Revenue::where('created_at','>',$last6Month)->sum('amount');
  $bookings6m=Order::where('created_at','>',$last6Month)->count();
  $hotels6m=Hotel::where('created_at','>',$last6Month)->count();
  $services6m=Service::where('created_at','>',$last6Month)->count();

$_6months=[
'users'=>$users6m,
'revenue'=>$revenue6m,
'bookings'=>$bookings6m,
'hotels'=>$hotels6m,
'services'=>$services6m,

];

  $oneyear=Carbon::now()->subMonths(12);
  //users 
  $users6year=User::where('created_at','>',$oneyear)->count();
  //
  $revenue6year=Revenue::where('created_at','>',$oneyear)->sum('amount');
  $bookings6year=Order::where('created_at','>',$oneyear)->count();
  $hotels6year=Hotel::where('created_at','>',$oneyear)->count();
  $services6year=Service::where('created_at','>',$oneyear)->count();

$_year=[
'users'=>$users6year,
'revenue'=>$revenue6year,
'bookings'=>$bookings6year,
'hotels'=>$hotels6year,
'services'=>$services6year,

];


return view('admin.report',compact('active','week','month','_3months','_6months','_year'));

}

}
