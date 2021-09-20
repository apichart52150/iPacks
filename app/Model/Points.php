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

    public static function decrementPoint($type) {

        $getPoint = DB::table('point')
        ->select($type)
        ->where('user_id','=', auth('web')->user()->id)
        ->first();

        if($getPoint->$type != 0) {
            DB::table('point')
            ->where('user_id', '=', auth('web')->user()->id)
            ->decrement($type);
        } else {
            return redirect('user_home');
        }

    } 
}