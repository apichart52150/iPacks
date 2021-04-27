<?php

namespace App\Http\Controllers\Admin\clubs;

use App\Http\Controllers\Controller;
use DB;

class LogsController extends Controller {


	public function index($id) {

		
 
		$logs = DB::table('log')
		->select('*')
		->where('std_id','=',$id)
		->orderBy('datecreate','DESC')
		->get();

		$std_info = DB::table('student')
		->select('student.*')
		->where('std_id','=',$id)
		->get();

		// dd($std_info);
		

		return view('admin.clubs.logs',compact('logs','std_info'));
	}

}