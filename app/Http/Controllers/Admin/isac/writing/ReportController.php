<?php

namespace App\Http\Controllers\Admin\isac\writing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Model\ReportWriting;
use App\Model\AdminWriting;
use File;

class ReportController extends Controller
{
    
    public function teachers(Request $request) {

        if(!empty($request->date_search)) {
			
			$explode = explode(' - ', $request->date_search);

			$start = explode('/', $explode[0]);
			$start = $start[2] . '-' . $start[0] . '-' . $start[1].' 00:00:00';
			
			$end = explode('/', $explode[1]);
			$end = $end[2] . '-' . $end[0] . '-' . $end[1].' 23:59:59';
			$old_date = $request->date_search;

		}else {
			$start = '';
			$end = '';
			$old_date = '';
		}

		if(isset($request->reset)) {
			$reset = 'reset';
			$old_date = '';
		} else {
			$reset = '';
		}

		$reports = ReportWriting::getTeacher($start, $end, $reset);

		

		return view('admin.isac.writing.report_teachers', compact('reports', 'old_date'));
    }

    public function teacher_pending($user_id) {

		$teacher = DB::table('users')->where('id', $user_id)->first();

		$pendings = DB::table('text_result')
        ->select('text_result.*',  'student.std_name')
        ->leftjoin('student', 'student.std_id', '=', 'text_result.std_id')
        ->where([
            ['text_result.th_id', '=', $user_id],
            ['text_result.status', '=', ['W','TH_S']]
        ])
        ->get();

		return view('admin.isac.writing.teacher_pending', compact('teacher', 'pendings'));
	}

    public function students() {
		return view('admin.isac.writing.report_students');
	}


