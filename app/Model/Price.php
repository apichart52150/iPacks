<?php

namespace App\Model;
use DB;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    public static function get_price($level){
        $price = DB::table('price')->select('price','discount')->where('name','=',$level)->first();
        return $price;
    }
}
