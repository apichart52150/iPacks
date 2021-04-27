<?php

namespace App\Http\Controllers\Session;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Session;
use App\Model\Login;
use App\Model\Speaking;
use DB;
use Validator;

class LoginStdController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = '/user_home';
   

    public function index() {
        return view('session.login');
    }

    public function fn_login(Request $request) {

        $username = $request->username;
        $password = $request->password;

        $data = $request->all();
        $rules = ['username' => 'required', 'password' => 'required'];

        $validator = Validator::make($data, $rules);

        if($validator->passes()) {

            $student = Login::where('std_username', $request->username)
            ->where('std_password', md5($request->password))
            ->first();

            if($student) {
                Auth::guard('student')->login($student);
    
                Log::create([
                    'std_id' => Auth::guard('student')->user()->std_id,
                    'browser' => $browser
                ]);

                Session::put('std_id', $check_login['std_id']);
                Session::put('std_name', $check_login['std_name']);
                Session::put('std_nickname', $check_login['std_nickname']);
    
                return redirect('/home');
            } else {
                return back()->with('status', 'Username or password do not match');
            }
        }
    }

    public function fn_logout() {

        Session::flush();

        return redirect()->route('user_login');

    }

   
}
