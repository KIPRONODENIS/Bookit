<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Carbon\Carbon;
use ALert;
class AdminBookingsController extends Controller
{
  public function show(Order $order) {
  	$active='';
  return view('admin.bookings.show',compact('order','active'));
  }

  public function destroy(Order $order) {

  	$order->update(['deleted_at'=>Carbon::now()]);

  	\Alert::success("Deleted","Successfully Deleted")->toToast();

  	return redirect()->back();
  }
}
