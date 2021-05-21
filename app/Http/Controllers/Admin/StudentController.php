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
        ->leftJoin('class_student', 'student.std_id', '=', 'class_student.std_id')
        ->leftJoin('class', 'class_student.nccode', '=', 'class.nccode')
        ->leftJoin('course', 'class.courseid', '=', 'course.courseid')
        ->select('student.*','class_student.nccode','class.lastdate','class.courseid','course.coursename')
        ->where('class.lastdate','>',date('Y-m-d'))
        ->orderBy('student.updated_at','DESC')
        ->get();

        $course = DB::table('course')
       ->join('class','course.courseid', '=', 'class.courseid')
       ->where('class.lastdate', '>',date('Y-m-d'))
       ->select('course.courseid','course.coursename','class.nccode','class.startdate','class.lastdate')
       ->orderBy('class.created_at', 'desc')
       ->get();

        $club_type  = DB::table('club_room')
        ->join('club_subtitle', 'club_subtitle.id', '=', 'club_room.subtitle_id')
        ->join('club_type', 'club_type.id', '=', 'club_subtitle.type_id')
        ->select('club_room.*','club_type.title_type','club_subtitle.title')
        ->get();

        $data = [
			'student' => $student,
			'course' => $course,
            'club_type' => $club_type
		];
       
        return view('admin.student', compact('data'));
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

        $class_student = DB::table('class')
        ->select('id')
        ->where('nccode', '=', $request->coursetype)
        ->get();

        $row_student = count($student);

        if($row_student == 0){

            DB::table('student')->insert(
            ['coursetype' => $class_student[0]->id, 'std_username' => $request->std_username, 'std_password' => md5($request->std_password), 'std_name' => $request->std_name, 'std_nickname' => $request->std_nickname, 'std_point' => $request->std_point, 'std_bonus' => $request->std_bonus, 'std_mobile' => $request->std_mobile , 'std_pointsac' => $request->std_pointsac,'std_pointspeaking' => $request->std_pointspeaking]
            );

            $data = DB::table('student')
            ->select('*')
            ->where('std_username', '=',$request->std_username)
            ->limit(1)
            ->get();

            DB::table('class_student')->insert(
                ['std_id' => $data['0']->std_id, 'nccode' => $request->coursetype]
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
