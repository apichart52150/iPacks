<?php

namespace App\Http\Controllers\student\mocktest\key_1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ListeningController extends Controller {


    public static function index()
    {
        
        return view('student.mocktest.key_1.listening');
    }
    

    public static function exam(Request $request) {

        $result = array('1' => 'G','2' => 'C','3' => 'C','4' => 'B','5' => 'A','6' => '9999','7' => '9999',
        '8' => '9999','9' => '9999','10' => '9999','11' => 'C','12' => 'B','13' => 'C','14' => '9999',
        '15' => '9999','16' => '9999','17' => 'EVENING','18' => '9999','19' => '9999','20' => 'GOLF CLUB',
        '21' => '9999','22' => 'LECTURE','23' => 'B','24' => 'PINK SLIP','25' => 'DEPARTMENTAL',
        '26' => 'INFORMATION DESK','27' => '9999','28' => '9999','29' => 'ESSAY PLANS','30' => '9999',
        '31' => 'AUSTRALIA','32' => '9999','33' => 'LOOKING FOR FOOD','34' => 'START TO FLY','35' => '9999',
        '36' => '9999','37' => 'DIE','38' => '9999','39' => '9999','40' => '9999');

        $quest_6 = "/^(a|e)$/i";
        
        $quest_7 = ['SLIM','SLIM BUILD'];
        $quest_8 = ['BLACK','CURLY BLACK','BLACK HAIR'];
        $quest_9 = ['35','THIRTY-FIVE','THIRTY FIVE'];  
        $quest_10 = ['SCAR','SMALL SCAR'];

        $quest_14 = "/^(a|d)$/i";

        $quest_16 = ['75','75 POUNDS','SEVENTY-FIVE','SEVENTY-FIVE POUNDS','SEVENTY FIVE','SEVENTY FIVE POUNDS'];
        $quest_18 = ['DINNER','4-COURSE DINNER','4 COURSE DINNER', 'FOUR COURSE DINNER', 'FOUR-COURSE DINNER'];
        $quest_19 = ['52','52 POUNDS','FIFTY-TWO','FIFTY-TWO POUNDS','FIFTY TWO','FIFTY TWO POUNDS'];
        $quest_21 = ['A+','A PLUS','A +'];
        $quest_27 = ['25 PENCE','25P','25 P','TWENTY-FIVE PENCE'];
        $quest_28 = ['SUMMARISE','SUMMARIZE'];
        $quest_30 = ['FEEDBACK','GIVE FEEDBACK'];
        $quest_32 = ['SPEED','FLIGHT SPEED','SPEED OF FLIGHT'];
        $quest_35 = ['FULLY GROWN','FULL ADULT SIZE'];
        $quest_36 = ['LEAVE THE NEST','LEAVE NEST'];
        $quest_38 = ['ATTACH IDENTIFICATION RINGS','ATTACH ID RINGS'];
        $quest_39 = ['NOTE THE SEX','NOTE SEX'];
        $quest_40 = ['HEALTH','GENERAL HEALTH'];

        $score = 0;
        $total = count($result);
        $count_ans = 0;  

        //dd($request->all());

        $add_answer6 = $request->input('ques_lis_6');
        switch(count($add_answer6)){
            case '1':
                array_push($add_answer6, "No answer");
            break;
        }

        $add_answer14 = $request->input('ques_lis_14');
        switch(count($add_answer14)){
            case '1':
                array_push($add_answer14, "No answer");
            break;
        }
        

        foreach ($result as $key => $value) {

            if($key == '6'){

                if(preg_match($quest_6, $add_answer6[0]) && preg_match($quest_6, $add_answer6[1])){
                    $score++;
                    $as[$key] = 1;
                }else{
                    $as[$key] = 0;
                }

            }elseif($key == '7'){

                if($quest_7[0] == @$request->input('ques_lis_'.$key) || $quest_7[1] == @$request->input('ques_lis_'.$key)){

                    $score++;
                    $as[$key] = 1;
                }else{
                    $as[$key] = 0;
                }

            }elseif ($key == '8'){

                if($quest_8[0] == @$request->input('ques_lis_'.$key) || $quest_8[1] == @$request->input('ques_lis_'.$key) || $quest_8[2] == @$request->input('ques_lis_'.$key)){
                    $score++;
                    $as[$key] = 1;
                }else{
                    $as[$key] = 0;
                }

            }elseif($key == '9'){

                if($quest_9[0] == @$request->input('ques_lis_'.$key) || $quest_9[1] == @$request->input('ques_lis_'.$key) || $quest_9[2] == @$request->input('ques_lis_'.$key)){
                    $score++;
                    $as[$key] = 1;
                }else{
                    $as[$key] = 0;
                }

            }elseif ($key == '10') {

                if($quest_10[0] == @$request->input('ques_lis_'.$key) || $quest_10[1] == @$request->input('ques_lis_'.$key)){
                    $score++;
                    $as[$key] = 1;
                }else{
                    $as[$key] = 0;
                }

            }elseif ($key == '14' || $key == '15') {

                if(preg_match($quest_14, $add_answer14[$count_ans])){
                    $score++;
                    $as[$key] = 1;
                    $count_ans +=1;
                }else{
                    $as[$key] = 0;
                    $count_ans +=1;
                }

            }elseif ($key == '16') {

                if($quest_16[0] == @$request->input('ques_lis_'.$key) || $quest_16[1] == @$request->input('ques_lis_'.$key) || $quest_16[2] == @$request->input('ques_lis_'.$key) || $quest_16[3] == @$request->input('ques_lis_'.$key) || $quest_16[4] == @$request->input('ques_lis_'.$key) || $quest_16[5] == @$request->input('ques_lis_'.$key)){
                    $score++;
                    $as[$key] = 1;
                }else{
                    $as[$key] = 0;
                }

            }elseif ($key == '18') {

                if($quest_18[0] == @$request->input('ques_lis_'.$key) ||  $quest_18[1] == @$request->input('ques_lis_'.$key) || $quest_18[2] == @$request->input('ques_lis_'.$key)){
                        $score++;
                        $as[$key] = 1;
                }else{
                    $as[$key] = 0;
                }

            }elseif ($key == '19') {

                if($quest_19[0] == @$request->input('ques_lis_'.$key) || $quest_19[1] == @$request->input('ques_lis_'.$key) || $quest_19[2] == @$request->input('ques_lis_'.$key) || $quest_19[3] == @$request->input('ques_lis_'.$key) || $quest_19[4] == @$request->input('ques_lis_'.$key) || $quest_19[5] == @$request->input('ques_lis_'.$key)){
                        $score++;
                        $as[$key] = 1;
                }else{
                    $as[$key] = 0;
                }

            }elseif ($key == '21') {

                if($quest_21[0] == @$request->input('ques_lis_'.$key) || $quest_21[1] == @$request->input('ques_lis_'.$key) || $quest_21[2] == @$request->input('ques_lis_'.$key)){
                        $score++;
                        $as[$key] = 1;
                }else{
                    $as[$key] = 0;
                }

            }elseif ($key == '27') {

                if($quest_27[0] == @$request->input('ques_lis_'.$key) || $quest_27[1] == @$request->input('ques_lis_'.$key) || $quest_27[2] == @$request->input('ques_lis_'.$key) || $quest_27[3] == @$request->input('ques_lis_'.$key)){
                        $score++;
                        $as[$key] = 1;
                }else{
                    $as[$key] = 0;
                }

            }elseif ($key == '28') {

                if($quest_28[0] == @$request->input('ques_lis_'.$key) || $quest_28[1] == @$request->input('ques_lis_'.$key)){
                        $score++;
                        $as[$key] = 1;
                }else{
                    $as[$key] = 0;
                }

            }elseif ($key == '30') {

                if($quest_30[0] == @$request->input('ques_lis_'.$key) || $quest_30[1] == @$request->input('ques_lis_'.$key)){
                        $score++;
                        $as[$key] = 1;
                }else{
                    $as[$key] = 0;
                }

            }elseif ($key == '32') {

                if($quest_32[0] == @$request->input('ques_lis_'.$key) || $quest_32[1] == @$request->input('ques_lis_'.$key) || $quest_32[2] == @$request->input('ques_lis_'.$key)){
                        $score++;
                        $as[$key] = 1;
                }else{
                    $as[$key] = 0;
                }

            }elseif ($key == '35') {

                if($quest_35[0] == @$request->input('ques_lis_'.$key) || $quest_35[1] == @$request->input('ques_lis_'.$key)){
                        $score++;
                        $as[$key] = 1;
                }else{
                    $as[$key] = 0;
                }

            }elseif($key == '36'){

                if($quest_36[0] == @$request->input('ques_lis_'.$key) || $quest_36[1] == @$request->input('ques_lis_'.$key)){
                        $score++;
                        $as[$key] = 1;
                }else{
                    $as[$key] = 0;
                }

            }elseif ($key == '38') {

                if($quest_38[0] == @$request->input('ques_lis_'.$key) || $quest_38[1] == @$request->input('ques_lis_'.$key)){
                        $score++;
                        $as[$key] = 1;
                }else{
                    $as[$key] = 0;
                }

            }elseif ($key == '39') {

                if($quest_39[0] == @$request->input('ques_lis_'.$key) || $quest_39[1] == @$request->input('ques_lis_'.$key)){
                        $score++;
                        $as[$key] = 1;
                }else{
                    $as[$key] = 0;
                }

            }elseif ($key == '40') {

                if($quest_40[0] == @$request->input('ques_lis_'.$key) || $quest_40[1] == @$request->input('ques_lis_'.$key)){
                        $score++;
                        $as[$key] = 1;
                }else{
                    $as[$key] = 0;
                }

            }else{

                if($value == @$request->input('ques_lis_'.$key)){
                    $score++;
                    $as[$key] = 1;
                }else{
                    $as[$key] = 0;
                }
            
            }   
        }


        $total_data = array('score' => $score, 
        'total' => $total);    
    

        // dd($score);

        $total_exam = DB::table('lis_score')
        ->insert(['std_id' => $request->std_id,
            'classroom_id' => $request->classroom_id,
            'set_exam' => $request->set_exam,
            'type' => 'L',
            'q1' => $request->ques_lis_1,
            'q2' => $request->ques_lis_2,
            'q3' => $request->ques_lis_3,
            'q4' => $request->ques_lis_4,
            'q5' => $request->ques_lis_5,
            'q6' => $add_answer6[0].",".$add_answer6[1],
            'q7' => $request->ques_lis_7,
            'q8' => $request->ques_lis_8,
            'q9' => $request->ques_lis_9,
            'q10' => $request->ques_lis_10,
            'q11' => $request->ques_lis_11,
            'q12' => $request->ques_lis_12,
            'q13' => $request->ques_lis_13,
            'q14' => $add_answer14[0],
            'q15' => $add_answer14[1],
            'q16' => $request->ques_lis_16,
            'q17' => $request->ques_lis_17,
            'q18' => $request->ques_lis_18,
            'q19' => $request->ques_lis_19,
            'q20' => $request->ques_lis_20,
            'q21' => $request->ques_lis_21,
            'q22' => $request->ques_lis_22,
            'q23' => $request->ques_lis_23,
            'q24' => $request->ques_lis_24,
            'q25' => $request->ques_lis_25,
            'q26' => $request->ques_lis_26,
            'q27' => $request->ques_lis_27,
            'q28' => $request->ques_lis_28,
            'q29' => $request->ques_lis_29,
            'q30' => $request->ques_lis_30,
            'q31' => $request->ques_lis_31,
            'q32' => $request->ques_lis_32,
            'q33' => $request->ques_lis_33,
            'q34' => $request->ques_lis_34,
            'q35' => $request->ques_lis_35,
            'q36' => $request->ques_lis_36,
            'q37' => $request->ques_lis_37,
            'q38' => $request->ques_lis_38,
            'q39' => $request->ques_lis_39,
            'q40' => $request->ques_lis_40,
            'as1' => @$as[1],
            'as2' => @$as[2],
            'as3' => @$as[3],
            'as4' => @$as[4],
            'as5' => @$as[5],
            'as6' => @$as[6],
            'as7' => @$as[7],
            'as8' => @$as[8],
            'as9' => @$as[9],
            'as10' => @$as[10],
            'as11' => @$as[11],
            'as12' => @$as[12],
            'as13' => @$as[13],
            'as14' => @$as[14],
            'as15' => @$as[15],
            'as16' => @$as[16],
            'as17' => @$as[17],
            'as18' => @$as[18],
            'as19' => @$as[19],
            'as20' => @$as[20],
            'as21' => @$as[21],
            'as22' => @$as[22],
            'as23' => @$as[23],
            'as24' => @$as[24],
            'as25' => @$as[25],
            'as26' => @$as[26],
            'as27' => @$as[27],
            'as28' => @$as[28],
            'as29' => @$as[29],
            'as30' => @$as[30],
            'as31' => @$as[31],
            'as32' => @$as[32],
            'as33' => @$as[33],
            'as34' => @$as[34],
            'as35' => @$as[35],
            'as36' => @$as[36],
            'as37' => @$as[37],
            'as38' => @$as[38],
            'as39' => @$as[39],
            'as40' => @$as[40],
            'lis_score_total' => $score]);
             
        return redirect('success');

    }
}
