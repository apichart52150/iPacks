<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Auth;

class Speaking extends Model {

    public static function querySpeaking($std_id) {

        $speaking = DB::table('speaking')
        ->select('speaking.*','users.username as th_name')
        ->where('std_id','=', $std_id)
        ->leftjoin('users','users.id','=','speaking.th_id')
        ->orderBy('created_at', 'desc')
        ->get();

        return ($speaking);

    } 

    public static function status_speaking_topic($id) {

        $topic = DB::table('speaking')
        ->select('speaking.*','users.username as th_name')
        ->leftjoin('users','users.id','=','speaking.th_id')
        ->where('speaking.id',$id)
        ->get();

        return ($topic);

    }

    public static function getCourse() {
        $courses = DB::table('course')
        ->select('*')
        ->get();
        return $courses;
    }

    public static function decreasePoint() {

        $decrease_point = DB::table('student')
        ->select('std_pointsac', 'std_pointspeaking',DB::raw('CASE WHEN std_pointsac != 0 THEN "std_pointsac" WHEN std_pointspeaking != 0 THEN "std_pointspeaking" ELSE "nopoint" END AS current_point'))
        ->where('std_id', auth('student')->user()->std_id)
        ->get();
      
        if($decrease_point[0]->current_point == 'nopoint') {
            return 0;
        }else {
            DB::table('student')->where('std_id', auth('student')->user()->std_id)->decrement($decrease_point[0]->current_point);
        }
    }

   

}