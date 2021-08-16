<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Auth;

class Writing extends Model {

	public static function queryWriting($std_id) {

        $writing = DB::table('text_result')
        ->select('text_result.*','users.username as th_name')
        ->where('std_id','=', $std_id)
        ->leftjoin('users','users.id','=','text_result.th_id')
        ->orderBy('sent_date', 'desc')
        ->get();

        return ($writing);

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