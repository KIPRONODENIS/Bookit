<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Order;
use Auth;
use App\Chat;
use DB;
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
            //lets get the messages that have not been read
      $chats=Chat::where('receiver_id',\Auth::user()->id)->where('read',false)->with('sender')->select('sender_id',DB::raw('count(*) as total'))->groupBy('sender_id')->get();

      return view('home',compact('services','orders','chats'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function hotel()
    {
   $categories=Service::all();
   $services=Auth::user()->hotel->services;
    return view('hotel.index',compact('categories','services'));
    }
}
