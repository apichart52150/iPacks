<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Auth;
use DB;

class Points extends Model
{
    public static function getInfo() {
        return DB::table('student')
        ->select('*')
        ->where('std_id', auth('student')->user()->std_id)
        ->get()[0];
    }


    public static function bonusPoint() {

        $info = Points::getInfo();

        $current_point =  DB::table('student')
        ->select('std_bonus')
        ->where('std_id', auth('student')->user()->std_id)
        ->get()[0]->std_bonus;


        return $current_point;

    }

    public static function decreasePoint() {
        
        $info = Points::getInfo();

        if($info->coursetype == 'online') {

            $decrease_point = DB::table('student')
                ->select('std_pointsac', 'std_pointspeaking',DB::raw('CASE WHEN std_pointsac != 0 THEN "std_pointsac" WHEN std_pointspeaking != 0 THEN "std_pointspeaking" ELSE "nopoint" END AS current_point'))
                ->where('std_id', auth('student')->user()->std_id)
                ->get();
            
            if($decrease_point[0]->current_point == 'nopoint') {
                return 0;
            } else {
                DB::table('student')->where('std_id', auth('student')->user()->std_id)->decrement($decrease_point[0]->current_point);
            }

        } else {

            if($info->std_pointsac !== 0) {
                $decrease_point = DB::table('student')
                ->where('std_id', auth('student')->user()->std_id)
                ->decrement('std_pointspeaking');
            }

        }

    }
}
