<?php

namespace App\Http\Controllers\student\isac\speakingController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Speaking;
use DB;
use Auth;
use Session;

class HomeController extends Controller
{
    public function __construct() {
        $this->middleware('auth:student');
    }
    
    public function index()
    {
        return view('student.isac.speaking.home');
    }

    public function status_speaking() {

        $speakings = Speaking::querySpeaking(auth('student')->user()->std_id);

        return view('student.isac.speaking.status_speaking', compact('speakings'));
    }

    public function status_speaking_topic($topic)    {   

        $topic = Speaking::status_speaking_topic($topic); 

        return view('student.isac.speaking.status_speaking_topic',compact('topic'));
    }

    
    public function insertlog(Request $request) {

        $checkLog = DB::table('speaking_log')
        ->where('std_id', $request->std_id)
        ->where('browser', $request->browser)
        ->get();

        if(count($checkLog) <= 0) {
            $insLog = DB::table('speaking_log')
            ->insert([
                'std_id' => $request->std_id,
                'browser' => $request->browser
            ]);
        } else {

            if($checkLog[0]->created_at < date('Y-m-d H:i:s')) {

                $row_id = $checkLog[0]->id;
        
                $update = DB::table('speaking_log')
                ->where('id', $row_id)
                ->update([
                    'browser' => $request->browser,
                    'created_at' => date('Y-m-d H:i:s')
                ]);
            } 
        }
    }

}
