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

    protected $redirectTo = '/';
   

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

                return redirect('wait', compact('status'));

            }elseif($status == 'expire'){

                return redirect('expire', compact('status'));

            }else{

                return redirect('/');

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

            return back()->with('status', 'Username* นี้มีในระบบแล้ว ไม่สามารถสร้างซ้อนทับได้');

        }
    }

    public function user_logout() {
        Auth::guard('student')->logout();
        return redirect()->route('user_login');
    }

   
}
