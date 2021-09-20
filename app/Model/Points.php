<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Auth;

class Points extends Model {

	public static function getPoint($id) {

        $getPoint = DB::table('point')
        ->select('*')
        ->where('user_id','=', $id)
        ->first();

        return ($getPoint);

    } 
}