<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = '/admin_home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
