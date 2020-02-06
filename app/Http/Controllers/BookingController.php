<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
class BookingController extends Controller
{
    public function hotels(Service $service) {

      //return a form to book from with service
      session(['service_id' => $service->id]);
      $hotels=$service->hotels;


      return view('hotels',compact('hotels','service'));
    }

    public function booking() {
      return view('booking_form');
    }
}
