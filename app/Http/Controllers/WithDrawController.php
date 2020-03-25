<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Withdarawal;
use App\Revenue;
class WithDrawController extends Controller
{
   public function withdraw(Request $request){
  $request->validate([
'amount'=>'required'
  ]);

Withdarawal::create([
 'hotel_id'=>\Auth::user()->hotel->id,
 'amount'=>$request->amount
]);

Revenue::create([
'user_id'=>\Auth::id(),
'amount'=>150,
'description'=>'Withdarawal fee'
]);

\Alert::success("Success!!", "You have Withdrawn {$request->amount} successfully");

return redirect()->back();

   }
}
