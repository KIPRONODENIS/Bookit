<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm(){
    //  session()->put('previousUrl',url()->previous());
      return view('auth.login');
    }

    public function redirectTo(){
        if(\App\User::where('email',request()->email)->first()->user_type=='hotel') {
          return  '/hotel/home';
          
        }elseif(\App\User::where('email',request()->email)->first()->user_type=='admin') {
            return '/admin';
        }
        else {
  return  '/home';
        }

    }
}
