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
    	$std_id = auth('student')->user()->std_id;
		

		$check_std_score = DB::table('score')
		->select('std_id','classroom_id')
		->where('std_id','=',$std_id)
		->get();

		//get $class_id
		$class_id = $check_std_score[0]->classroom_id;


		// แยกชุดข้อสอบ
    	$type_quiz = DB::table('class')
    	->select('set_exam')
    	->where('id','=', $class_id)
    	->get();

		$name_type = $type_quiz[0]->set_exam;

		$type = DB::table('set_exam')
    	->select('name')
    	->where('priority','=', $name_type)
    	->get();

		$checklis = Student::checklis($std_id,$class_id,$type_quiz[0]->set_exam);
    	$checkread = Student::checkread($std_id,$class_id,$type_quiz[0]->set_exam);
    	$checkwriting = Student::checkwriting($std_id,$class_id,$type_quiz[0]->set_exam);

		$check_score = DB::table('score')
    	->select('id')
    	->where('std_id','=',$std_id) 
    	->where('classroom_id','=',$class_id) 
    	->get();

		if($type_quiz[0]->set_exam > 0){

			if(count($check_score) == 0){
    			$std_score = DB::table('score')
    			->insert(['std_id' => $std_id,
				'classroom_id' =>  $class_id,
				'set_exam' => $type_quiz[0]->set_exam]);
    		}

    		$data = [
				'checklis' => $checklis,
				'checkread' => $checkread,
				'checkwriting' => $checkwriting,
				'set_exam' => $name_type,
			];
			
			return view('student.mocktest.home',compact('data'));

		}else{

			echo "No exam";die;
			
		}

    }
}
