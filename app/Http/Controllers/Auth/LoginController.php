<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
    {
        if (Auth::check() && Auth::user()->role_id == 1)
        {
            $this->redirectTo = route('admin.dashboard');
        } else if(Auth::check() && Auth::user()->role_id == 2){
            $this->redirectTo = route('student.home');
        } else if(Auth::check() && Auth::user()->role_id == 4){
            $this->redirectTo = route('provost.dashboard');
        }else if(Auth::check() && Auth::user()->role_id == 5){
            $this->redirectTo = route('accountant.dashboard');
        } else {
             $this->redirectTo = route('head.dashboard');
        }
        $this->middleware('guest')->except('logout');
    }
}
