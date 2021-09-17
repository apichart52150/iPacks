<?php

namespace App\Http\Controllers\payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class paymentController extends Controller
{

    public function payment_form(Request $request){
        $status = $request->status;
        return view('payment.payment_form', compact('status'));
    }


    public function payment_confirm(Request $request){

        $input = $request->all();

        $rs_u = DB::table('ktc_order')
        ->select('*')
        ->where('id','=', $input['id'])
        ->orderBy('id', 'desc')
        ->limit(1)
        ->get();

        $currentDate = date('M d, Y');

        $id = $rs_u[0]->id; 
        $id_order = sprintf("%09d",$id+1);

        $randomId = rand(10,100000);

        $data = [
           'id' =>  $input['id'],
           'orderRef' => $randomId,
           'amount' => $input['orderRef'],
           'currentDate' => $currentDate,
           'package' => $input['package'],
           'address' => $input['address'],

        ];

        return view('payment.payment_confirm', compact('data'));
    }

}
