<?php

namespace App\Http\Controllers\payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class paymentController extends Controller
{

    public function form_payment(Request $request){
        $status = $request->status;
        return view('payment.home', compact('status'));
    }


    public function payment(Request $request){

        DB::table('users')
        ->where('id', $request->id)
        ->update([
            'level' => $request->level,
            'status' => $request->status,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'mobile' => $request->mobile,
            'email' => $request->email,
        ]);

        return redirect('user_home');
    }
}
