<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;
use Alert;
use Auth;
use App\Service;
use App\Rate;
use App\Chat;
use DB;
use App\User;
class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function orders()
    {
      $categories=Service::all();
      $orders=Auth::user()->hotel->orders;
       return view('hotel.orders',compact('categories','orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Hotel  $hotel
    * @return \Illuminate\Http\Response
    */
    public function show(Hotel $hotel)
    {
 $services=$hotel->services;
 return view('hotel.show',compact('hotel','services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate(['service'=>'required',
                          'image'=>'required',
                          'price_per_hour'=>'required|numeric|min:1'
    ]);

    //find service
    $service= Service::find($request->service);
    //save the service through hotels
    $hotel_id=Auth::user()->hotel->id;
    $service->hotels()->syncWithoutDetaching(
    [$hotel_id=>[
      'price_per_hour'=>$request->price_per_hour,
      'image'=>$request->image->store('images',['disk'=>'public'])
    ]
  ]);


  Alert::success('Created',"Service Was Successfully created!!");
  return redirect()->back();
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function profile(Request $request)
    {
      $request->validate([
        'hotel_name'=>'required'
      ]);

     $hotel=Auth::user()->hotel;

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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        //
    }


    /**
     * rate the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
    
     * @return \Illuminate\Http\Response
     */
    public function rate(Request $request)
    {
       Rate::create([
'user_id'=>\Auth::id(),
'service_id'=>$request->service,
'rate'=>$request->rate
]);
Alert::success('Success!!', 'Your rating was successful');
return redirect()->back();

}

public function messages( $user=''){
      $categories=Service::all();
      //lets get the messages that have not been read
      $chats=Chat::where('receiver_id',\Auth::user()->hotel->id)->where('read',false)->with('sender')->select('sender_id',DB::raw('count(*) as total'))->groupBy('sender_id')->get();
     
      if(!$user=='') {
        $id=$user;

    
      }else {
        $id=0;
      }
    return view('hotel.messages',compact('categories','chats','id'));
}
    
}
