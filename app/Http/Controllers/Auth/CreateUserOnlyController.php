<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\User;
use Datetime;

class CreateUserOnlyController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index(){
        return view('auth.create-user-only');
    }

    public function create(Request $request){
        try {
            $input = $request->all();
            $check_mail_in_database = DB::table('users')->where('email','=',$input['email'])->get();
            if(count($check_mail_in_database) == 0){
                User::create([
                    'email' => $input['email'],
                    'password' => bcrypt($input['password']),
                ]);
                Auth::attempt(array('email' => $input['email'] , 'password' => $input['password']));
                
                $order_id = DB::table('ktc_order')->latest()->first();
                $run_order = sprintf("%09d", $order_id->order_id + 1);
                // return $run_order;
                DB::table('ktc_order')->insert([
                    'id' => Auth::user()->id,
                    'order_id' => $run_order,
                    'success_code' => 0,
                    'created_at' => new Datetime(),
                    'remark' => 'IDP',
                ]);
                return 'success';
                // }
            }else{
                return 'already been taken';
            }
        } catch (\Throwable $th) {
            return $th;
            return 'failed';
        }
    }
}
