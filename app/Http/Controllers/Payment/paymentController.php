<?php

namespace App\Http\Controllers\Payment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class PaymentController extends Controller
{
    public function form_payment(Request $request){

        $status = $request->status;
        return view('payment.home', compact('status'));
    }


    public function payment(Request $request){

        DB::table('student')
        ->where('std_id', $request->std_id)
        ->update([
            'std_level' => $request->std_level,
            'std_status' => $request->std_status,
            'std_first_name' => $request->std_first_name,
            'std_last_name' => $request->std_last_name,
            'std_mobile' => $request->std_mobile,
            'std_email' => $request->std_email,
        ]);

        return redirect('user_home');
    }
}
