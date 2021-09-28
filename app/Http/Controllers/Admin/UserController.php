<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        $users = DB::table('users')
            ->select('*')
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
            );
            if ($data['password'] != "") {
                $query['password'] = $data['password'];
            }
            DB::table('users')->where('id', $data['id'])->update($query);
            return 'success';
        } catch (\Throwable $th) {
            //throw $th;
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
