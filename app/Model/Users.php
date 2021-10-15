<?php

namespace App\Model;

use DB;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public static function data_list($pag, $data)
    {
        $data_arr = explode("__", $data);
        $search_status = 'LIKE';
        for ($i = 0; $i < count($data_arr); $i++) {
            if ($data_arr[$i] == 'wait') {
                $data_arr[$i] = '';
                $search_status = '=';
            } else if ($data_arr[$i] == 'paid') {
                $data_arr[$i] = 'paid';
                $search_status = '=';
            } else if ($data_arr[$i] == 'all') {
                $data_arr[$i] = '%%';
            }else{
                $data_arr[$i] = '%' . $data_arr[$i] . '%';
            }
        }
        // return ($data_arr);

        $user = DB::table('users')
            ->select('id', 'first_name', 'last_name', 'status', 'email', 'address', 'expire_date')
            ->where('email', 'LIKE', $data_arr[0])
            ->where('first_name', 'LIKE', $data_arr[1])
            ->where('status', $search_status, $data_arr[2])
            ->orderBy('created_at', 'desc')
            ->paginate($pag);
        // return $data_arr;
        return ($user);
    }
}
