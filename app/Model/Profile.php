<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Auth;
use DB;
use Session;


class Profile extends Model
{
    public static function getProfile() {

        $profile = DB::table('student')
        ->select('student.std_pointsac','student.std_pointspeaking', 'student.coursetype', 'student.std_name', 'student.std_nickname','student.std_mobile', 'student.std_email', 'course.coursename','class.th_name', 'class.lastdate', 'class.startdate', 'class.nccode')
        ->join('class_student', 'student.std_id', '=', 'class_student.std_id')
        ->join('class', 'class_student.nccode', '=', 'class.nccode')
        ->join('course', 'class.courseid', '=', 'course.courseid')
        ->where('student.std_id', Session::get('std_id'))
        ->get()[0];

        if(!empty($profile)) {
            $profile = $profile;
        } else {
            $profile = '';
        }
        return $profile;
    }
}
