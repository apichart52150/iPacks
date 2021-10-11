<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Datetime;
use DB;
use Illuminate\Http\Request;
use Session;

class CreateUserOnlyController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('auth.create-user-only');
    }

    public function create(Request $request)
    {
        try {
            $input = $request->all();
            $check_mail_in_database = DB::table('users')->where('email', '=', $input['email'])->get();
            if (count($check_mail_in_database) == 0) {
                User::create([
                    'email' => $input['email'],
                    'password' => bcrypt($input['password']),
                ]);

                Auth::attempt(array('email' => $input['email'], 'password' => $input['password']));

                $order_id = DB::table('ktc_order')->latest()->first();
                $run_order = sprintf("%09d", $order_id->order_id + 1);

                DB::table('ktc_order')->insert([
                    'id' => Auth::user()->id,
                    'order_id' => $run_order,
                    'success_code' => 0,
                    'created_at' => new Datetime(),
                    'remark' => 'IDP',
                ]);

                $new_sessid = csrf_token();
                session::put('ss_id', $new_sessid);
                DB::table('users')->where('id', Auth::id())->update(['remember_token' => $new_sessid, 'expire_date' => date("Y-m-d H:i:s", strtotime("+7 day"))]);
                $point = DB::table('point')
                    ->select('user_id')
                    ->where('user_id', '=', Auth::user()->id)
                    ->first();
                if (empty($point->user_id)) {
                    DB::table('point')
                        ->insert([
                            'user_id' => Auth::user()->id,
                            'writing_point' => 0,
                            'speaking_point' => 0,
                            'club_point' => 0,
                            'tutorial_point' => 0,
                        ]);
                    return 'success';
                } else {
                    return 'success';
                }
                // }
            } else {
                return 'already been taken';
            }
        } catch (\Throwable $th) {
            return $th;
            return 'failed';
        }
    }


    public function nc_student()
    {
        return view('auth.create-user-nc-student');
    }

    public function createForNcStudent(Request $request)
    {
        try {
            $input = $request->all();
            $check_mail_in_database = DB::table('users')->where('email', '=', $input['email'])->get();
            if (count($check_mail_in_database) == 0) {
                User::create([
                    'email' => $input['email'],
                    'password' => bcrypt($input['password']),
                ]);

                Auth::attempt(array('email' => $input['email'], 'password' => $input['password']));

                $order_id = DB::table('ktc_order')->latest()->first();
                $run_order = sprintf("%09d", $order_id->order_id + 1);

                DB::table('ktc_order')->insert([
                    'id' => Auth::user()->id,
                    'order_id' => $run_order,
                    'success_code' => 0,
                    'created_at' => new Datetime(),
                    'remark' => 'student',
                ]);

                $new_sessid = csrf_token();
                session::put('ss_id', $new_sessid);
                DB::table('users')->where('id', Auth::id())->update(['remember_token' => $new_sessid, 'expire_date' => date("Y-m-d H:i:s", strtotime("+7 day"))]);
                $point = DB::table('point')
                    ->select('user_id')
                    ->where('user_id', '=', Auth::user()->id)
                    ->first();
                if (empty($point->user_id)) {
                    DB::table('point')
                        ->insert([
                            'user_id' => Auth::user()->id,
                            'writing_point' => 0,
                            'speaking_point' => 0,
                            'club_point' => 0,
                            'tutorial_point' => 0,
                        ]);
                    return 'success';
                } else {
                    return 'success';
                }
                // }
            } else {
                return 'already been taken';
            }
        } catch (\Throwable $th) {
            return $th;
            return 'failed';
        }
    }
}
