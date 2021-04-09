<?php

namespace App\Http\Controllers\student\isac\speakingController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use DB;
use App\Model\Speaking;
use App\Model\Points;

class SpeakingController extends Controller
{

    public function intro($topic) {

        $topics = [
            'title' => substr($topic, 0, 5) .' '. substr($topic, 5, 7),
            'img' => $topic
        ];
        
        return view('student.isac.speaking.speaking_intro', compact('topics'));
    }

    public function record($topic) {

        $topics = [
            'title' => substr($topic, 0, 5) .' '. substr($topic, 5, 7),
            'img' => $topic
        ];
        
        return view('student.isac.speaking.speaking_record', compact('topics'));
    }

    public function submit($topic) {

        $topics = [
            'title' => substr($topic, 0, 5) .' '. substr($topic, 5, 7)
        ];

        $courses = Speaking::getCourse();

        return view('student.isac.speaking.speaking_submit', compact('courses','topics'));
    }


    public function saveSound(Request $request) {

        $sound = $request->file('audio_data');

        $path = $sound->getClientOriginalName().'_'.date('dmYHis').'.mp3';
        $topic = substr($sound->getClientOriginalName(), 0 ,5).' '.substr($sound->getClientOriginalName(), 5 ,7);

        $location = public_path('file_record/'.Session('std_id'));

        if(is_dir($location)){
            $sound->move($location, $path);
        } else {
            $sound->move($location, $path);
        }

        $profile = DB::table('student')
            ->select('crm_std_id', 'std_pointspeaking')
            ->where('std_id', Session('std_id'))
            ->get();

        $crm_std_id = $profile[0]->crm_std_id;

        if(Points::checkPoint() > 0) {

            if(empty($crm_std_id)) {
                $crm_std_id = 0;
            } else {
                $crm_std_id = $crm_std_id;
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
                        'crm_std_id' => $crm_std_id,
                        'std_id' => Session('std_id'),
                        'topic' => $topic,
                        'path' => Session('std_id').'/'.$path,
                        'status' => 'sent',
                        'due_date' => $due_date
                    ]
                );

                Points::decreasePoint();
        
                $insertLog = DB::table('log')
                    ->insert([
                        'std_id' => Session('std_id'),
                        'content' => "iSAC Speaking : ".$topic,
                        'tab' => 'iSAC Speaking',
                        'score' => "-1 Point"
                    ]);

                Session::put('lastRowId', $insertSpeaking);

                DB::commit();

                return response()->json(['success' => 'Upload success']);

            } catch(Exception $e) {
                DB::rollback();
                return response()->json(['fail' => 'Upload failed : '.$e->getMessage()]);
            }

        } else {
            return response()->json(['fail' => 'Your dont\'t have point']);
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
