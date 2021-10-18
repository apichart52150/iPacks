<?php

namespace App\Model;

use DB;
use Illuminate\Database\Eloquent\Model;

class KTC extends Model
{
    public static function data_list($pag, $data)
    {
        $data_arr = explode("__",$data);
        $search_status = 'LIKE';
        for($i=0;$i<count($data_arr);$i++){
            if($i==2){
                if($data_arr[$i] == 'wait'){
                    $search_status = '=';
                    $data_arr[$i] = 0;
                }
                
                if($data_arr[$i] == 'all'){
                    $data_arr[$i] = '';
                }
            }else{
                if($data_arr[$i] == 'all'){
                    $data_arr[$i] = '';
                }
            }
        }
        // $ktc_order
        $ktc_order = DB::table('ktc_order')
            ->select('ktc_order.id', 'ktc_order.order_id', 'ktc_order.package', 'ktc_order.success_code', 'ktc_order.remark', 'ktc_order.pay_type', 'ktc_order.order_ref', 'ktc_order.created_at', 'users.first_name', 'users.last_name', 'users.status', 'users.email', 'users.address')
            ->leftjoin('users', 'ktc_order.id', '=', 'users.id')
            ->where('pay_type','LIKE', '%'.$data_arr[0].'%')
            ->where('remark','LIKE','%'.$data_arr[1].'%')
            ->where('success_code',$search_status,'%'.$data_arr[2].'%')
            ->where('first_name','LIKE','%'.$data_arr[3].'%')
            ->orderBy('ktc_order.created_at', 'desc')
            ->paginate($pag);
        // return $data_arr;
        return ($ktc_order);
    }

    public static function get_data_ktc($id)
    {
        $ktc_order = DB::table('ktc_order')
            ->select('order_id', 'order_ref', 'pay_type')
        // ->leftjoin('users', 'ktc_order.id', '=', 'users.id')
            ->where('id', '=', $id)
            ->first();
        return ($ktc_order);
    }
}
