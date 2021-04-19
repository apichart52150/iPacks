<?php 

namespace App\Http\Controllers\student\mocktest\found_1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * 
 */
class WritingController extends Controller
{
	
	public function index() {

		return view('student.mocktest.found_1.writing');

	}

	public function exam(Request $request) {

		$check_score = DB::table('score')
    	->where('std_id',$request->std_id)
        ->get();

        if (count($check_score) <= 0) {
        	DB::table('score')
        	->insert(['std_id' => $request->std_id, 'classroom_id' => $request->classroom_id, 'set_exam' => $request->set_exam]);
        }

        $task1 = DB::table('writing_score')
        ->insert(['std_id' => $request->std_id,
            'classroom_id' => $request->classroom_id,
            'title' => '1',
            'set_exam' => $request->set_exam,
            'text_answer' => $request->text_answer_task1
        ]);

        $task2 = DB::table('writing_score')
        ->insert(['std_id' => $request->std_id,
            'classroom_id' => $request->classroom_id,
            'title' => '2',
            'set_exam' => $request->set_exam,
            'text_answer' => $request->text_answer_task2
        ]);


    	return redirect('success');
	}
}