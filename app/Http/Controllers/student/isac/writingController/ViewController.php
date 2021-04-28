<?php

namespace App\Http\Controllers\student\isac\writingController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\PointsWriting;
use Auth;
use DB;

class ViewController extends Controller
{
    public function view_commented($sacId) {

        $data = DB::table('text_result')
            ->select('text_result.id','text_result.targetbrand','text_result.score','text_result.comment','text_result.test_type','text_result.code_test','text_result.header_test','text_result.level', 'text_result.status','text_result.th_id','text_result.sent_date', 'text_result.text','text_result.th_text','text_result.mode', 'users.name as th_name')
            ->leftjoin('users','users.id', '=', 'text_result.th_id')
            ->where('text_result.id', '=', $sacId)
            ->get()[0];

        if($data->level == 0) {
            $img_path = "public/assets/images/fi-fx/{$data->code_test}.jpg";
        } else if($data->level == 1) {
            $img_path = "public/assets/images/ks-ix/{$data->code_test}.jpg";
        } else if($data->level == 2) {
            $img_path = "public/assets/images/gt/{$data->code_test}.jpg";
        }

        return view('student.isac.writing.comment', compact('data', 'img_path'));
    }

    public function view_saved($sacId) {

        $data = DB::table('text_result')
            ->select('*')
            ->where('id', '=', $sacId)
            ->get()[0];
    
        if($data->level == 0) {
            $img_path = "public/assets/images/fi-fx/{$data->code_test}.jpg";
        } else if($data->level == 1) {
            $img_path = "public/assets/images/ks-ix/{$data->code_test}.jpg";
        } else if($data->level == 2) {
            $img_path = "public/assets/images/gt/{$data->code_test}.jpg";
        }
		   
        return view('student.isac.writing.save', compact('data', 'img_path'));
    }

    public function store_sac_save(Request $request) {

        $date_now = date('Y-m-d H:i:s');

        if(PointsWriting::checkPoint() < 1) {
            session()->flash('message', 'ขออภัยคุณมี Point ไม่เพียงพอสำหรับการใช้งาน');
            return redirect('user_home');
        }



        if($request->btn_status == 'save') {

            DB::beginTransacTion();

            try {

                DB::table('text_result')
                    ->where('id', $request->sacId)
                    ->update([
                    'targetbrand' => $request->targetbrand,
                    'sent_date' => $date_now,
                    'text' => $request->text_result,
                    'status' => 'ST_S']);

                DB::commit();

                session()->flash('message','<div class="alert alert-success" role="alert"><i class="mdi mdi-check-all mr-2"></i><strong>Save Success</strong></div>');

            } catch(Exception $e) {
                DB::rollback();
                return $e->getMessage();
            }

        } else if($request->btn_status == 'submit') {

            DB::beginTransacTion();

            try {

                $due_date = strtotime('+7 day', strtotime($date_now));
                $due_date = date('Y-m-d H:i:s', $due_date);

                $update = DB::table('text_result')
                    ->where('id', $request->sacId)
                    ->update([
                    'targetbrand' => $request->targetbrand,
                    'sent_date' => $date_now,
                    'due_date' => $due_date,
                    'text' => $request->text_result,
                    'status' => 'N']);

                if($update) {
                    PointsWriting::decreasePoint();
    
                    DB::table('log')->insert([
                        'std_id' => auth('student')->user()->std_id,
                        'content' => 'Send '.$request->input('test_type').' '.$request->input('header_test'),
                        'tab'=> 'SAC Online',
                        'score'=>'-1 Point',
                        ]);
    
                    DB::commit();
    
                    session()->flash('message','<div class="alert alert-success" role="alert"><i class="mdi mdi-check-all mr-2"></i><strong>Submit Success</strong></div>');
                }


            } catch(Exception $e) {
                DB::rollback();
                return $e->getMessage();
            }

        }


        return redirect('status_writing');
    }
}
