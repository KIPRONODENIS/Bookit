<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Hotel;
class BookingController extends Controller
{
    public function hotels(Service $service) {

      //return a form to book from with service
      session(['service_id' => $service->id]);
      $hotels=$service->hotels;


      return view('hotels',compact('hotels','service'));
    }

    public function booking(Hotel $hotel) {
  //we need that specific service by hotel
$service=$hotel->services()->find(session('service_id'));

      return view('booking_form',compact('service'));
    }
}
