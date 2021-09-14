<?php

namespace App\Http\Controllers\payment;

use App\Http\Controllers\Controller;
use Auth;
use DB;
use Mail;
use App\Mail\SendMail;
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
        $created_at = str_split(strval($user->created_at),10);

        // // dd(date("Y-m-d", strtotime("+1 month", $created_at)));

        $time = strtotime($created_at[0]);
        $date = date("Y-m-d", strtotime("+1 month", $time));
        $expire_date = $date .$created_at[1];

        return view('payment.send_email', compact('user','expire_date'));
    }

    public function send_email_payment(Request $request)
    {
        $data = array(
            'subject'=>"User Detail",
            'email'=>$request->get('email'),
            'password'=>$request->get('password'),
            'username'=>$request->get('username'),
            'expire_date'=>$request->get('expire_date'),
            'package'=>$request->get('level'),
            'created_at'=>$request->get('created_at'),
        );
        Mail::to($request->get('email'))->send(new SendMail($data));
        DB::update('update users set expire_date = ? where id = ?', [$request->get('expire_date'),$request->get('id')]);
        return redirect('user_home');
    }
}
