<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Revenue;
class RevenueController extends Controller
{
  public function revenue(){
  	$revenues=Revenue::all();
   $active="revenues";
  	return view('admin.revenue',compact('revenues','active'));
  }
}
