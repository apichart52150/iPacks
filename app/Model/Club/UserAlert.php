<?php

namespace App\Model\Club;

use Illuminate\Database\Eloquent\Model;
use Auth;
use DB;
use Session;

class UserAlert extends Model
{
    public static function getUserAlert() {

        $alerts = DB::table('alert_app')
            ->select('id', 'content', 'status', 'std_id')
            ->where('std_id',  Session::get('std_id'))
            ->get();

        foreach ($alerts as $key => $alert) {
            $response = [
                'student_id' => $alert->std_id,
                'content' => $alert->content,
                'status' => $alert->status
            ];

            return $response;
        }

    }

    public static function updateStatus() {

        $update_status = DB::table('alert_app')
            ->where('std_id', auth('student')->user()->std_id)
            ->update(['status' => '0']);

        if($update_status) {
            return ['msg' => 'Success', 'code' => 200];
        } else {
            return ['msg' => 'Failed', 'code' => 500];
        }
    }
}
