<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;
use DB;
use Validator;
use Session;
use App\Model\Login;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginAdminController extends Controller
{
    
    use AuthenticatesUsers;

    protected $redirectTo = 'admin_home';
   
    public function admin_login() {
        return view('admin.login');
    }

    public function _login(Request $request) {

        // dd($request->password);

        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);

        if($validator->fails()) {
            return redirect('admin_login')
            ->withErrors($validator)
            ->withInput();
        }

        $staff = Login::where('staff_username', $request->username)
        ->where('staff_password', md5($request->password))
        ->first();


        if($staff) {
            Auth::guard('staff')->login($staff);
            return redirect('admin_home');

        } else {
            return back()->with('status', 'Username or Password do not match');
        }

    }


    public function admin_logout() {
        Auth::guard('staff')->logout();
        Session::flush();
        return redirect('admin_login');
    }

   
}
