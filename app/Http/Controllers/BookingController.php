<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
class BookingController extends Controller
{
    public function hotels(Service $service) {
      //return a form to book from with service
      session(['service_id' => $service->id]);
      return view('hotels');
    }

    public function booking() {
      return view('booking_form');
    }
}
