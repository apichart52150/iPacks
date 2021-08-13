<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Model\Login;


class HomeController extends Controller 
{
    public function index(){
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