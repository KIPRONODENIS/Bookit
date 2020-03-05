<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Order;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $services=Service::with('hotels')->get();
      $orders=\Auth::user()->orders()->with('hotel','service')->get();
      return view('home',compact('services','orders'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function hotel()
    {

    return view('hotel');
    }
}
