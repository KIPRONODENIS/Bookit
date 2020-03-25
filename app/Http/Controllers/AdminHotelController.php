<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use Alert;
use Carbon\Carbon;
class AdminHotelController extends Controller
{
    public function show(Hotel $hotel) {
$active="hotels";
  return view('admin.hotel.show',compact('hotel','active'));
    }

    public function update(Request $request) {
    	$hotel=Hotel::find($request->hotel);

      $request->validate([
        'hotel_name'=>'required'
      ]);

  

     if($request->hasFile('image')){
       $hotel->update([
         'hotel_name'=>$request->hotel_name,
         'image'=>$request->image->store('hotels',['disk'=>'public'])

       ]);
     }else{

     $hotel->update(['hotel_name'=>$request->hotel_name]);
     }
    Alert::success('updated',"Successfully Updated the Hotel");
    return redirect()->back();
    }


    public function destroy(Hotel $hotel){

    	$hotel->update(['deleted_at'=>Carbon::now()]);
    	  Alert::success('Deleted',"Successfully Deleted the Hotel")->toToast();
        return redirect()->back();

    }


    public function create(Request $request) {

            $validator=$request->validate([
          'hotel_name' => ['required', 'string', 'max:255','unique:hotels'],
          'location'=>['required'],
 
          'image'=>['required']
        ]);


        Hotel::create([
 'hotel_name'=>$request->hotel_name,
'location'=>$request->location,
 'image'=>$request->image->store('hotels',['disk'=>'public']),
 'user_id'=>\Auth::id()

        ]);
        \Alert::success("success!!!","Hotel Created Successfully");

        return redirect()->back();
    }
    
}
