<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use Carbon\Carbon;
class AdminPaymentsController extends Controller
{
    public function show(Payment $payment) {
   $active="payments";
    return view('admin.payments.show',compact('payment','active'));
    }

    public function destroy(Payment $payment) {
    	$payment->update(['deleted_at'=>Carbon::now()]);
    	\Alert::success("Deleted","Succssfully Deleted")->toToast();
    	return redirect()->back();
    }
}
