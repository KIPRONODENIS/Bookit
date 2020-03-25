<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use Alert;
use Carbon\Carbon;
class AdminServiceController extends Controller
{
    public function store(Request $request) {
    	$request->validate([
      'name'=>['required','min:2','max:50','unique:services'],
      'rate'=>['required']
    	]);

    	Service::create([
                'name'=>$request->name,
                'per'=>$request->rate,
                'user_id'=>\Auth::id()
    	]);

    	Alert::success("Created",'Service created successful');

    	return redirect()->back();
    }

    public function show(Service $service){
 $active="services";
        return view('admin.service.show',compact('service','active'));
        
    }

    public function update(Request $request, Service $service) {
         $active="services";

      $data=  $request->validate([
      'name'=>['required','min:2','max:50'],
      'rate'=>['required']
        ]);

       $service->update([
  'name'=>$data['name'],
  'per'=>$data['rate']
       ]);

       Alert::success("success","service successfully updated");

       return redirect()->back();

    }


    public function destroy(Service $service) {

$service->update(['deleted_at'=>Carbon::now()]);

 Alert::success("success","service successfully updated")->toToast();
return redirect()->back();

    }

}
