<?php

namespace App\Http\Controllers\payment;

use App\Http\Controllers\Controller;
use Auth;
use DB;
use Illuminate\Http\Request;

class paymentController extends Controller
{

    public function form_payment(Request $request)
    {
        $status = $request->status;
        return view('payment.home', compact('status'));
    }

    public function payment(Request $request)
    {

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

        return redirect('check_data_payment');
    }

    public function check_data_payment()
    {
        $user = Auth::user();
        // $created_at = new DateTime(str_split(strval($user->created_at),10)[0]);

        // dd(date("Y-m-d", strtotime("+1 month", $created_at)));
        return view('payment.send_email', compact('user'));
    }

    public function send_email_payment(Request $request)
    {
        $to = "metre80.x@gmail.com";
        $subject = "test";
        $message = "data";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers. From is required, rest other headers are optional
        $headers .= 'From: jakkrit.utsa@gmail.com>' . "\r\n";
        $headers .= 'Cc: sales@gmail.com' . "\r\n";
        mail($to, $subject, $message, $header);
    }
}
