<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;



class Score extends Model
{
    public static function score_writing($classroom_id,$std_id=''){
        $data = DB::table('writing_score')
        ->select('*')
        ->where('classroom_id','=',$classroom_id)
        ->where('std_id','=', $std_id)
        ->orderBy('create_date', 'ASC')
        ->get();
    
        return($data); 
    }

    public static function score_lis($classroom_id,$std_id=''){
        $data = DB::table('lis_score')
        ->select('lis_score_total')
        ->where('classroom_id','=',$classroom_id)
        ->where('std_id','=',$std_id)
        ->orderBy('create_date', 'DESC')
        ->limit(1)
        ->get();


        return($data[0]); 
    }

    public static function score_read($classroom_id,$std_id=''){
        $data = DB::table('read_score')
        ->select('read_score_total')
        ->where('classroom_id','=',$classroom_id)
        ->where('std_id','=',$std_id)
        ->orderBy('create_date', 'DESC')
        ->limit(1)
        ->get();

        return($data[0]); 
    }

}
