<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use App\Service;
class WelcomeController extends Controller
{
    public function index() {
      $hotels=Hotel::with('services')->get()->take(6);
      //services

      $services=Service::all()->take(6);

      return view('welcome',compact('hotels','services'));
    }
}
