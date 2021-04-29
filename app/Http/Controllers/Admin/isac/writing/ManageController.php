<?php

namespace App\Http\Controllers\Admin\isac\writing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use DB;

/**
 * 
 */
class ManageController extends Controller
{
	
	public function index() {

		$students = DB::table('student')
		->select('student.std_id','student.std_name','student.std_pointsac')
		->whereExists(function ($query) {
		$query->select(DB::raw(1))
			->from('text_result')
			->whereRaw('text_result.std_id = student.std_id');
		})
		->get();

		return view('admin..isac.writing.manage.index', compact('students'));
	}

	public function view($std_id) {

		$data = DB::table('text_result')
		->select('text_result.*')
		->where('text_result.std_id', $std_id)
		->get();

		$std_name = DB::table('student')
		->select('std_name')
		->where('std_id', $std_id)
		->get()[0];
		
		return view('admin.isac.writing.manage.view', compact('data', 'std_name'));
	}
}