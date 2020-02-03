<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use App\Hotel;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

      if($data['user_type']=="client")
      {

        return Validator::make($data, [
          'name' => ['required', 'string', 'max:255'],
          'phone' => ['required', 'string', 'max:10','min:10'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
          'password' => ['required', 'string', 'min:8', 'confirmed'],
          'user_type'=>['required'],
        ]);
      }
      else {
      $validator=Validator::make($data, [
          'hotel_name' => ['required', 'string', 'max:255'],
          'name' => ['required', 'string', 'max:255'],
          'location'=>['required'],
          'phone' => ['required', 'string', 'max:10','min:10'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
          'password' => ['required', 'string', 'min:8', 'confirmed'],
          'user_type'=>['required'],
        ]);

        if ($validator->fails()) {
             session()->flash('hotel', "true");
             return $validator;
        }

        return $validator;

      }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

      $user= User::create([
        'name' => $data['name'],
        'phone' => $data['phone'],
        'email' => $data['email'],
        'user_type'=>$data['user_type'],
        'password' => Hash::make($data['password']),
      ]);
if($data['user_type']=='hotel'){
$hotel=new Hotel();
$hotel->hotel_name=$data['hotel_name'];
$hotel->location=$data['location'];
$user->hotels()->save($hotel);
$this->redirectTo='/hotel/home';
} else {




}
return $user;
    }
}
