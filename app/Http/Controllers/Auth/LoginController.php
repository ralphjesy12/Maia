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

    /**
    * Handle an authentication attempt.
    *
    * @return Response
    */

    public function username()
    {
        return 'username';
    }

    public function authenticate(Request $request)
    {
        if (
            Auth::attempt(['username' => $username, 'password' => $password])
        ) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
    }
}
