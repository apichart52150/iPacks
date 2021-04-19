<?php
namespace App\Http\Controllers\Admin\mocktest;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\Model\Student;

class StudentController extends Controller {
   

    public static function index() {

        return view('admin.mocktest.dashboard');

    }


    public static function std_profile_by_id($std_id='') {

        $std_profile_by_id = student::std_profile_by_id($std_id);
        $std_profile_lis_part = student::std_profile_lis_part($std_id);
        $std_profile_read_part = student::std_profile_read_part($std_id);


        $std_profile_wri1_part = student::std_profile_wri1_part($std_id);
        $std_profile_wri2_part = student::std_profile_wri2_part($std_id);
        $std_profile_wri3_part = student::std_profile_wri3_part($std_id);

        $check_exam = DB::table('score')
        ->select('set_exam')
        ->where('std_id','=',$std_id) 
        ->get();

        //dd($std_profile_by_id,$std_profile_lis_part,$std_profile_read_part);
        return view('admin.mocktest.student_profile',compact('check_exam','std_profile_by_id','std_profile_lis_part','std_profile_read_part','std_profile_wri1_part','std_profile_wri2_part','std_profile_wri3_part'));

    }


    public static function print_lis_part($std_id='') {

        $print = student::std_profile_lis_part($std_id);
         //dd($print_by_id,$print_lis_part,$print_read_part);
        return view('admin.mocktest.print_score',compact('print'));

    }


    public static function print_read_part($std_id='') {

        $print = student::std_profile_read_part($std_id);
        return view('admin.mocktest.print_score',compact('print'));

    }


    public static function print_wri_part1($std_id='') {

        $print = student::std_profile_wri1_part($std_id);
        return view('admin.mocktest.print_score_wri',compact('print'));

    }

    public static function print_wri_part2($std_id='') {

        $print = student::std_profile_wri2_part($std_id);
        return view('admin.mocktest.print_score_wri',compact('print'));

    }

    //gate way print
    public static function print_gateway_part1($std_id='') {

        $print = student::std_profile_wri1_part($std_id);
        return view('admin.mocktest.print_score_gateway',compact('print'));

    }

    public static function print_gateway_part2($std_id='') {

        $print = student::std_profile_wri2_part($std_id);
        return view('admin.mocktest.print_score_gateway',compact('print'));
    }

    public static function print_gateway_part3($std_id='') {

        $print = student::std_profile_wri3_part($std_id);
        return view('admin.mocktest.print_score_gateway',compact('print'));

    }


    public static function del_ans($id='',$std_id='') {

        $del_ans = student::del_ans($id);
        session()->flash('del_ans','<div class="alert alert-success" role="alert">
        <i class="mdi mdi-check-all mr-2"></i><strong>Delete Success</strong></div>'); 
        return redirect('student_profile/'.$std_id);

    }


    public static function del_ans_wri($wri_id='',$std_id='') {

        $del_ans_wri = student::del_ans_wri($wri_id);
        session()->flash('del_ans','<div class="alert alert-success" role="alert">
        <i class="mdi mdi-check-all mr-2"></i><strong>Delete Success</strong></div>'); 
        return redirect('student_profile/'.$std_id);

    }




    public static function edit_score(Request $request) {

        $edit_score = DB::table('score')
        ->where('std_id', $request->std_id)
        ->where('classroom_id', $request->class_id)
        ->update(['score_speaking' => $request->score_speaking, 
        'score_rec_course' => $request->score_rec_course,
        'score_expectband' => $request->score_expectband]);

        $edit_score = DB::table('writing_score')
        ->where('std_id',$request->std_id)
        ->where('title','=','1')
        ->update(['score' => $request->score_writing1]);

        $edit_score = DB::table('writing_score')
        ->where('std_id',$request->std_id)
        ->where('title','=','2')
        ->update(['score' => $request->score_writing2]);

        $edit_score = DB::table('writing_score')
        ->where('std_id',$request->std_id)
        ->where('title','=','3')
        ->update(['score' => $request->score_writing3]);

        session()->flash('edit_score','<div class="alert alert-success" role="alert">
        <i class="mdi mdi-check-all mr-2"></i><strong>Update Score Success</strong></div>'); 

        return redirect('class_detail/'.$request->class_id);

    } 

    public static function update_writing(Request $request) {
  
        $edit_score = DB::table('writing_score')
        ->where('id',$request->row_id)
        ->where('title','=','1')
        ->update(['score' => $request->score_writing1]);

        $edit_score = DB::table('writing_score')
        ->where('id',$request->row_id)
        ->where('title','=','2')
        ->update(['score' => $request->score_writing2]);
  
        $edit_score = DB::table('writing_score')
        ->where('id',$request->row_id)
        ->where('title','=','3')
        ->update(['score' => $request->score_writing3]);

        session()->flash('edit_score', '<div class="alert alert-success" role="alert">
        <i class="mdi mdi-check-all mr-2"></i><strong>Update Score Success</strong></div>');

        return redirect('class_detail/'.$request->class_id);

    }



}//end class
