<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Datatables;


class StudentController extends Controller {

	public function index() {

        $student = DB::table('student')
        ->select('*')
        ->get();
       
        return view('admin.student', compact('student'));
    }

    public function create($status=null)
	{

       $course = DB::table('course')
       ->join('class','course.courseid', '=', 'class.courseid')
       ->where('class.lastdate', '>',date('Y-m-d'))
       ->select('course.courseid','course.coursename','class.nccode','class.startdate','class.lastdate')
       ->orderBy('class.created_at', 'desc')
       ->get();

       return view('admin.student', compact('course'));
   }

    public function addstudent(Request $request){

        $student = DB::table('student')
        ->select('std_username')
        ->where('std_username', '=', $request->std_username)
        ->get();

        $row_student = count($student);

        if($row_student == 0){

            DB::table('student')->insert([
                'std_username' => $request->std_username, 
                'std_password' => md5($request->std_mobile), 
                'std_name' => $request->std_name,
                'std_nickname' => $request->std_nickname, 
                'std_mobile' => $request->std_mobile , 
                'std_pointsac' => $request->std_pointsac,
                'std_pointspeaking' => $request->std_pointspeaking]
            );
        
            session()->flash('success_ans','<div class="alert alert-success" role="alert">
            <i class="fas fa-check-circle mr-2"></i><strong>Add Student Success</strong></div>'); 

            return redirect('student');

        }else{

            session()->flash('error_ans','<div class="alert alert-danger" role="alert">
            <i class="far fa-window-close mr-2"></i><strong>Username* นี้มีในระบบแล้ว ไม่สามารถสร้างซ้อนทับได้</strong></div>');
            return redirect('student');
        }

        return redirect('student');
    }


    public function edit($std_id)
	{

       $course = DB::table('course')
       ->join('class','course.courseid', '=', 'class.courseid')
       ->where('class.lastdate', '>',date('Y-m-d'))
       ->select('course.courseid','course.coursename','class.nccode','class.startdate','class.lastdate')
       ->get();

       $course_student = DB::table('class_student')
       ->where('std_id','=',$std_id)
       ->limit(1)
       ->select('*')
       ->get();

       $student = DB::table('student')
       ->select(DB::raw('*'))
       ->where('std_id','=',$std_id)
       ->get();

        //    dd($course);

       return view('admin.edit', compact('student','course','course_student') );
    }

    public function studentupdate($std_id, Request $request)
	{
		DB::table('student')
        ->where('std_id', $std_id)
        ->update([
            'std_username' => $request->std_username,
            'std_password' => md5($request->std_password),
            'std_mobile' => $request->std_password,
            'std_name' => $request->std_name,
            'std_nickname' => $request->std_nickname,
            'std_id' => $request->std_id,
            'std_pointsac' => $request->std_pointsac,
            'std_pointspeaking' => $request->std_pointspeaking]);

        session()->flash('success_ans','<div class="alert alert-success" role="alert">
        <i class="fas fa-check-circle mr-2"></i><strong>Update Success</strong></div>'); 

        return redirect('student');
    }

    

    public function studentdelete($std_id)
	{
		DB::transaction(function() use($std_id) {
        DB::table('class_student')->where('std_id', $std_id)->delete();
        DB::table('student')->where('std_id', '=',$std_id)->delete();
        });

        session()->flash('success_ans','<div class="alert alert-success" role="alert">
        <i class="fas fa-check-circle mr-2"></i><strong>Delete Success</strong></div>'); 

		return redirect('student');
	}
}
