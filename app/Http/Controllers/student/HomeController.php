<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Session;


class HomeController extends Controller 
{
    
    public function index(){

        // dd(Auth::user());

        $currentDate = date('Y-m-d H:i:s');
        $lastDate = "2021-08-20 23:59:59";

        $status = Auth::guard('web')->user()->status;

        if(auth('web')->user()->level == 'user'){

            if(strtotime($lastDate) >= strtotime($currentDate)){
                return view('student.user_home');
            }else{
                return view('student.expire');
            }

        }else{

            if($status == 'wait'){

                return redirect('success')->with('status', 'Welcome!');
    
            }elseif($status == 'expire'){
    
                return view('student.expire');
    
            }else{
    
                return view('student.user_home');
    
            }
        }
        
    }

    public function isac_reading(){
        if (auth('web')->user()->remember_token == session()->get('ss_id')) {
            return redirect()->to("https://newcambridgethailand.com/isac_reading/access/G4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ/".auth('web')->user()->id);
        }else {
            return redirect()->to('logout');
        }
    }
		
    public function strategies_pack(){
        if (auth('web')->user()->remember_token == session()->get('ss_id')) {
            return redirect()->to("https://newcambridgethailand.com/strategies-pack/access/RG4gERG9AlIDiwiaWF0IjoxNTE2MjM5MDI/".auth('web')->user()->id);
        }else {
            return redirect()->to('logout');
        }

    }

    public function topic_pack(){
        if (auth('web')->user()->remember_token == session()->get('ss_id')) {
            return redirect()->to("https://newcambridgethailand.com/topic-packs/access/wRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c/".auth('web')->user()->id );
        }else {
            return redirect()->to('logout');
        }

    }
		

}