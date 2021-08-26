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
            
        $currentDate = date('Y-m-d H:i:s');
        $lastDate = "2021-08-20 23:59:59";

        if(auth('student')->user()->std_level == 'user'){
            if(strtotime($lastDate) >= strtotime($currentDate)){
                return view('student.user_home');
            }else{
                return view('student.expire');
            }
        }else{
            return view('student.user_home');
        }
        
    }

    public function isac_reading(){
        if (auth('student')->user()->session_id == session()->get('ss_id')) {
            return redirect()->to("https://newcambridgethailand.com/isac_reading/access/G4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ/".auth('student')->user()->std_id);
        }else {
            return redirect()->to('user_logout');
        }
    }
		
    public function strategies_pack(){
        if (auth('student')->user()->session_id == session()->get('ss_id')) {
            return redirect()->to("https://newcambridgethailand.com/strategies-pack/access/RG4gERG9AlIDiwiaWF0IjoxNTE2MjM5MDI/".auth('student')->user()->std_id);
        }else {
            return redirect()->to('user_logout');
        }

    }

    public function topic_pack(){
        if (auth('student')->user()->session_id == session()->get('ss_id')) {
            return redirect()->to("https://newcambridgethailand.com/topic-packs/access/wRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c/".auth('student')->user()->std_id );
        }else {
            return redirect()->to('user_logout');
        }

    }
		

}