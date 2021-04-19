<?php

namespace App\Http\Controllers\student\mocktest\key_1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class ReadingController extends Controller
{

    public static function index()
    {
        return view('student.mocktest.key_1.reading');
    }
    

    public static function exam(Request $request)
    {
        
        //dd($request->all());

        $result = array('1' => 'F','2' => 'D','3' => 'J','4' => 'C','5' => 'E','6' => 'GOODS','7' => 'LATITUDE',
            '8' => '9999','9' => 'PIRATES','10' => 'G','11' => 'F','12' => 'C','13' => 'E','14' => 'VIII',
            '15' => 'II','16' => 'X','17' => 'IV','18' => 'IX','19' => 'V','20' => '9999','21' => '9999','22' => '9999','23' => 'CONTACT',
            '24' => '9999','25' => 'FOOD','26' => 'NURSE','27' => 'C','28' => 'NO','29' => 'YES','30' => 'NO','31' => 'YES',
            '32' => 'NOT GIVEN','33' => 'YES','34' => 'LAUGH','35' => 'TOOLS','36' => 'SEQUENCES','37' => 'STIMULI','38' => 'C','39' => 'A',
            '40' => 'E');

        $quest_eight = ['TRADING CENTRE','TRADING CENTER'];

        $quest_twenty = "/^(a|b|g)$/i";

        $quest_twfour = ['DISEASE','DISEASES'];

        $score = 0;
        $total = count($result);
        $count_ans = 0;

        $i = 0;

        $add_answer = $request->input('check20');

        switch(count($add_answer)){
            case '1':
                $add_answer = array("No answer","No answer");
                array_push($add_answer, $request->input('check20')[0]);
            break;
            case '2':
                $add_answer = array("No answer");
                array_push($add_answer,$request->input('check20')[0], $request->input('check20')[1]);
            break;
        }

        // dd($add_answer);

        foreach ($result as $key => $value){ 

            if($key == '20' || $key == '21' || $key == '22') {

                if(preg_match($quest_twenty, $add_answer[$count_ans])){
                    $score++;
                    $as[$key] = 1;
                    $count_ans += 1;
                }else{
                    $as[$key] = 0;
                    $count_ans += 1;
                }

            }elseif($key == '24'){
                if($quest_twfour[0] == @$request->input('question'.$key) || $quest_twfour[1] == @$request->input('question'.$key)){
                    $score++;
                    $as[$key] = 1;
                }else{
                    $as[$key] = 0;
                }

            } elseif ($key == '8') {
                if($quest_eight[0] == @$request->input('question'.$key) || $quest_eight[1] == @$request->input('question'.$key)){
                $score++;
                $as[$key] = 1;
                }else{
                    $as[$key] = 0;
                }
            }else{
                if($value == @$request->input('question'.$key)){
                    $score++;
                    $as[$key] = 1;
                }else{
                    $as[$key] = 0;
                }
                
            }
                
 
        }

        

        $total_data = array('score' => $score, 
            'total' => $total);
         
        //dd($total_data); 

        for($i = 0; $i <= 2; $i++) {
            if(empty($request->input('check20')[$i])) {
                $check20[$i] = '';
            } else {
                $check20[$i] = $request->input('check20')[$i];
            }
        }


        $total_exam = DB::table('read_score')
        ->insert(['std_id' => $request->std_id,
                'classroom_id' => $request->classroom_id,
                'set_exam' => $request->set_exam,
                'type' => 'R',
                'q1' => $request->question1,
                'q2' => $request->question2,
                'q3' => $request->question3,
                'q4' => $request->question4,
                'q5' => $request->question5,
                'q6' => $request->question6,
                'q7' => $request->question7,
                'q8' => $request->question8,
                'q9' => $request->question9,
                'q10' => $request->question10,
                'q11' => $request->question11,
                'q12' => $request->question12,
                'q13' => $request->question13,
                'q14' => $request->question14,
                'q15' => $request->question15,
                'q16' => $request->question16,
                'q17' => $request->question17,
                'q18' => $request->question18,
                'q19' => $request->question19,
                'q20' => $add_answer[0],
                'q21' => $add_answer[1],
                'q22' => $add_answer[2],
                'q23' => $request->question23,
                'q24' => $request->question24,
                'q25' => $request->question25,
                'q26' => $request->question26,
                'q27' => $request->question27,
                'q28' => $request->question28,
                'q29' => $request->question29,
                'q30' => $request->question30,
                'q31' => $request->question31,
                'q32' => $request->question32,
                'q33' => $request->question33,
                'q34' => $request->question34,
                'q35' => $request->question35,
                'q36' => $request->question36,
                'q37' => $request->question37,
                'q38' => $request->question38,
                'q39' => $request->question39,
                'q40' => $request->question40,
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
                'read_score_total' => $score]);

           return redirect('success');



    }
}
