<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use DB;
use Datetime;
use App\User;
use Session;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        $users = DB::table('users')
            ->select('*')
            ->orderby('created_at','desc')
            ->get();

        return view('admin.user.index', compact('users'));
    }

    public function edit($id)
    {
        $users = DB::table('users')
            ->select('*')
            ->where('id', '=', $id)
            ->first();
        return view('admin.user.edit', compact('users'));
    }

    public function update_user(Request $request)
    {
        try {
            $data = $request->all();
            $query = array(
                'email' => $data['email'],
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'address' => $data['address'],
                'level' => $data['level'],
                'status' => $data['status'],
            );
            if($data['expire_date'] != ""){
                $query['expire_date'] = new Datetime($data['expire_date'] ." 00:00:00");
            }
            if ($data['password'] != "") {
                $query['password'] = bcrypt($data['password']);
            }
            DB::table('users')->where('id', $data['id'])->update($query);
            return 'success';
        } catch (\Throwable $th) {
            return $th;
            return 'failed';
        }
    }

    public function add()
    {
        return view('admin.user.add');
    }

    public function insert_user(Request $request)
    {
        try {
            $data = $request->all();

            $user_id =  User::create([
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
            ])->id;

            $order_id = DB::table('ktc_order')->latest()->first();
                $run_order = sprintf("%09d", $order_id->order_id + 1);

                DB::table('ktc_order')->insert([
                    'id' => $user_id,
                    'order_id' => $run_order,
                    'success_code' => 0,
                    'created_at' => new Datetime(),
                    'remark' => 'IDP',
                ]);

                $new_sessid = csrf_token();
                session::put('ss_id', $new_sessid);
                $query = array(
                    'first_name' => $data['first_name'],
                    'last_name' => $data['last_name'],
                    'address' => $data['address'],
                    'level' => $data['level'],
                    'status' => $data['status'],
                    'remember_token' => $new_sessid,
                );
            if($data['expire_date'] != ""){
                $query['expire_date'] = new Datetime($data['expire_date'] ." 00:00:00");
            }
                DB::table('users')->where('id','=', $user_id)->update($query);
               
                $point = DB::table('point')
                    ->select('user_id')
                    ->where('user_id', '=', $user_id)
                    ->first();
                if (empty($point->user_id)) {
                    DB::table('point')
                        ->insert([
                            'user_id' => $user_id,
                            'writing_point' => 0,
                            'speaking_point' => 0,
                            'club_point' => 0,
                            'tutorial_point' => 0,
                        ]);
                    return 'success';
                } else {
                    return 'success';
                }
        } catch (\Throwable $th) {
            return $th;
            return 'failed';
        }
    }

    public function remove_user(Request $request)
    {
        try {
            $data = $request->all();
            DB::table('users')->where('id', '=', $data['id'])->delete();
            return 'success';
        } catch (\Throwable $th) {
            //throw $th;
            return 'failed';
        }
    }
}
