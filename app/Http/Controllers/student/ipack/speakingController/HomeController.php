<?php

namespace App\Http\Controllers\student\ipack\speakingController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Speaking;
use DB;
use Auth;
use Session;

class HomeController extends Controller
{
    public function index()
    {
        return view('student.ipack.speaking.home');
    }

    public function status_speaking() {

        $speakings = Speaking::querySpeaking(auth('web')->user()->id);

        return view('student.ipack.speaking.status_speaking', compact('speakings'));
    }

    public function status_speaking_topic($topic)    {   

        $topic = Speaking::status_speaking_topic($topic); 

        return view('student.ipack.speaking.status_speaking_topic',compact('topic'));
    }

}
