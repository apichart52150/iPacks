<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Session;
use DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/user_home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
     
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request) {
        
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        $new_sessid = csrf_token(); 

        if(auth()->attempt(array('email'=> $input['email'], 'password' => $input['password']))){
            
            session::put('ss_id', $new_sessid);
            DB::table('users')->where('id', Auth::id())->update(['remember_token' => $new_sessid]);

            $point = DB::table('point')
            ->select('user_id')
            ->where('user_id', '=', auth()->user('web')->id)
            ->first();

            if(empty($point->user_id)){
                DB::table('point')
                ->insert([
                    'user_id' => Auth::user('web')->id,
                    'writing_point' => 0,
                    'speaking_point' => 0,
                    'club_point' => 0,
                    'tutorial_point' => 0,
                ]);
                return redirect()->route('user_home');
            }else{
                return redirect()->route('user_home');
            }
        }else{

            return redirect()->route('login')->with('error', 'Email or Password are wrong.');

        }
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('login');
    }
}
