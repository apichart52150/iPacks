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

        $username = $request->username;
        $password = $request->password;

        $data = $request->all();
        $rules = ['username' => 'required', 'password' => 'required'];

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

        // dd($student);

        if($student) {
            Auth::guard('student')->login($student);
            return redirect('user_home');
        } else {
            return back()->with('status', 'Username or password do not match');
        }
    }


    public function register() {
        return view('session.register');
    }


    public function fn_register(Request $request){

        $student = DB::table('student')
        ->select('std_username')
        ->where('std_username', '=', $request->std_username)
        ->get();

        $row_student = count($student);

        if($row_student == 0){

            DB::table('student')->insert([
                'std_username' => $request->username, 
                'std_password' => md5($request->password), 
            ]);
        
            session()->flash('success_ans','<div class="alert alert-success" role="alert">
            <i class="fas fa-check-circle mr-2"></i><strong>Add Student Success</strong></div>'); 

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
    
            // dd($student);
    
            if($student) {
                Auth::guard('student')->login($student);
                return redirect('success');
            } else {
                return back()->with('status', 'Username or password do not match');
            }

        }else{
            session()->flash('error_ans','<div class="alert alert-danger" role="alert">
            <i class="far fa-window-close mr-2"></i><strong>Username* นี้มีในระบบแล้ว ไม่สามารถสร้างซ้อนทับได้</strong></div>');
            return redirect('user_register');
        }
    }

    public function user_logout() {
        Auth::guard('student')->logout();
        return redirect()->route('user_login');
    }

   
}
