<?php

namespace App\Http\Controllers\Admin\payment;

use App\Http\Controllers\Controller;
use App\Model\KTC;
use Auth;
use Datetime;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($data_search)
    {
        $pag = 10;
        $ktc = KTC::data_list($pag,$data_search);
        // dd($ktc);
        return view('admin.payment.index', compact('ktc', 'pag','data_search'));
    }

    public function edit_data(Request $request)
    {
        try {
            $input = $request->all();
            $id = $input['id'];
            $status = $input['status'];
            $remark = $input['remark'];
            $pay_type = $input['pay_type'];
            $level = $input['level'];

            $data_user = array(
                'updated_at' => new Datetime(),
                'updated_by' => Auth::id(),
            );

            $data_ktc = array(
                'remark' => $remark,
                'updated_at' => new Datetime(),
                'updated_by' => Auth::id(),
            );

            if ($status == 1) {
                $ktc_order = DB::table('ktc_order')->where('order_ref', '!=', '')->get();
                $ktc_order_user = DB::table('ktc_order')->where('id', '=', $id)->first();
                if ($ktc_order_user->order_ref == '') {
                    $data_ktc['order_ref'] = sprintf("%09d", $ktc_order->count() + 1);
                }
                $data_user['level'] = $level;
                if($status == 1){
                    $data_user['status'] = 'paid';
                }else{
                    $data_user['status'] = '';
                }
                $data_ktc['package'] = $level;
                $data_ktc['success_code'] = 1;
                $data_ktc['pay_type'] = $pay_type;
                DB::table('users')->where('id', '=', $id)->update($data_user);
                DB::table('ktc_order')->where('id', '=', $id)->update($data_ktc);
            } else if ($status == 0) {
                $data_user['level'] = '';
                $data_user['status'] = '';
                $data_ktc['package'] = '';
                $data_ktc['success_code'] = 0;
                $data_ktc['pay_type'] = '';
                DB::table('users')->where('id', '=', $id)->update($data_user);
                DB::table('ktc_order')->where('id', '=', $id)->update($data_ktc);
            }
            return 'success';
        } catch (\Throwable $th) {
            // return $th;
            return 'failed';
        }
    }

    public function delete($id)
    {

    }
}
