<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Auth;

class CheckStatus extends Model {

    public static function checkStatus() {

        $currentDate = date('Y-m-d H:i:s');
        $expireDate = Auth::guard('web')->user()->expire_date;

        if(Auth::guard('web')->user()->status == 'wait' ||  empty(Auth::guard('web')->user()->status)){

            return 2;

        }else{

            if(strtotime($expireDate) >= strtotime($currentDate) ){

                return 1;
    
            }else{
    
                return 0;
                
            }

        }
    }
}