<?php

namespace App\Http\Controllers\student\mocktest\key_2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ListeningController extends Controller {


    public static function index()
    {
        
        return view('student.mocktest.key_2.listening');
    }
    

    public function exam(Request $request) {
  
        $result = array('1' => '9999','2' => 'ITALY','3' => '9999','4' => '9999','5' => '9999','6' => '9999','7' => 'CASH',
        '8' => 'CAMPBELL','9' => '9999','10' => '9999','11' => 'C','12' => 'A','13' => 'C','14' => 'D',
        '15' => 'B','16' => '9999','17' => '9999','18' => '9999','19' => '9999','20' => '9999',
        '21' => 'C','22' => 'B','23' => 'B','24' => 'A','25' => 'D',
        '26' => 'C','27' => 'B','28' => 'C','29' => 'A','30' => 'B',
        '31' => 'SLAVES','32' => 'SALARY','33' => 'TAXES','34' => 'WOUNDS','35' => 'PRESERVING',
        '36' => 'SMELLS','37' => 'MOUTHWASH','38' => 'SKIN','39' => 'OIL','40' => 'COFFIN');

        $quest_1 = ['2','TWO'];
        $quest_3 = ['17','SEVENTEEN'];
        $quest_4 = ['2ND AUGUST','2 AUGUST','AUGUST 2','AUGUST 2ND'];
        $quest_5 = ['630 POUNDS','630 P','630POUNDS'];
        $quest_6 = ['BREAKFAST','LUNCH'];
        $quest_9 = ['0653 98811','065398811'];
        $quest_10 = ['50%','FIFTY PERCENT','50 PERCENT','50PERCENT','50PER CENT','50 PER CENT'];
        $quest_16 = ['A','E','F','G','J'];

        $score = 0;
        $total = count($result);

        $add_answer6 = $request->input('q6');
        switch(count($add_answer6)){
            case '1':
                array_push($add_answer6, "No answer");
            break;
        }

        $add_answer16 = $request->input('q16');
        switch(count($add_answer16)){
            case '1':
                array_push($add_answer16, "No answer");
            break;
        }

        foreach ($result as $key => $value) {
        
            if($key == '1'){
                if(in_array(@$request->input('q'.$key),$quest_1)){

                    $score++;
                    $as[$key] = 1;

                }else{

                    $as[$key] = 0;
                }
            }elseif($key == '3'){
                if($quest_3[0] == @$request->input('q'.$key) || $quest_6[0] == @$request->input('q'.$key)[1]){

                    $score++;
                    $as[$key] = 1;

                }else{
                    $as[$key] = 0;
                }
                
            }elseif($key == '4'){
                if($quest_4[0] == @$request->input('q'.$key) || $quest_4[1] == @$request->input('q'.$key) ||$quest_4[2] == @$request->input('q'.$key) || $quest_4[3] == @$request->input('q'.$key))
                {

                    $score++;
                    $as[$key] = 1;
                }else{

                    $as[$key] = 0;
                }

            }elseif ($key == '5'){
                if(in_array(@$request->input('q'.$key), $quest_5)){

                    $score++;
                    $as[$key] = 1;
                    
                }else{

                    $as[$key] = 0;
                }

            }elseif($key == '6'){
            
                if(in_array(@$request->input('q'.$key)[0], $quest_6) && in_array(@$request->input('q'.$key)[1], $quest_6)){
                    $score++;
                    $as[$key] = 1;
                }else{
                    $as[$key] = 0;
                }
                
            }elseif($key == '9'){
                if(in_array(@$request->input('q'.$key), $quest_9)){
                    $score++;
                    $as[$key] = 1;
                }else{
                    $as[$key] = 0;
                }

            }elseif ($key == '10') {
                if(in_array(@$request->input('q'.$key), $quest_10)){

                    $score++;
                    $as[$key] = 1;
                }else{

                    $as[$key] = 0;
                }
                
            }elseif($key == '16' || $key == '17' || $key == '18' || $key == '19' || $key == '20') {

                $arr[$key] = @$request->input('q'.$key)[0];

                $check_arr = array_keys($arr,@$request->input('q'.$key));

                if(count($check_arr) <= 1){
                    if(in_array(@$request->input('q'.$key),$quest_16)){

                        $score++;
                        $as[$key] = 1;

                    }else{

                        $as[$key] = 0;
                    }
                }else{

                $as[$key] = 0;

                }
            
            }else{

            if($value == @$request->input('q'.$key)){

                $score++;
                $as[$key] = 1;

            }else{

                $as[$key] = 0;
            }
        
        }   


    }


    $total_data = array('score' => $score, 
    'total' => $total); 


    $total_exam = DB::table('lis_score')
        ->insert(['std_id' => $request->std_id,
        'classroom_id' => $request->class_id,
        'set_exam' => $request->set_exam,
        'type' => 'L',
        'q1' => $request->q1,
        'q2' => $request->q2,
        'q3' => $request->q3,
        'q4' => $request->q4,
        'q5' => $request->q5,
        'q6' => $add_answer6,
        'q7' => $request->q7,
        'q8' => $request->q8,
        'q9' => $request->q9,
        'q10' => $request->q10,
        'q11' => $request->q11,
        'q12' => $request->q12,
        'q13' => $request->q13,
        'q14' => $request->q14,
        'q15' => $request->q15,
        'q16' => $request->q16,
        'q17' => $request->q17,
        'q18' => $request->q18,
        'q19' => $request->q19,
        'q20' => $request->q20,
        'q21' => $request->q21,
        'q22' => $request->q22,
        'q23' => $request->q23,
        'q24' => $request->q24,
        'q25' => $request->q25,
        'q26' => $request->q26,
        'q27' => $request->q27,
        'q28' => $request->q28,
        'q29' => $request->q29,
        'q30' => $request->q30,
        'q31' => $request->q31,
        'q32' => $request->q32,
        'q33' => $request->q33,
        'q34' => $request->q34,
        'q35' => $request->q35,
        'q36' => $request->q36,
        'q37' => $request->q37,
        'q38' => $request->q38,
        'q39' => $request->q39,
        'q40' => $request->q40,
        'as1' => $as[1],
        'as2' => $as[2],
        'as3' => $as[3],
        'as4' => $as[4],
        'as5' => $as[5],
        'as6' => $as[6],
        'as7' => $as[7],
        'as8' => $as[8],
        'as9' => $as[9],
        'as10' => $as[10],
        'as11' => $as[11],
        'as12' => $as[12],
        'as13' => $as[13],
        'as14' => $as[14],
        'as15' => $as[15],
        'as16' => $as[16],
        'as17' => $as[17],
        'as18' => $as[18],
        'as19' => $as[19],
        'as20' => $as[20],
        'as21' => $as[21],
        'as22' => $as[22],
        'as23' => $as[23],
        'as24' => $as[24],
        'as25' => $as[25],
        'as26' => $as[26],
        'as27' => $as[27],
        'as28' => $as[28],
        'as29' => $as[29],
        'as30' => $as[30],
        'as31' => $as[31],
        'as32' => $as[32],
        'as33' => $as[33],
        'as34' => $as[34],
        'as35' => $as[35],
        'as36' => $as[36],
        'as37' => $as[37],
        'as38' => $as[38],
        'as39' => $as[39],
        'as40' => $as[40],
        'lis_score_total' => $score]);


        return redirect('success');

    }
}
