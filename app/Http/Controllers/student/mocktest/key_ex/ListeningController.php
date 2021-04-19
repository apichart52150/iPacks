<?php

namespace App\Http\Controllers\student\mocktest\key_ex;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * 
 */
class ListeningController extends Controller
{

    public static function index() {

    	return view('student.mocktest.key_ex.listening');
    }

    // insert listening
    public static function exam(Request $request) {
        
    	$result = ['1' => '743002', '2' => 'INTERNATIONAL', '3' => '99999', '4' => '99999', '5' => 'ECHO', '6' => 'CREDIT CARD', 
    			'7' => '99999', '8' => '99999', '9' => '99999', '10' => 'PAVEMENT', '11' => 'A', '12' => 'C', '13' => 'B',
    			'14' => 'C', '15' => 'A', '16' => 'F', '17' => 'A', '18' => 'G', '19' => 'E', '20' => 'D', '21' => '99999',
    			'22' => '99999', '23' => '99999', '24' => '99999', '25' => 'F', '26' => 'H', '27' => 'C', '28' => 'D', '29' => 'B',
    			'30' => 'A', '31' => 'BEACH EROSION', '32' => '99999', '33' => 'STORM', '34' => 'CONTINENT', '35' => 'GEOLOGY',
    			'36' => '99999', '37' => 'SPOON', '38' => 'PERMANENT MARKER', '39' => '99999', '40' => '99999'];

    	$quest_3_start = ['6.45', '06.45', '6.45 AM', '6.45AM', '6.45A.M.','6.45 A.M.', '06.45 AM', '06.45AM', '06.45 A.M.', '06.45A.M.'];
        $quest_3_end = ['6.15', '6.15 PM', '6.15PM', '6.15 P.M.', '6.15P.M.', '18.15'];
    	$quest_4 = ['THIRTY', '30'];
    	$quest_7 = ['SEVEN', '7 DAYS', 'ONE WEEK', '1 WEEK', 'A WEEK'];
    	$quest_8 = ['1,000', '1 THOUSAND', 'A THOUSAND','ONE THOUSAND', '1000'];
    	$quest_9 = ['HIS LUGGAGE', 'THE LUGGAGE', 'LUGGAGE'];
    	$quest21_22 = ['B', 'D'];
    	$quest23_24 = ['A', 'E'];
    	$quest_32 = ['FIXED CAMERA', 'CAMERA'];
    	$quest_36 = ['ROUNDED', 'ROUND'];
    	$quest_39 = ['LAYERS OF NEWSPAPER', 'NEWSPAPER','NEWSPAPERS', 'LAYERS OF NEWSPAPERS'];
    	$quest_40 = ['IDENTIFICATION LABEL', 'LABEL'];



    	$score = 0;
    	$total = count($result);

    	foreach($result as $key => $value) {

    		if($key == '3') {
    			if (in_array(@$request->input('q'.$key)[0],$quest_3_start) && in_array(@$request->input('q'.$key)[1], $quest_3_end)) {

	                $score++;
	                $as[$key] = 1;

	            }else{

	                $as[$key] = 0;

	            }
    		} elseif($key == '4') {
    			if (in_array($request->input('q'.$key), $quest_4)) {

    				$score++;
    				$as[$key] = 1;

    			} else {

    				$as[$key] = 0;

    			}
    		} elseif($key == '7') {
    			if (in_array($request->input('q'.$key), $quest_7)) {

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
    		} elseif ($key == '9') {
    			if (in_array($request->input('q'.$key), $quest_9)) {

    				$score++;
    				$as[$key] = 1;

    			} else {

    				$as[$key] = 0;

    			}
    		} elseif ($key == '21') {
    			if (in_array(@$request->input('q21')[0], $quest21_22)) {

    				$score++;
    				$as[$key] = 1;

    			} else {

    				$as[$key] = 0;

    			}
    		} elseif ($key == '22') {
    			if (in_array(@$request->input('q21')[1], $quest21_22)) {

    				$score++;
    				$as[$key] = 1;

    			} else {

    				$as[$key] = 0;

    			}
    		} elseif ($key == '23') {
    			if (in_array($request->input('q23')[0], $quest23_24)) {

    				$score++;
    				$as[$key] = 1;

    			} else {

    				$as[$key] = 0;

    			}
    		} elseif ($key == '24') {
    			if (in_array($request->input('q23')[1], $quest23_24)) {

    				$score++;
    				$as[$key] = 1;

    			} else {

    				$as[$key] = 0;

    			}
    		} elseif ($key == '32') {
    			if (in_array($request->input('q'.$key), $quest_32)) {

    				$score++;
    				$as[$key] = 1;

    			} else {

    				$as[$key] = 0;

    			}
    		} elseif ($key == '36') {
    			if (in_array($request->input('q'.$key), $quest_36)) {

    				$score++;
    				$as[$key] = 1;

    			} else {

    				$as[$key] = 0;

    			}
    		} elseif ($key == '39') {
    			if (in_array($request->input('q'.$key), $quest_39)) {

    				$score++;
    				$as[$key] = 1;

    			} else {

    				$as[$key] = 0;

    			}
    		} elseif ($key == '40') {
    			if (in_array($request->input('q'.$key), $quest_40)) {

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

    	if ($request->q3 != null || $request->q3 != '') {
    		$q3 = implode(' - ', $request->q3);
    	} else {
    		$q3 = '';
    	}


    	$total_exam = DB::table('lis_score')
		->insert(['std_id' => $request->std_id,
		    'classroom_id' => $request->classroom_id,
		    'set_exam' => $request->set_exam,
		    'type' => 'L',
		    'q1' => $request->q1,
		    'q2' => $request->q2,
		    'q3' => $q3,
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
		    'q21' => $request->q21[0],
		    'q22' => $request->q21[1],
		    'q23' => $request->q23[0],
		    'q24' => $request->q23[1],
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