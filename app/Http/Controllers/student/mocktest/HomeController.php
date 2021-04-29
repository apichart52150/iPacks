<?php

namespace App\Http\Controllers\student\mocktest;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime;
use Carbon\Carbon;
use Auth;
use App\Model\Student;

class HomeController extends Controller
{

    public static function index()
    {			

    	$std_id = auth('student')->user()->std_id;
		$class_id = auth('student')->user()->coursetype;

		
		$set_exam = DB::table('class')
		->select('set_exam')
		->where('id', '=', $class_id)
		->get();



		$name_type = DB::table('set_exam')
    	->select('name')
    	->where('priority','=', $set_exam[0]->set_exam)
    	->get();
		

		$checklis = Student::checklis($std_id,$class_id,$set_exam[0]->set_exam);
    	$checkread = Student::checkread($std_id,$class_id,$set_exam[0]->set_exam);
    	$checkwriting = Student::checkwriting($std_id,$class_id,$set_exam[0]->set_exam);

		$check_score = DB::table('score')
    	->select('id')
    	->where('std_id','=',$std_id) 
    	->where('classroom_id','=',$class_id) 
    	->get();

		if($set_exam[0]->set_exam > 0){

			if(count($check_score) == 0){
    			$std_score = DB::table('score')
    			->insert(['std_id' => $std_id,
				'classroom_id' =>  $class_id,
				'set_exam' => $set_exam[0]->set_exam]);
    		}

    		$data = [
				'checklis' => $checklis,
				'checkread' => $checkread,
				'checkwriting' => $checkwriting,
				'set_exam' => $set_exam[0]->set_exam,
				'name_type' => $name_type[0]->name,
			];

			return view('student.mocktest.home', compact('data'));

		}else{

			echo "No exam";die;
			
		}

    }
}
