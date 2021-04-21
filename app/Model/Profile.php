<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Auth;
use DB;
use Session;


class Profile extends Model
{
    public static function getProfile() {

        $current_date = date('Y-m-d');

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

    public static function getProfileClub() {

        $current_date = date('Y-m-d');
        $course_type = 'online';

        if($course_type == 'online') {

            $profile = DB::table('student')
            ->select(DB::raw('SUM(std_pointsac + std_pointspeaking) as std_onlinesac'), 'course.coursename', DB::raw("IF(class.lastdate < '$current_date', 'Expire', 'Active') as class_status"), 'class.lastdate as class_expire', 'class_student.nccode')
            ->join('class_student', 'class_student.std_id', '=', 'student.std_id')
            ->join('class', 'class_student.nccode', '=', 'class.nccode')
            ->join('course', 'class.courseid', '=', 'course.courseid')
            ->where('student.std_id', Session::get('std_id'))
            ->groupBy('student.std_id')
            ->get()[0];


        } else {

            $profile = DB::table('student')
            ->select(DB::raw('(CASE WHEN borrowbook.status = "Borrow" THEN "Borrowed" ELSE "None" END) as borrowbook_status'), 'borrowbook.returndate', 'course.coursename', DB::raw("IF(class.lastdate < '$current_date', 'Expire', 'Active') as class_status"), 'class.lastdate as class_expire', 'class_student.nccode')
            ->leftjoin('class_student', 'class_student.std_id', '=', 'student.std_id')
            ->leftjoin('class', 'class_student.nccode', '=', 'class.nccode')
            ->leftjoin('course', 'class.courseid', '=', 'course.courseid')
            ->leftjoin('borrowbook','borrowbook.std_id','=', 'class_student.std_id')
            ->where('student.std_id', Session::get('std_id'))
            ->get()[0];
        }
            
        return $profile;

    }
}
