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

		// แยกชุดข้อสอบ
    	$type_quiz = DB::table('class')
    	->select('set_exam')
    	->where('id','=', $class_id)
    	->get();


		if($type_quiz[0]->set_exam == 7){

			$data = [
			'set_exam' => $type_quiz[0]->set_exam ];

			return view('student.mocktest.home',compact('data'));

		}else{
			return view('welcome');
		}


    }


}
