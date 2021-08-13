<?php

namespace App\Http\Controllers\Session;

use App\Http\Controllers\Controller;
use Auth;
use DB;
use Validator;
use App\Model\Login;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginStdController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = 'user_home';
   

    public function login() {
        return view('session.login');
    }
    

    public function fn_login(Request $request) {

        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);

        if($validator->fails()) {
            return redirect('user_login')
                ->withErrors($validator)
                ->withInput();
        }

        $student = Login::where('std_username', $request->username)
        ->where('std_password', md5($request->password))
        ->first();

        if($student) {

            Auth::guard('student')->login($student);

            $status = Auth::guard('student')->user()->std_status;

            if($status == 'wait'){

                return redirect('success')->with('status', 'Welcome!');

            }elseif($status == 'expire'){

                return redirect('success')->with('status', 'Your package is expire');

            }else{

                return redirect('user_home');

            }

        } else {
            return back()->with('status', 'Username or Password do not match');
        }

    }


    public function register() {
        return view('session.register');
    }


    public function fn_register(Request $request){

        $student = DB::table('student')
        ->select('std_username')
        ->where('std_username', '=', $request->username)
        ->get();

        if(count($student) == 0){

            DB::table('student')->insert([
                'std_username' => $request->username, 
                'std_password' => md5($request->password), 
            ]);

            $validator = Validator::make($request->all(), [
                'username' => 'required',
                'password' => 'required'
            ]);
    
            if($validator->fails()) {
                return redirect('user_login')
                ->withErrors($validator)
                ->withInput();
            }
    
            $student = Login::where('std_username', $request->username)
            ->where('std_password', md5($request->password))
            ->first();
    
            Auth::guard('student')->login($student);

            return redirect('success');

        }else{

            return back()->with('status', 'Username* is already have');

        }
    }

    public function user_logout() {
        Auth::guard('student')->logout();
        return redirect('user_login');
    }

   
}
