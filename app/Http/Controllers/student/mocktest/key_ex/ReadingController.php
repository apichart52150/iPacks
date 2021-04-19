<?php

namespace App\Http\Controllers\student\mocktest\key_ex;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * 
 */
class ReadingController extends Controller
{
	
    public static function index() {

    	return view('student.mocktest.key_ex.reading');
    }

    // insert Reading
    public static function exam(Request $request) {

    	$result = ['1' => 'A', '2' => 'B', '3' => 'C', '4' => 'MARRIED LIFE', '5' => '99999', '6' => '99999', 
    			'7' => 'SYMBOLIC', '8' => '99999', '9' => 'RIGHT FOOT FIRST', '10' => 'D', '11' => 'F', '12' => 'C', '13' => 'E',
    			'14' => '99999', '15' => '99999', '16' => '99999', '17' => '99999', '18' => 'NOT GIVEN', '19' => 'TRUE', '20' => 'NOT GIVEN', '21' => 'NOT GIVEN',
    			'22' => 'C', '23' => 'B', '24' => 'A', '25' => 'F', '26' => 'G', '27' => 'D', '28' => 'A', '29' => 'B',
    			'30' => 'D', '31' => 'B', '32' => 'D', '33' => 'G', '34' => 'E', '35' => 'I',
    			'36' => 'B', '37' => 'C', '38' => 'E', '39' => 'G', '40' => 'F'];

    	$quest_5 = ['ALTAR', 'WEDDING ALTAR', 'MANDAPA'];		
    	$quest_6 = ['THE PROSPERITY', 'PROSPERITY'];
        $quest_8 = ['HER FAMILY', "HER FATHER'S FAMILY",'HER FATHERS FAMILY'];
        $quest_14 = ['10%', '10 PERCENT', '10 PER CENT','10 %','TEN PERCENT', 'TEN PER CENT'];
        $quest_15 = ['95%', 'NINETY-FIVE PERCENT', 'NINETY-FIVE PER CENT', '95 PER CENT','95 %'];
        $quest_16 = ['ONE THIRD', '1/3', 'ONE-THIRD','A THIRD'];
        $quest_17 = ['100', 'ONE HUNDRED', 'A HUNDRED'];

    	$score = 0;
    	$total = count($result);

    	foreach($result as $key => $value) {

    		if ($key == '5') {

                if (in_array($request->input('q'.$key), $quest_5)) {

                    $score++;
                    $as[$key] = 1;

                } else {

                    $as[$key] = 0;

                }

            } else if ($key == '6') {

                if (in_array($request->input('q'.$key), $quest_6)) {

                    $score++;
                    $as[$key] = 1;

                } else {

                    $as[$key] = 0;

                }

            } elseif ($key == '8') {

                if (in_array($request->input('q'.$key), $quest_8)) {

                    $score++;
                    $as[$key] = 1;

                } else {

                    $as[$key] = 0;

                }

            } elseif ($key == '14') {

                if (in_array($request->input('q'.$key), $quest_14)) {

                    $score++;
                    $as[$key] = 1;

                } else {

                    $as[$key] = 0;

                }
            } elseif ($key == '15') {

                if (in_array($request->input('q'.$key), $quest_15)) {

                    $score++;
                    $as[$key] = 1;

                } else {

                    $as[$key] = 0;

                }
            } elseif ($key == '16') {

                if (in_array($request->input('q'.$key), $quest_16)) {

                    $score++;
                    $as[$key] = 1;

                } else {

                    $as[$key] = 0;

                }
            } elseif ($key == '17') {

                if (in_array($request->input('q'.$key), $quest_17)) {

                    $score++;
                    $as[$key] = 1;

                } else {

                    $as[$key] = 0;

                }
            } else {

                if ($request->input('q'.$key) == $value) {

                    $score++;
                    $as[$key] = 1;

                } else {

                    $as[$key] = 0;

                }

            }
    	}

    	$total_data = array('score' => $score, 'total' => $total);


    	$total_exam = DB::table('read_score')
		->insert(['std_id' => $request->std_id,
		    'classroom_id' => $request->classroom_id,
		    'set_exam' => $request->set_exam,
		    'type' => 'R',
		    'q1' => $request->q1,
		    'q2' => $request->q2,
		    'q3' => $request->q3,
		    'q4' => $request->q4,
		    'q5' => $request->q5,
		    'q6' => $request->q6,
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
		    'read_score_total' => $score]);

    	return redirect('success');
    }
}