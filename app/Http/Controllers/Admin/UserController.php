<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Datetime;
use DB;
use Illuminate\Http\Request;
use Session;

class UserController extends Controller
{
    public function index()
    {

        $users = DB::table('users')
            ->select('*')
            ->orderby('created_at', 'desc')
            ->get();

        return view('admin.user.index', compact('users'));
    }

    public function edit($id)
    {
        $users = DB::table('users')
            ->select('users.id', 'users.email', 'users.first_name', 'users.last_name', 'users.address', 'users.level', 'users.status', 'users.expire_date', 'ktc_order.remark', 'ktc_order.pay_type')
            ->leftjoin('ktc_order', 'ktc_order.id', '=', 'users.id')
            ->where('users.id', '=', $id)
            ->first();
        return view('admin.user.edit', compact('users'));
    }

    public function update_user(Request $request)
    {
        try {
            $data = $request->all();
            $input_email = $data['email'];
            $input_password = $data['password'];
            $input_first_name = $data['first_name'];
            $input_last_name = $data['last_name'];
            $input_address = $data['address'];
            $input_status = $data['status'];
            $input_remark = $data['remark'];
            $input_expire_date = $data['expire_date'];
            $input_level = '';
            $input_pay_type = '';

            // return date('Y-m-d',strtotime($input_expire_date)) .' ' .date('H:i:s');

            $user = DB::table('users')->select('expire_date', 'level')->where('id', $data['id'])->first();

            $data_user = array(
                'email' => $input_email,
                'first_name' => $input_first_name,
                'last_name' => $input_last_name,
                'address' => $input_address,
                'status' => $input_status,
                'expire_date' => date('Y-m-d', strtotime($input_expire_date)) . ' ' . date('H:i:s', strtotime($user->expire_date)),
                'updated_at' => new Datetime(),
                'updated_by' => Auth::id(),
            );

            $data_ktc = array(
                'remark' => $input_remark,
                'updated_at' => new Datetime(),
                'updated_by' => Auth::id(),
            );

            if ($data['password'] != "") {
                $data_user['password'] = bcrypt($data['password']);
            }
            if ($input_status == 'paid') {
                $input_level = $data['level'];
                $input_pay_type = $data['pay_type'];
                $data_user['level'] = $input_level;
                $data_ktc['package'] = $input_level;
                $data_ktc['pay_type'] = $input_pay_type;
                $data_ktc['success_code'] = '1';

                if ($user->level != $input_level) {

                    $ktc_order = DB::table('ktc_order')->where('order_ref','!=','')->get();
                    $ktc_order_user = DB::table('ktc_order')->where('id','=',$data['id'])->first();
                    
                    if($ktc_order_user->order_ref == ''){
                        $data_ktc['order_ref'] = sprintf("%09d", $ktc_order->count() + 1);
                    }

                    if ($input_level == 'gold') {
                        $data_user['expire_date'] = date("Y-m-d H:i:s", strtotime("+30 day"));
                        DB::table('point')
                            ->where('user_id', '=', $data['id'])
                            ->update([
                                'writing_point' => 3,
                                'speaking_point' => 2,
                                'club_point' => 0,
                                'tutorial_point' => 0,
                            ]);
                    } else if ($input_level == 'platinum') {
                        $data_user['expire_date'] = date("Y-m-d H:i:s", strtotime("+44 day"));
                        DB::table('point')
                            ->where('user_id', '=', $data['id'])
                            ->update([
                                'writing_point' => 5,
                                'speaking_point' => 3,
                                'club_point' => 1,
                                'tutorial_point' => 1,
                            ]);
                    }
                } 

            } else {
                $data_user['level'] = '';
                $data_ktc['package'] = '';
                $data_ktc['pay_type'] = '';
                $data_ktc['success_code'] = '0';
                DB::table('point')
                    ->where('user_id', '=', $data['id'])
                    ->update([
                        'writing_point' => 0,
                        'speaking_point' => 0,
                        'club_point' => 0,
                        'tutorial_point' => 0,
                    ]);
            }

            DB::table('users')->where('id', $data['id'])->update($data_user);

            // $ktc_order_count = DB::table('ktc_order')
            //     ->select('success_code')
            //     ->where('success_code', '=', '1')
            //     ->count();
            // $data_ktc['order_ref'] = sprintf("%09d", $ktc_order_count);
            DB::table('ktc_order')->where('id', $data['id'])->update($data_ktc);
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
            $input_email = $data['email'];
            $input_password = $data['password'];
            $input_first_name = $data['first_name'];
            $input_last_name = $data['last_name'];
            $input_address = $data['address'];
            $input_status = $data['status'];
            $input_remark = $data['remark'];
            $input_level = '';
            $input_pay_type = '';

            if ($input_status == 'paid') {
                $input_level = $data['level'];
                $input_pay_type = $data['pay_type'];

                $user_id = User::create([
                    'email' => $input_email,
                    'password' => bcrypt($input_password),
                ])->id;

                $expire_date = date("Y-m-d H:i:s");
                if ($input_level == 'gold') {
                    $expire_date = date("Y-m-d H:i:s", strtotime("+30 day"));
                    DB::table('point')
                        ->insert([
                            'user_id' => $user_id,
                            'writing_point' => 3,
                            'speaking_point' => 2,
                            'club_point' => 0,
                            'tutorial_point' => 0,
                        ]);
                } else if ($input_level == 'platinum') {
                    $expire_date = date("Y-m-d H:i:s", strtotime("+44 day"));
                    DB::table('point')
                        ->insert([
                            'user_id' => $user_id,
                            'writing_point' => 5,
                            'speaking_point' => 3,
                            'club_point' => 1,
                            'tutorial_point' => 1,
                        ]);
                }

                $new_sessid = csrf_token();
                session::put('ss_id', $new_sessid);
                DB::table('users')->where('id', $user_id)->update([
                    'first_name' => $input_first_name,
                    'last_name' => $input_last_name,
                    'address' => $input_address,
                    'level' => $input_level,
                    'status' => $input_status,
                    'expire_date' => $expire_date,
                    'remember_token' => $new_sessid,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'created_by' => Auth::id(),
                    'updated_by' => Auth::id(),
                ]);

                $ktc_order_count = DB::table('ktc_order')
                    ->select('order_ref')
                    ->where('order_ref', '!=', '')
                    ->count();
                $order_id = DB::table('ktc_order')->latest()->first();
                $run_order_id = sprintf("%09d", $order_id->order_id + 1);

                DB::table('ktc_order')
                    ->insert([
                        'id' => $user_id,
                        'package' => $input_level,
                        'order_id' => $run_order_id,
                        'success_code' => '1',
                        'remark' => $input_remark,
                        'pay_type' => $input_pay_type,
                        'order_ref' => sprintf("%09d", $ktc_order_count + 1),
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'),
                        'created_by' => Auth::id(),
                        'updated_by' => Auth::id(),
                    ]);
                return 'success';
            } else {
                $user_id = User::create([
                    'email' => $input_email,
                    'password' => bcrypt($input_password),
                ])->id;

                $new_sessid = csrf_token();
                session::put('ss_id', $new_sessid);
                DB::table('users')->where('id', $user_id)->update([
                    'first_name' => $input_first_name,
                    'last_name' => $input_last_name,
                    'address' => $input_address,
                    'expire_date' => date("Y-m-d H:i:s", strtotime("+7 day")),
                    'created_by' => Auth::id(),
                    'updated_by' => Auth::id(),
                    'remember_token' => $new_sessid,
                ]);

                $order_id = DB::table('ktc_order')->latest()->first();
                $run_order = sprintf("%09d", $order_id->order_id + 1);

                DB::table('ktc_order')->insert([
                    'id' => $user_id,
                    'order_id' => $run_order,
                    'success_code' => 0,
                    'created_at' => new Datetime(),
                    'remark' => $input_remark,
                    'created_by' => Auth::id(),
                    'updated_by' => Auth::id(),
                ]);

                DB::table('point')
                    ->insert([
                        'user_id' => $user_id,
                        'writing_point' => 0,
                        'speaking_point' => 0,
                        'club_point' => 0,
                        'tutorial_point' => 0,
                    ]);
                return 'success';
            }

            return $data;
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
            DB::table('point')->where('user_id', '=', $data['id'])->delete();
            return 'success';
        } catch (\Throwable $th) {
            //throw $th;
            return 'failed';
        }
    }
}
