<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Auth;

class Writing extends Model {

	public static function queryWriting($std_id) {

        $writing = DB::table('text_result')
        ->select('text_result.*','users.username as th_name')
        ->where('std_id','=', $std_id)
        ->leftjoin('users','users.id','=','text_result.th_id')
        ->orderBy('sent_date', 'desc')
        ->get();

        return ($writing);

    } 
}