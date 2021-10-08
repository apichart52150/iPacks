<?php

namespace App\Model;

use DB;
use Illuminate\Database\Eloquent\Model;

class KTC extends Model
{
    public static function data_list($pag)
    {
        $ktc_order = DB::table('ktc_order')
            ->select('ktc_order.id', 'ktc_order.order_id', 'ktc_order.success_code', 'ktc_order.remark', 'ktc_order.pay_type', 'ktc_order.order_ref', 'ktc_order.created_at', 'users.first_name', 'users.last_name', 'users.status', 'users.email', 'users.address')
            ->leftjoin('users', 'ktc_order.id', '=', 'users.id')
            ->orderBy('ktc_order.created_at', 'desc')
            ->paginate($pag);
        return ($ktc_order);
    }

    public static function get_data_ktc($id)
    {
        $ktc_order = DB::table('ktc_order')
            ->select('order_id', 'order_ref')
        // ->leftjoin('users', 'ktc_order.id', '=', 'users.id')
            ->where('id', '=', $id)
            ->first();
        return ($ktc_order);
    }
}
