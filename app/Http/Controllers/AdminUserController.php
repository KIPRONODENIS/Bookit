<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;
use Alert;
use Carbon\Carbon;
class AdminUserController extends Controller
{
    public function store(Request $request) {
    	        $data= $request->validate([
          'name' => ['required', 'string', 'max:255'],
          'phone' => ['required', 'string', 'max:10','min:10'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
          'password' => ['required', 'string', 'min:8', 'confirmed'],
          'user_type'=>['required'],
        ]);


  $this->createuser($data);
Alert::success("created","User Created Successful");
  return redirect()->back();

    }


private function createuser( $data) {
	  return   $user= User::create([
        'name' => $data['name'],
        'phone' => $data['phone'],
        'email' => $data['email'],
        'user_type'=>$data['user_type'],
        'password' => Hash::make($data['password']),
      ]);
}

public function show(User $user) {
	$active="users";
	return view('admin.users.show',compact('user','active'));
}
public function update(Request $request, User $user) {
	  $data= $request->validate([
          'name' => ['required', 'string', 'max:255'],
          'phone' => ['required', 'string', 'max:10','min:10'],
          'email' => ['required', 'string', 'email', 'max:255'],
         
          'user_type'=>['required'],
        ]);


	  $user->update($data);
	  Alert::success("Success!!","Successfully Updated")->toToast();

return redirect()->back();

	
}


public function destroy(User $user) {

$user->update(['deleted_at'=>Carbon::now()]);

Alert::warning("Success!!","Successfully deleted")->toToast();
return redirect()->back();
}


}
