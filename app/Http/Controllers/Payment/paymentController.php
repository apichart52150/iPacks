<?php

namespace App\Http\Controllers\payment;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class paymentController extends Controller
{

    public function payment_form(Request $request)
    {
        $status = $request->status;
        return view('payment.payment_form', compact('status'));
    }

    public function payment_confirm(Request $request)
    {

        $input = $request->all();
        $currentDate = date('M d, Y');

        $selectId = DB::table('ktc_order')
            ->select('*')
            ->where('id', '=', $input['id'])
            ->first();

        if (empty($selectId)) {
            $order_id = DB::table('ktc_order')
                ->latest()
                ->first();
            $run_order = sprintf("%09d", $order_id->order_id + 1);
            DB::table('ktc_order')
                ->insert([
                    'id' => $input['id'],
                    'order_id' => $run_order,
                    'package' => $input['package'],
                    'created_at' => date('Y-m-d H:i:s'),
                ]);
        } else {
            $run_order = sprintf("%09d", $selectId->order_id);
        }

        if ($input['package'] == 'gold') {
            $discount = 1500.00;
        } elseif ($input['package'] == 'platinum') {
            $discount = 3100.00;
        } else {
            $discount = 150.00;
        }

        DB::table('users')
            ->where('id', $input['id'])
            ->update([
                'status' => 'wait',
                'first_name' => $input['first_name'],
                'last_name' => $input['last_name'],
                'email' => $input['email'],
                'address' => $input['address'],
            ]);

        $data = [
            'id' => $input['id'],
            'orderRef' => $run_order,
            'amount' => $input['orderRef'],
            'currentDate' => $currentDate,
            'package' => $input['package'],
            'address' => $input['address'],
            'discount' => $discount,
            'payMethod' => $input['payMethod'],
        ];

        return view('payment.payment_confirm', compact('data'));
    }

    public function payment_success(Request $request)
    {

        DB::table('ktc_order')
            ->where('order_id', '=', $request->Ref)
            ->update([
                'success_code' => '1',
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

        $ref_id = DB::table('ktc_order')
            ->select('success_code')
            ->where('success_code', '=', '1')
            ->count();

        $order_ref = DB::table('ktc_order')
            ->select('*')
            ->where('order_id', '=', $request->Ref)
            ->where('success_code', '=', '1')
            ->first();

        if ($order_ref->success_code == "1") {
            DB::table('ktc_order')
                ->where('order_id', '=', $request->Ref)
                ->update([
                    'order_ref' => sprintf("%09d", $ref_id),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);

            if ($order_ref->package == "gold") {
                $expire_date = date("Y-m-d H:i:s", strtotime("+30 day"));
                DB::table('point')
                    ->insert([
                        'user_id' => $input['id'],
                        'writing_point' => 3,
                        'speaking_point' => 2,
                        'clubs_point' => 0,
                        'tutorial' => 0,
                    ]);
            } else {
                $expire_date = date("Y-m-d H:i:s", strtotime("+44 day"));
                DB::table('point')
                    ->insert([
                        'user_id' => $input['id'],
                        'writing_point' => 5,
                        'speaking_point' => 3,
                        'clubs_point' => 1,
                        'tutorial' => 1,
                    ]);
            }

            DB::table('users')
                ->where('id', $order_ref->id)
                ->update([
                    'status' => 'paid',
                    'level' => $order_ref->package,
                    'expire_date' => $expire_date,
                    'updated_at' => date("Y-m-d H:i:s"),
                ]);

            return redirect('user_home');

        } else {
            return redirect('payment_fail');
        }

        // DB::table('users')->where('id', Auth::id())->update(['remember_token' => $new_sessid]);

        // $data = array(
        //     'subject'=>"Online IELTS Tips & Practice",
        //     'email'=>$request->get('email'),
        //     'password'=>$request->get('password'),
        //     'username'=>$request->get('username'),
        //     'expire_date'=>$request->get('expire_date'),
        //     'package'=>$request->get('level'),
        //     'created_at'=>$request->get('created_at'),
        // );
        // Mail::to($request->get('email'))->send(new SendMail($data));
        // DB::update('update users set expire_date = ? where id = ?', [$request->get('expire_date'),$request->get('id')]);

    }

    public function receipt()
    {

        $currentDate = date('M d, Y');

        $data = [
            'id' => 014,
            'orderRef' => '0000001',
            'orderReceipt' => '0000002',
            'amount' => '6500.00',
            'currentDate' => $currentDate,
            'package' => 'gold',
            'address' => 'Stanley Jones 795 Folsom Ave, Suite 600 San Francisco, CA 94107 P: (123) 456-7890',
        ];

        return view('payment.receipt', compact('data'));
    }

    public function test_send_mail($mail)
    {

        $data = array(
            'subject' => "Online IELTS Tips & Practice",
            'first_name' => "Jakkrit",
            'last_name' => "Ut-sa",
            'expire_date' => date('M d Y', strtotime("15-10-2021")),
            'level' => "gold",
        );
        Mail::to($mail)->send(new SendMail($data));

        $data = array(
            'subject' => "Online IELTS Tips & Practice",
            'first_name' => "Jakkrit",
            'last_name' => "Ut-sa",
            'expire_date' => date('M d Y', strtotime("15-10-2021")),
            'level' => "platinum",
        );
        Mail::to($mail)->send(new SendMail($data));

        dd(":D");

    }

}
