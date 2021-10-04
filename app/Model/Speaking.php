<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Auth;

class Speaking extends Model {

    public static function querySpeaking($std_id) {

        $speaking = DB::table('speaking')
        ->select('speaking.*','staff.staff_username as th_name')
        ->where('std_id','=', $std_id)
        ->leftjoin('staff','staff.staff_id','=','speaking.th_id')
        ->orderBy('created_at', 'desc')
        ->get();

        return ($speaking);

    } 

    public static function status_speaking_topic($id) {

        $topic = DB::table('speaking')
        ->select('speaking.*','staff.staff_username as th_name')
        ->leftjoin('staff','staff.staff_id','=','speaking.th_id')
        ->where('speaking.id',$id)
        ->get();

        return ($topic);

    }

}