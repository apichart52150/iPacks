<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Session;
use App\Model\CheckStatus;



class HomeController extends Controller 
{
    
    public function index(){

        $status = CheckStatus::checkStatus();

        switch($status){
            case 1: 
                return view('student.user_home');
            break;
            case 2: 
                return redirect('success')->with('status', 'Welcome!');
            break;
            case 0: 
                return view('student.expire');
            break;
        }
        
    }

    public function ipack_reading(){
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