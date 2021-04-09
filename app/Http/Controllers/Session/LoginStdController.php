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
            $check_login = Login::check_login($request->all());

            switch ($check_login['response']) {
                case 'Login success':
                    
                    Session::put('std_id', $check_login['std_id']);
                    Session::put('std_name', $check_login['std_name']);
                    Session::put('std_nickname', $check_login['std_nickname']);
                
                    return response()->json($check_login['response']);
                break;

                case 'user_end_date':

                    Session::put('res', $check_login['response']);
                    Session::put('std_id', $check_login['std_id']);
                    Session::put('std_name', $check_login['std_name']);
                    Session::put('std_nickname', $check_login['std_nickname']);
                    return response()->json($check_login['response']);

                break;

                case 'User not found':
                    return response()->json("Incorrect Username or Password");
                break;

                default:
                    echo "Error: LoginStdController"; die;
                break;
            }

        } else {

            return $validator->errors()->toArray();

        }  
    }

    public function fn_logout() {

        Session::flush();

        return redirect()->route('user_login');

    }

   
}
