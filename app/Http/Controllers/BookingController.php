<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
class BookingController extends Controller
{
    public function bookingForm(Service $service) {
      //return a form to book from with service
      return view('booking_form');
    }
}
