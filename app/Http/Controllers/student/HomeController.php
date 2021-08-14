<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Model\Login;
use Session;
use DB;


class HomeController extends Controller 
{
    
    public function index(){

        $check = DB::table('student')
        ->select('session_id')
        ->where('std_id', '=', auth('student')->user()->std_id)
        ->first();

        // dd($check->session_id);

        if($check->session_id != session()->get('ss_id')){

            return redirect('user_logout');

        }else{

            $currentDate = date('Y-m-d H:i:s');
            $lastDate = "2021-08-20 23:59:59";

            if(auth('student')->user()->std_condition == 1){
                return view('student.user_home');
            }else{
                if(strtotime($lastDate) >= strtotime($currentDate)){
                    return view('student.user_home');
                }else{
                    return view('student.expire');
                }
            }

        }
        
    }

}