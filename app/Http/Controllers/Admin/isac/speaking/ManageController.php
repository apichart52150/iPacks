<?php

namespace App\Http\Controllers\Admin\isac\speaking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;
use DB;

/**
 * 
 */
class ManageController extends Controller
{
	
	function __construct()
	{
		$this->middleware('auth');
	}

	public function index() {

		$students = DB::table('student')
			->select('student.std_id','student.std_name','student.std_pointspeaking')
            ->whereExists(function ($query) {
                $query->select(DB::raw(1))
                      ->from('speaking')
                      ->whereRaw('speaking.std_id = student.std_id');
            })
            ->get();

		return view('admin.isac.speaking.manage.index', compact('students'));
	}

	public function view($std_id) {

		$data = DB::table('speaking')
				->select('speaking.*')
				->where('speaking.std_id', $std_id)
				->get();

		$std_name = DB::table('student')
					->select('std_name')
					->where('std_id', $std_id)
					->get()[0];
		
		return view('admin.isac.speaking.manage.view', compact('data', 'std_name'));
	}

	public function delete(Request $request) {

		$path = DB::table('speaking')
				->select('std_id', 'path')
				->where('id', $request->id)
				->get()[0];
			
		$delete = DB::table('speaking')
				->where('id', $request->id)
				->delete();

		$folderPath = public_path('file_record/'.$path->path);

		$topic = File::delete($folderPath);

		return redirect('speaking/all/'.$path->std_id);
	}		
}