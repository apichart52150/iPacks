<?php 

namespace App\Http\Controllers\student\mocktest\found_1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * 
 */
class ReadingController extends Controller
{
	
	public function index() {

		return view('student.mocktest.found_1.reading');

	}

	public function exam(Request $request) {

		$result = ['1' => '99999', '2' => '99999', '3' => '99999', '4' => '99999', '5' => '99999', '6' => 'FALSE', 
    			'7' => 'NOT GIVEN', '8' => 'FALSE', '9' => 'FALSE', '10' => 'NOT GIVEN', '11' => 'C', '12' => 'D', '13' => 'B',
    			'14' => 'C', '15' => 'G', '16' => 'A', '17' => 'F', '18' => 'B', '19' => 'E', '20' => 'H', '21' => 'FALSE',
    			'22' => 'TRUE', '23' => 'NOT GIVEN', '24' => 'NOT GIVEN', '25' => 'C', '26' => 'D', '27' => 'B', '28' => 'B', '29' => 'C',
    			'30' => 'C', '31' => 'C', '32' => 'B', '33' => 'B', '34' => 'J', '35' => 'H',
    			'36' => 'F', '37' => 'G', '38' => 'E', '39' => 'H', '40' => 'B'];

    	$quest_1 = ['40,000', 'FORTY THOUSAND', '40000'];
    	$quest_2 = ['25 DEGREES CELSIUS', '25 DEGREES C', '25DEGREES C', '25 C', '25C'];
    	$quest_3 = ['100 KILOS', '100KILOS', '100 KG', '100KG','UP TO 100 KILOS','UP TO 100KILOS','UP TO 100 KG','UP TO 100KG'];
    	$quest_4 = ['150 KILOMETRES', '150KILOMETRES', '150 KILOMETERS', '150KILOMETERS', '150 KM', '150KM','MORE THAN 150 KILOMETRES','MORE THAN 150KILOMETRES','MORE THAN 150 KILOMETERS','MORE THAN 150KILOMETERS','MORE THAN 150 KM','MORE THAN 150KM'];
    	$quest_5 = ['11 DAYS', '11DAYS', '11'];

    	$score = 0;
    	$total = count($result);

    	foreach ($result as $key => $value) {
    		if ($key == '1') {

    			if (in_array($request->input('q'.$key), $quest_1)) {

    				$score++;
    				$as[$key] = 1;

    			} else {

    				$as[$key] = 0;

    			}


    		} elseif ($key == '2') {

    			if (in_array($request->input('q'.$key), $quest_2)) {

    				$score++;
    				$as[$key] = 1;

    			} else {

    				$as[$key] = 0;

    			}

    		} elseif ($key == '3') {

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

    		} else {
    			if ($request->input('q'.$key) == $value) {

    				$score++;
    				$as[$key] = 1;

    			} else {

    				$as[$key] = 0;

    			}
    		}
    	}

    	$total_data = ['score' => $score, 'total' => $total];

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