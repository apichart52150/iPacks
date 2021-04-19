<?php 

namespace App\Http\Controllers\student\mocktest\found_1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * 
 */
class ListeningController extends Controller
{
	
	public function index() {

		return view('student.mocktest.found_1.listening');

	}

	public function exam(Request $request) {



		$result = ['1' => '99999', '2' => '99999', '3' => '99999', '4' => '99999', '5' => '99999', '6' => 'GARDEN', 
    			'7' => '99999', '8' => 'C', '9' => 'G', '10' => 'B', '11' => 'C', '12' => 'A', '13' => 'C',
    			'14' => 'A', '15' => 'C', '16' => 'A', '17' => 'GENTLE EXERCISE', '18' => '99999', '19' => 'HEALTHY LIVING', '20' => 'RELAXATION', 
    			'21' => 'COLD WEATHER', '22' => 'YOUNG MOTHERS', '23' => 'STATISTICS SEMINAR', '24' => '99999', '25' => '99999', '26' => '99999', '27' => 'AGE GROUPS', '28' => '99999', '29' => '99999',
    			'30' => '99999', '31' => 'B', '32' => 'A', '33' => 'A', '34' => 'C', '35' => '99999',
    			'36' => 'COMPUTERS', '37' => 'COMFORTABLE', '38' => '99999', '39' => 'SUBURBAN', '40' => 'ENVIRONMENTAL ISSUES'];

    	$quest_1 = ['TELEPHONE', 'THE TELEPHONE'];
    	$quest_2 = ['14 KING STREET', '14 KING ST','FOURTEEN KING STREET'];
    	$quest_3 = ['AP12 7QT', 'AP127QT'];
    	$quest_4 = ['HAIRDRYER', 'HAIR-DRYER', 'HAIR DRYER'];
    	$quest_5 = ['10 PM', '10PM', '10 P.M.', '10P.M.','10','TEN', 'TEN PM'];
    	$quest_7 = ['WEDNESDAY', 'WEDS'];
    	$quest_18 = ['WEIGHT LIFTING', 'WEIGHTLIFTING','WEIGHT-LIFTING'];
    	$quest_24_25 = ['C', 'D'];
    	$quest_26 = ['MAIN SQUARE', 'THE MAIN SQUARE'];
    	$quest_28 = ['COOKERY COMPETITION', 'A COOKERY COMPETITION'];
    	$quest_29 = ['TOWN HALL', 'THE TOWN HALL'];
    	$quest_30 = ['HEAD OF EDUCATION', 'EDUCATION HEAD'];
    	$quest_35 = ['SMART CARDS', 'SMART-CARDS','SMARTCARDS'];
    	$quest_38 = ['DETAILED INFORMATION', 'DETAILED INFO'];

    	$score = 0;
    	$total = count($result);

    	foreach ($result as $key => $value) {

    		if($key == '1') {
    			if (in_array($request->input('q'.$key), $quest_1)) {

    				$score++;
    				$as[$key] = 1;

    			} else {

    				$as[$key] = 0;

    			}
    		} else if ($key == '2') {
    			if (in_array($request->input('q'.$key), $quest_2)) {

    				$score++;
    				$as[$key] = 1;

    			} else {

    				$as[$key] = 0;

    			}

    		} else if ($key == '3') {
    			if (in_array($request->input('q'.$key), $quest_3)) {

    				$score++;
    				$as[$key] = 1;

    			} else {

    				$as[$key] = 0;

    			}

    		} elseif ($key == '4') {
    			if (in_array($request->input('q'.$key), $quest_4)) {

    				$score++;
    				$as[$key] = 1;

    			} else {

    				$as[$key] = 0;

    			}

    		} elseif ($key == '5') {
    			if (in_array($request->input('q'.$key), $quest_5)) {

    				$score++;
    				$as[$key] = 1;

    			} else {

    				$as[$key] = 0;

    			}

    		} elseif ($key == '7') {
    			if (in_array($request->input('q'.$key), $quest_7)) {

    				$score++;
    				$as[$key] = 1;

    			} else {

    				$as[$key] = 0;

    			}

    		} elseif ($key == '18') {
    			if (in_array($request->input('q'.$key), $quest_18)) {

    				$score++;
    				$as[$key] = 1;

    			} else {

    				$as[$key] = 0;

    			}

    		} elseif ($key == '24') {
    			if (in_array($request->input('q'.$key), $quest_24_25)) {

    				$score++;
    				$as[$key] = 1;

    			} else {

    				$as[$key] = 0;

    			}

    		} elseif ($key == '25') {
    			if ($request->input('q'.$key) != $request->input('q24') && in_array($request->input('q'.$key), $quest_24_25)) {

    				$score++;
    				$as[$key] = 1;

    			} else {

    				$as[$key] = 0;

    			}

    		} elseif ($key == '26') {
    			if (in_array($request->input('q'.$key), $quest_26)) {

    				$score++;
    				$as[$key] = 1;

    			} else {

    				$as[$key] = 0;

    			}
    		} elseif ($key == '28') {
    			if (in_array($request->input('q'.$key), $quest_28)) {

    				$score++;
    				$as[$key] = 1;

    			} else {

    				$as[$key] = 0;

    			}
    		} elseif ($key == '29') {
    			if (in_array($request->input('q'.$key), $quest_29)) {

    				$score++;
    				$as[$key] = 1;

    			} else {

    				$as[$key] = 0;

    			}
    		} elseif ($key == '30') {
    			if (in_array($request->input('q'.$key), $quest_30)) {

    				$score++;
    				$as[$key] = 1;

    			} else {

    				$as[$key] = 0;

    			}
    		} elseif ($key == '35') {
    			if (in_array($request->input('q'.$key), $quest_35)) {

    				$score++;
    				$as[$key] = 1;

    			} else {

    				$as[$key] = 0;

    			}
    		} elseif ($key == '38') {
    			if (in_array($request->input('q'.$key), $quest_38)) {

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

    	$total_exam = DB::table('lis_score')
		->insert(['std_id' => $request->std_id,
		    'classroom_id' => $request->classroom_id,
		    'set_exam' => $request->set_exam,
		    'type' => 'L',
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
		    'q22' => $request->q21,
		    'q23' => $request->q23,
		    'q24' => $request->q23,
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