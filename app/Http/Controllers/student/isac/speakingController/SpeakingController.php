<?php

namespace App\Http\Controllers\student\isac\speakingController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Model\Speaking;

class SpeakingController extends Controller
{

    public function intro($topic) {

        $data = [
            'topic' => substr($topic, 0, 5) .' '. substr($topic, 5, 7),
            'images' => $topic
        ];
        
        return view('student.isac.speaking.speaking_intro', compact('data'));
    }

    public function record($topic) {

        $data = [
            'topic' => substr($topic, 0, 5) .' '. substr($topic, 5, 7),
            'images' => $topic
        ];

        // dd(Session::get('ss_id'));
        
        return view('student.isac.speaking.speaking_record', compact('data'));
    }

    public function submit($topic) {

        $topics = [
            'title' => substr($topic, 0, 5) .' '. substr($topic, 5, 7)
        ];

        return view('student.isac.speaking.speaking_submit', compact('topics'));
    }


    public function store(Request $request) {

        dd($request->all());

        $std_id = auth('web')->user()->id;

        $sound = $request->file('audio_data');

        $path = $sound->getClientOriginalName().'_'.date('dmYHis').'.mp3';
        $topic = substr($sound->getClientOriginalName(), 0 ,5).' '.substr($sound->getClientOriginalName(), 5 ,7);

        $location = public_path('file_record/'.$std_id);

        if(is_dir($location)){
            $sound->move($location, $path);
        } else {
            $sound->move($location, $path);
        }

        $due_date = date('Y-m-d H:i:s');
        $due_date = strtotime($due_date);
        $due_date = strtotime("+6 day", $due_date);
        $due_date = date('Y-m-d H:i:s', $due_date);

        // Insert Into table speaking
        DB::beginTransaction();
        
        try {

            $insertSpeaking = DB::table('speaking')
            ->insertGetId(
                [
                    'std_id' => $std_id,
                    'topic' => $topic,
                    'path' => $std_id.'/'.$path,
                    'status' => 'sent',
                    'due_date' => $due_date
                ]
            );

            DB::commit();

            return response()->json(['success' => 'Upload success']);

        } catch(Exception $e) {
            DB::rollback();
            return response()->json(['fail' => 'Upload failed : '.$e->getMessage()]);
        }

    }

    
    public function update_score_course(Request $request) {

        $update = DB::table('speaking')
        ->where('id', $request->lastRow)
        ->update([
            'expected_score' => $request->expected_score,
            'current_course' => $request->current_course
        ]);

        return redirect('isac_speaking_home');
    }

}
