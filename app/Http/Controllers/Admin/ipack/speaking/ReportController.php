<?php

namespace App\Http\Controllers\Admin\ipack\speaking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Model\Report;
use App\Model\AdminSpeaking;
use File;
/**
 * 
 */
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

		$reports = Report::getTeacher($start, $end, $reset);

		

		return view('admin.isac.speaking.report_teachers', compact('reports', 'old_date'));
	}

	public function teacher_pending($user_id) {

		$teacher = DB::table('users')->where('id', $user_id)->first();

		$pendings = DB::table('speaking')
					->select('speaking.*',  'student.std_name')
					->leftjoin('student', 'student.std_id', '=', 'speaking.std_id')
					->where([
						['speaking.th_id', '=', $user_id],
						['speaking.status', '=', 'pending']
					])
					->get();

		return view('admin.isac.speaking.teacher_pending', compact('teacher', 'pendings'));
	}

	public function students() {
		return view('admin.isac.speaking.report_students');
	}

	public function reportAllAjax(Request $request) {

		$columns = [
			0 => 'std_name',
			1 => 'topic',
			2 => 'name',
			3 => 'created_at',
			4 => 'th_sent_date',
			5 => 'action',
		];

		$totalData = DB::table('speaking')
		->where('speaking.status', 'success')
		->count();

		$totalFiltered = $totalData;

		$limit = $request->input('length');
		$start = $request->input('start');
		$order = $columns[$request->input('order.0.column')];
		$dir = $request->input('order.0.dir');

		if(empty($request->input('search.value')) && empty($request->startdate) && empty($request->enddate)) {

			$speakings = DB::table('speaking')
			->leftjoin('student', 'student.std_id', '=', 'speaking.std_id')
			->leftjoin('users', 'users.id', '=', 'speaking.th_id')
			->select('speaking.id', 'speaking.topic', 'speaking.created_at', 'speaking.th_sent_date', 'users.name', 'student.std_name')
			->where('speaking.status', 'success')
			->offset($start)
			->limit($limit)
			->orderBy($order, $dir)
			->get();

		} else if(!empty($request->startdate) && !empty($request->enddate)) {
			
			$start_date = $request->input('startdate');
			$end_date = $request->input('enddate');

			$speakings = DB::table('speaking')
						->leftjoin('student', 'student.std_id', '=', 'speaking.std_id')
						->leftjoin('users', 'users.id', '=', 'speaking.th_id')
						->select('speaking.id', 'speaking.topic', 'speaking.created_at', 'speaking.th_sent_date', 'users.name', 'student.std_name')
						->where('speaking.status', 'success')
						->whereBetween('speaking.created_at', [$start_date, $end_date])
						->offset($start)
						->limit($limit)
						->orderBy($order, $dir)
						->get();

			$totalFiltered = DB::table('speaking')
						->leftjoin('student', 'student.std_id', '=', 'speaking.std_id')
						->leftjoin('users', 'users.id', '=', 'speaking.th_id')
						->select('speaking.id', 'speaking.topic', 'speaking.created_at', 'speaking.th_sent_date', 'users.name', 'student.std_name')
						->where('speaking.status', 'success')
						->whereBetween('speaking.created_at', [$start_date, $end_date])
						->count();

		} else {

			$search = $request->input('search.value');

			$speakings = DB::table('speaking')
						->leftjoin('student', 'student.std_id', '=', 'speaking.std_id')
						->leftjoin('users', 'users.id', '=', 'speaking.th_id')
						->select('speaking.id', 'speaking.topic', 'speaking.created_at', 'speaking.th_sent_date', 'users.name', 'student.std_name')
						->where('speaking.status', 'success')
						->where('student.std_name', 'LIKE', "%{$search}%")
						->orwhere('speaking.topic', 'LIKE', "%{$search}%")
						->orwhere('users.name', 'LIKE', "%{$search}%")
						->offset($start)
						->limit($limit)
						->orderBy($order, $dir)
						->get();

			$totalFiltered = DB::table('speaking')
						->leftjoin('student', 'student.std_id', '=', 'speaking.std_id')
						->leftjoin('users', 'users.id', '=', 'speaking.th_id')
						->select('speaking.id', 'speaking.topic', 'speaking.created_at', 'speaking.th_sent_date', 'users.name', 'student.std_name')
						->where('speaking.status', 'success')
						->where('student.std_name', 'LIKE', "%{$search}%")
						->orwhere('speaking.topic', 'LIKE', "%{$search}%")
						->orwhere('users.name', 'LIKE', "%{$search}%")
						->count();

		}

		$data = array(); 

		if(!empty($speakings)) {

			foreach($speakings as $speaking) {
				$dataJson = json_encode($speaking);
				$view = route('view',$speaking->id);

				$row['std_name'] = "<a href='{$view}'>{$speaking->std_name}</a>";
				$row['topic'] = $speaking->topic;
				$row['th_name'] = $speaking->name;

				$std_sent_date = date('d-m-Y H:i:s', strtotime($speaking->created_at));
				$row['std_sent_date'] = "<span class='badge badge-dark p-1'>{$std_sent_date}</span>";

				$th_sent_date = date('d-m-Y H:i:s', strtotime($speaking->th_sent_date));
				$row['th_sent_date'] = "<span class='badge badge-success p-1'>{$th_sent_date}</span>";
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
		
		$check = AdminSpeaking::check($id);

		return view('admin.isac.speaking.view_history', compact('check'));
	}

	public function reStatus($id) {
		
		$speaking = DB::table('speaking')->where('id', $id)->update([
			'status' => 'sent',
			'score' => null,
			'fluency_and_coherence' => null,
			'lexical_resource' => null,
			'grammar_range_and_acc' => null,
			'pronunciation' => null,
			'th_id' => null,
			'th_sent_date' => null
		]);

		return response()->json(['success' => true]);
	}

	public function delete_topic($id) {
		
		$speaking = DB::table('speaking')->where('id', $id)->delete();

		return response()->json(['success' => true]);
	}
}