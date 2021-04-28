<?php

namespace App\Http\Controllers\student\isac\writingController;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Model\Writing;
use App\Model\PointsWriting;


class WritingController extends Controller
{

    public function index(Request $request) {

        $data = array(
            'task' => $request->task,
            'mode' => $request->mode,
            'imgPath' => $request->imgPath,
            'code_sac' => $request->code_sac,
            'test_type' => $request->test_type,
            'header_test' => $request->header_test,
            'level' => $request->level,
        );

        // dd($data);
        return view('student.isac.writing.writing_test', compact('data'));
    }

    public function store_sac(Request $request) {

         // N = Sent
        // Y = Success
        // W | TH_S = Pending
        // ST_S = Work in progres

        if(auth('student')->user()->std_pointsac < 1) {
            session()->flash('message', 'ขออภัยคุณมี Point ไม่เพียงพอสำหรับการใช้งาน');
            return redirect('user_home');
        }

        $date_now = date('Y-m-d H:i:s');

        if($request->btn_status == 'submit' || empty($request->btn_status)) {

            DB::beginTransacTion();

            try {

                $due_date = strtotime('+7 day', strtotime($date_now));
                $due_date = date('Y-m-d H:i:s', $due_date);

                $result = DB::table('text_result')
                    ->insert(
                        [
                            'code_test' => $request->input('code_test'),
                            'std_id' => auth('student')->user()->std_id,
                            'test_type' => $request->input('test_type'),
                            'header_test' => $request->input('header_test'),
                            'text' => $request->input('text_result'),
                            'mode' => $request->input('mode'),
                            'status' => 'N',
                            'level' => $request->input('level'),
                            'targetbrand' => $request->input('targetbrand'),
                            'sent_date' => $date_now,
                            'due_date' => $due_date,
                        ]
                    );

                    // dd($result);

                
                if($result) {

                    PointsWriting::decreasePoint();

                    DB::table('log')
                        ->insert([
                            'std_id' => auth('student')->user()->std_id,
                            'content' => 'Send '.$request->input('test_type').' '.$request->input('header_test'),
                            'tab'=>'SAC Online',
                            'score'=>'-1 Point',
                        ]);

                    DB::commit();
                    
                    return redirect('status_writing');
                }


            } catch(Exception $e) {
                DB::rollback();
                return $e->getMessage();
            }


        } else if($request->btn_status == 'save') {

            DB::beginTransacTion();

            try {

                $result = DB::table('text_result')
                    ->insert(
                        [
                            'code_test' => $request->input('code_test'),
                            'std_id' => auth('student')->user()->std_id,
                            'test_type' => $request->input('test_type'),
                            'header_test' => $request->input('header_test'),
                            'text' => $request->input('text_result'),
                            'mode' => $request->input('mode'),
                            'status' => 'ST_S',
                            'level' => $request->input('level'),
                            'targetbrand' => $request->input('targetbrand'),
                            'sent_date' => $date_now
                        ]
                    );

                if($result) {
                    DB::table('log')
                        ->insert([
                            'std_id' => auth('student')->user()->std_id,
                            'content' => 'Save '.$request->input('test_type').' '.$request->input('header_test'),
                            'tab'=>'SAC Online'
                        ]);
                
                    DB::commit();

                    return redirect('status_writing');
                }

            } catch(Exception $e) {
                DB::rollback();
                return $e->getMessage();
            }

        }
        return 'Something went wrong! Please contact to customer service.';
    }
}