    public function reportWritingAjax(Request $request) {

		$columns = [
			0 => 'id',
            1 => 'std_name',
            2 => 'header_test',
            3 => 'test_type',
            4 => 'name',
            5 => 'sent_date',
            6 => 'th_sent_date',
            7 => 'action'
		];

		$totalData = DB::table('text_result')
        ->where('text_result.status', 'Y')
        ->count();

		$totalFiltered = $totalData;

		$limit = $request->input('length');
		$start = $request->input('start');
		$order = $columns[$request->input('order.0.column')];
		$dir = $request->input('order.0.dir');

		if(empty($request->input('search.value')) && empty($request->startdate) && empty($request->enddate)) {

			$writings = DB::table('text_result')
            ->leftjoin('student', 'student.std_id', '=', 'text_result.std_id')
            ->leftjoin('users', 'users.id', '=', 'text_result.th_id')
            ->select('text_result.id', 'text_result.test_type', 'text_result.header_test', 'text_result.status', 'text_result.th_id', 'text_result.sent_date', 'text_result.th_sent_date',  'users.name', 'student.std_name')
            ->where('text_result.status', 'Y')
            ->offset($start)
            ->limit($limit)
            ->orderBy($order, $dir)
            ->get();

		} else if(!empty($request->startdate) && !empty($request->enddate)) {
			
			$start_date = $request->input('startdate');
			$end_date = $request->input('enddate');

			$writings = DB::table('test_result')
            ->leftjoin('student', 'student.std_id', '=', 'test_result.std_id')
            ->leftjoin('users', 'users.id', '=', 'test_result.th_id')
            ->select('text_result.id', 'text_result.test_type', 'text_result.header_test', 'text_result.status', 'text_result.th_id', 'text_result.sent_date', 'text_result.th_sent_date',  'users.name', 'student.std_name')
            ->where('test_result.status', 'Y')
            ->whereBetween('test_result.sent_date', [$start_date, $end_date])
            ->offset($start)
            ->limit($limit)
            ->orderBy($order, $dir)
            ->get();

			$totalFiltered = DB::table('text_result')
            ->leftjoin('student', 'student.std_id', '=', 'text_result.std_id')
            ->leftjoin('users', 'users.id', '=', 'text_result.th_id')
            ->select('text_result.id', 'text_result.test_type', 'text_result.header_test', 'text_result.status', 'text_result.th_id', 'text_result.sent_date', 'text_result.th_sent_date',  'users.name', 'student.std_name')
            ->where('text_result.status', 'Y')
            ->whereBetween('text_result.sent_date', [$start_date, $end_date])
            ->count();

		} else {

			$search = $request->input('search.value');

			$writings = DB::table('text_result')
            ->leftjoin('student', 'student.std_id', '=', 'text_result.std_id')
            ->leftjoin('users', 'users.id', '=', 'text_result.th_id')
            ->select('text_result.id', 'text_result.test_type', 'text_result.header_test', 'text_result.status', 'text_result.th_id', 'text_result.sent_date', 'text_result.th_sent_date',  'users.name', 'student.std_name')
            ->where('text_result.status', 'Y')
            ->where('text_result.test_type', 'LIKE', "%{$search}%")
            ->orwhere('text_result.header_test', 'LIKE', "%{$search}%")
            ->orWhere('student.std_name', 'LIKE', "%{$search}%")
            ->offset($start)
            ->limit($limit)
            ->orderBy($order, $dir)
            ->get();

			$totalFiltered = DB::table('text_result')
            ->leftjoin('student', 'student.std_id', '=', 'text_result.std_id')
            ->leftjoin('users', 'users.id', '=', 'text_result.th_id')
            ->select('text_result.id', 'text_result.test_type', 'text_result.header_test', 'text_result.status', 'text_result.th_id', 'text_result.sent_date', 'text_result.th_sent_date',  'users.name', 'student.std_name')
            ->where('text_result.status', 'Y')
            ->where('text_result.test_type', 'LIKE', "%{$search}%")
            ->orwhere('text_result.header_test', 'LIKE', "%{$search}%")
            ->orWhere('student.std_name', 'LIKE', "%{$search}%")
            ->count();

		}

		$data = array(); 

		if(!empty($writings)) {

			foreach($writings as $writing) {
				$dataJson = json_encode($writing);
				$view = route('view_writing',$writing->id);

				$row['std_name'] = "<a href='{$view}'>{$writing->std_name}</a>";
                $row['header_test'] = $writing->header_test;
                $row['test_type'] = $writing->test_type;
                $row['th_name'] = $writing->name;

				$std_sent_date = date('d-m-Y H:i:s', strtotime($writing->sent_date));
				$row['std_sent_date'] = "<span class='badge badge-dark p-1'>{$std_sent_date}</span>";
				
                $th_sent_date = date('d-m-Y H:i:s', strtotime($writing->th_sent_date));
				$row['th_sent_date'] = "<span class='badge badge-success p-1' >{$th_sent_date}</span>";
				$row['action'] = "
					<button class='btn btn-warning btn-sm restatus' onclick='reStatus({$dataJson});'>
						<i class='fas fa-history'></i>
					</button>
					<button class='btn btn-danger btn-sm delete' onclick='deleteTopic({$dataJson});'>
						<i class='fas fa-trash'></i>
					</button>
				";

				$data[] = $row;
			}
		}

		$json_data = [
			"draw" => intval($request->input('draw')),
			"recordsTotal" => intval($totalData),
			"recordsFiltered" => intval($totalFiltered),
			"data" => $data
		];

		return response()->json($json_data);
	}

	public function view_history($id) {
		
		$check = AdminWriting::check($id);

		return view('admin.isac.writing.view_history', compact('check'));
	}

	public function reStatus($id) {
		
		$writing = DB::table('text_result')->where('id', $id)->update([
			'th_id' => null,
            'th_text' => null,
            'comment' => null,
            'score' => null,
            'status' => 'N',
            'th_sent_date' => null
		]);

		return response()->json(['success' => true]);
	}

	public function delete_topic($id) {
		
		$writing = DB::table('text_result')->where('id', $id)->delete();

		return response()->json(['success' => true]);
	}
}
