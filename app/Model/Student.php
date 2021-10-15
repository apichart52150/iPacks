<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;



class Student extends Model
{

    public static function std_profile_by_id($std_id = '')
    {
        $std_profile_by_id = DB::table('student')
            ->select('*')
            ->where('student.std_id', '=', $std_id)
            ->get();

        return ($std_profile_by_id);
    }

    public static function checkCondition($email, $status){
        DB::table('condition')
        ->insert([
            'email' => $email,
            'condition' => $status,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }

    public static function std_profile_lis_part($std_id = '')
    {
        $std_profile_lis_part = DB::table('lis_score')
            ->select('lis_score.*', 'student.std_id', 'student.std_name', 'lis_score.create_date', 'student.std_mobile')
            ->leftjoin('student', 'student.std_id', '=', 'lis_score.std_id')
            ->where('lis_score.std_id', '=', $std_id)
            ->get();


        return ($std_profile_lis_part);
    }

    public static function std_profile_read_part($std_id = '')
    {
        $std_profile_read_part = DB::table('read_score')
            ->select('read_score.*', 'student.std_id', 'student.std_name', 'read_score.create_date', 'student.std_mobile')
            ->leftjoin('student', 'student.std_id', '=', 'read_score.std_id')
            ->where('read_score.std_id', '=', $std_id)
            ->get();

        return ($std_profile_read_part);
    }


    public static function std_profile_wri1_part($std_id = '')
    {
        $std_profile_wri1_part = DB::table('writing_score')
            ->select('writing_score.*', 'student.std_name', 'class.th_name', 'course.coursename')
            ->leftjoin('student', 'student.std_id', '=', 'writing_score.std_id')
            ->leftjoin('class', 'class.id', '=', 'writing_score.classroom_id')
            ->leftjoin('course', 'class.courseid', '=', 'course.courseid')
            ->where('writing_score.std_id', '=', $std_id)
            ->where('writing_score.title', '=', 1)
            ->get();
        return ($std_profile_wri1_part);
    }


    public static function std_profile_wri2_part($std_id = '')
    {
        $std_profile_wri2_part = DB::table('writing_score')
            ->select('writing_score.*', 'student.std_name', 'class.th_name', 'course.coursename')
            ->leftjoin('student', 'student.std_id', '=', 'writing_score.std_id')
            ->leftjoin('class', 'class.id', '=', 'writing_score.classroom_id')
            ->leftjoin('course', 'class.courseid', '=', 'course.courseid')
            ->where('writing_score.std_id', '=', $std_id)
            ->where('writing_score.title', '=', 2)
            ->get();
        return ($std_profile_wri2_part);
    }

    public static function std_profile_wri3_part($std_id = '')
    {
        $std_profile_wri3_part = DB::table('writing_score')
            ->select('writing_score.*', 'student.std_name', 'class.th_name', 'course.coursename')
            ->leftjoin('student', 'student.std_id', '=', 'writing_score.std_id')
            ->leftjoin('class', 'class.id', '=', 'writing_score.classroom_id')
            ->leftjoin('course', 'class.courseid', '=', 'course.courseid')
            ->where('writing_score.std_id', '=', $std_id)
            ->where('writing_score.title', '=', 3)
            ->get();
        return ($std_profile_wri3_part);
    }




    public static function del_ans($id)
    {

        $del_ans = DB::table('lis_score')->where('lis_score.id', '=', $id)->delete();
        $del_ans = DB::table('read_score')->where('read_score.id', '=', $id)->delete();
        return ($del_ans);
    }


    public static function del_ans_wri($wri_id)
    {
        $del_ans_wri = DB::table('writing_score')->where('writing_score.id', '=', $wri_id)->delete();
        return ($del_ans_wri);
    }




    public static function checklis($std_id = '', $class_id = '', $set_exam = '')
    {

        $checklis = DB::table('lis_score')
            ->select('*')
            ->where('std_id', '=', $std_id)
            ->where('classroom_id', '=', $class_id)
            ->where('set_exam', '=', $set_exam)
            ->get();

        return (count($checklis));
    }

    public static function checkread($std_id = '', $class_id = '', $set_exam = '')
    {

        $checkread = DB::table('read_score')
            ->select('*')
            ->where('std_id', '=', $std_id)
            ->where('classroom_id', '=', $class_id)
            ->where('set_exam', '=', $set_exam)
            ->get();

        return (count($checkread));
    }

    public static function checkwriting($std_id = '', $class_id = '', $set_exam = '')
    {

        $checkwriting = DB::table('writing_score')
            ->select('*')
            ->where('std_id', '=', $std_id)
            ->where('classroom_id', '=', $class_id)
            ->where('set_exam', '=', $set_exam)
            ->get();
        //dd($checkwriting);

        return (count($checkwriting));
    }
}
