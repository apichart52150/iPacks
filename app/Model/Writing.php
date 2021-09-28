<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Auth;

class Writing extends Model {

	public static function queryWriting($id) {

        $writing = DB::table('text_result')
        ->select('text_result.*','staff.staff_username as th_name')
        ->where('std_id','=', $id)
        ->leftjoin('staff','staff.staff_id','=','text_result.th_id')
        ->orderBy('sent_date', 'desc')
        ->get();

        return ($writing);

    } 
}