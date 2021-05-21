<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Auth;
use DB;


class Profile extends Model
{
    public static function getProfile() {

        $current_date = date('Y-m-d');

        $profile = DB::table('student')
        ->select('course.coursename', 'class.lastdate', 'class.startdate')
        ->join('class_student', 'student.std_id', '=', 'class_student.std_id')
        ->join('class', 'class_student.nccode', '=', 'class.nccode')
        ->join('course', 'class.courseid', '=', 'course.courseid')
        ->where('student.std_id', auth('student')->user()->std_id)
        ->get()[0];
       
        if(!empty($profile)) {
            $profile = $profile;
        } else {
            $profile = '';
        }

        return $profile;
    }
}
