<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;

class ReportWriting extends Model
{
	public static function getTeacher($start = '', $end = '', $reset) {

		$users = DB::table('users')	
		->select('users.id', 'users.name')
		->where('level', '=', [1, 2])
		->orwhereIn('users.name', ['Kapil D.', 'Henry.D', 'Terry B.'])
		->get();

		foreach($users as $user) {

			if(empty($start) && empty($end) || !empty($reset)) {

				$success = DB::table('text_result')
				->select('*')
				->where('th_id', $user->id)
				->where('status', 'Y')
				->count();

				$pending = DB::table('text_result')
				->select('*')
				->where('th_id', $user->id)
				->where('status', ['W','TH_S'])
				->count();

			} else {
				
				$success = DB::table('text_result')
				->select('*')
				->where('th_id', $user->id)
				->where('status', 'Y')
				->whereBetween('th_sent_date',[$start, $end])
				->count();

				$pending = DB::table('text_result')
				->select('*')
				->where('th_id', $user->id)
				->where('status', ['W','TH_S'])
				->whereBetween('th_sent_date',[$start, $end])
				->count();
			}


			$report[$user->name] = ['user_id' => $user->id, 'pending' => $pending, 'success' => $success];
			

		}

		return $report;
	}

}