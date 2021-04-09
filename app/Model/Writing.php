<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Writing extends Model {

	public static function queryWriting($std_id) {

        $writing = DB::table('text_result')
        ->select('text_result.*','users.name as th_name')
        ->where('std_id','=', $std_id)
        ->leftjoin('users','users.id','=','text_result.th_id')
        ->orderBy('sent_date', 'desc')
        ->get();

        return ($writing);

    } 

   	public static function checkPoint() {

      	$pointwriting = DB::connection('mysql')->select('select std_pointsac as pointwriting from student where std_id = ?',[Session('std_id')]);
 
      	return ($pointwriting); 

   	}

	// show one topic 
	public static function status_topic($id) {

		$status = DB::table('text_result')
		->select('text_result.id as sac_id', 'text_result.code_test', 'text_result.test_type', 'text_result.header_test', 'text_result.status', 'text_result.sent_date', 'text_result.th_sent_date', 'users.id as th_id', 'users.name as th_name')
		->leftJoin('users', 'users.id', '=', 'text_result.th_id')
		->where('text_result.id',$id)
		->get();

		return ($status);

	}


}