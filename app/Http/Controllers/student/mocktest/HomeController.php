<?php

namespace App\Http\Controllers\student\mocktest;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime;
use Carbon\Carbon;
use Session;
use App\Model\Student;

class HomeController extends Controller
{

    public static function index()
    {			

		//echo $std_id;die;
    	$std_id = Session::get('std_id');
    	$class_id = '299';
		Session::put('class_id',$class_id);
		

		// แยกชุดข้อสอบ
    	$type_quiz = DB::table('class')
    	->select('set_exam')
    	->where('id','=', $class_id)
    	->get();

		$name_type = $type_quiz[0]->set_exam;

		$type = DB::table('course')
    	->select('coursename')
    	->where('priority','=', $name_type)
    	->get();

		// dd($type);

		if($type_quiz[0]->set_exam == 7){

			$data = [
			'set_exam' => $name_type,
			'name_type' => $type[0]->coursename
			];

			// dd($data);

			return view('student.mocktest.home',compact('data'));

		}else{
			return view('welcome');
		}


    }


}
