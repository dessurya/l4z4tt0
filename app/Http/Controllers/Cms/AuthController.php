<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class AuthController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = RouteServiceProvider::HOME;
    
	public function __construct()
    {
        $this->middleware('guest')->except('signout');
    }

    public function redirectLogin() { return redirect()->route('cms.login'); }

    public function login()
    {
        if (auth()->guard('user')->check()) {
            return redirect()->route('cms.dashboard');
        }
        return view('cms.login');
    }

    public function signin(Request $Request)
    {
        if (Auth::guard('user')->attempt(['email' => $Request->email, 'password' => $Request->password ])){
            return redirect()->route('cms.dashboard');
        }
        else{
            return redirect()->back()->with('status', 'Sorry not found your account or please check your password');
        }
    }

    public function signout(Request $Request)
    {
        auth()->guard('user')->logout();
        return redirect()->route('cms.login');
    }
}
