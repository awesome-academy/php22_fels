<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Session;

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
    protected $redirectTo = 'home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function getLogin()
    {
        return view('Auth.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $credentials = array('email' => $request->email, 'password' => $request->password);
        if(Auth::attempt($credentials))
        {
            return redirect()->back()->with(['flag'=> 'success', 'message' => 'Login Success']);
        }
        else{
            return redirect()->back()->with(['flag' => 'danger', 'message' => 'Login Fail']);
        }
    }
}
