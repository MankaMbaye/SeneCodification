<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = 'admin/home';


    public function showLoginForm(){

        return view('admin.login');
    }

    public function login(Request $request)
    {

        $this->validate($request,[

            'email' => 'required|email',
            'password' => 'required|min:6'

        ]);

        if (Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember))
            {
                return redirect()->intented(route('admin.home'));
            }

            return redirect()->back()->withInput($request->only('email','remember'));
    }

   
    
}
