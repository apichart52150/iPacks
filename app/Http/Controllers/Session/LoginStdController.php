<?php

namespace App\Http\Controllers\Session;

use App\Http\Controllers\Controller;
use Auth;
use Validator;
use App\Model\Login;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

            $gard = Auth::guard('student')->login($student);

            // dd($gard);

            return redirect('/user_home');
        } else {
            return back()->with('status', 'Username or password do not match');
        }
    }

    public function fn_logout() {

        Auth::logout();
        return redirect()->route('user_login');

    }

   
}
