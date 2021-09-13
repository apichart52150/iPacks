<?php

namespace App\Http\Controllers\Session;

use App\Http\Controllers\Controller;
use Auth;
use DB;
use Validator;
use Session;
use App\Model\Login;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginStdController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = 'home';

    public function __construct()
    {
        $this->middleware('student')->except('logout');
    }
   

    public function login() {
        return view('session.login');
    }
    

    public function fn_login(Request $request) {
        

        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);


        if($validator->fails()) {
            return redirect('user_login')
            ->withErrors($validator)
            ->withInput();
        }

        $student = Login::where('std_email', $request->email)
        ->where('std_password', md5($request->password))
        ->first();


        if($student) {

            $new_sessid = Session::getId(); 

            session::put('ss_id',$new_sessid);

            DB::table('student')->where('std_id', $student->std_id)->update(['session_id' => $new_sessid]);
            
            Auth::guard('student')->login($student);

            $status = Auth::guard('student')->user()->std_status;

            if($status == 'wait'){

                return redirect('success')->with('status', 'Welcome!');

            }elseif($status == 'expire'){

                return redirect('expire');

            }else{

                return redirect('home');

            }

        } else {
            return back()->with('status', 'Email or Password do not match');
        }

    }


    public function register() {
        return view('session.register');
    }


    public function fn_register(Request $request){

        $student = DB::table('student')
        ->select('std_username')
        ->where('std_email', '=', $request->email)
        ->get();

        if(count($student) == 0){

            DB::table('student')->insert([
                'std_email' => $request->email, 
                'std_password' => md5($request->password), 
            ]);

            $validator = Validator::make($request->all(), [
                'email' => 'required|string|email|max:255',
                'password' => 'required|string|min:6|confirmed',
            ]);
    
            if($validator->fails()) {
                return redirect('user_login')
                ->withErrors($validator)
                ->withInput();
            }
    
            $student = Login::where('std_email', $request->email)
            ->where('std_password', md5($request->password))
            ->first();
    
            Auth::guard('student')->login($student);

            return redirect('success')->with('status', 'Register success');;

        }else{

            return back()->with('status', 'Email* is already taken');

        }
    }

    public function user_logout() {
        Auth::guard('student')->logout();
        Session::flush();
        return redirect()->to('user_login');
    }

   
}
