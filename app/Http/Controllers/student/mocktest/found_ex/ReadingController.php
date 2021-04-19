<?php 

namespace App\Http\Controllers\student\mocktest\found_ex;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * 
 */
class ReadingController extends Controller
{
	
	public function index() {

		return view('student.mocktest.found_ex.reading');

	}

	public function exam(Request $request) {

		$result = ['1' => 'B', '2' => 'D', '3' => 'I', '4' => 'G', '5' => 'A', '6' => 'E', 
    			'7' => 'C', '8' => 'C', '9' => 'D', '10' => 'A', '11' => 'F', '12' => 'B', '13' => 'E',
    			'14' => '99999', '15' => '1089', '16' => '99999', '17' => '99999', '18' => '99999', '19' => 'TRUE', '20' => 'TRUE', '21' => 'NOT GIVEN',
    			'22' => 'TRUE', '23' => 'FALSE', '24' => 'B', '25' => 'A', '26' => 'B', '27' => 'D', '28' => '99999', '29' => '99999',
    			'30' => '99999', '31' => '99999', '32' => 'TRUE', '33' => 'TRUE', '34' => 'NOT GIVEN', '35' => 'FALSE',
    			'36' => 'B', '37' => 'A', '38' => 'C', '39' => 'A', '40' => 'B'];

    	$quest_14 = ['50 FEET', 'FIFTY FEET','50 FOOT HIGH','50-FOOT', '50-FOOT HIGH', 'FIFTY FOOT', 'FIFTY-FOOT, FIFTY-FOOT HIGH'];
    	$quest_16 = ['4 HOURS', 'ROUGHLY 4 HOURS','FOUR HOURS', 'ROUGHLY FOUR HOURS'];
    	$quest_17 = ['8 AM', '8AM', '8 A.M.', '8A.M.',"EIGHT O'CLOCK", "8 O'CLOCK", '08.00'];
    	$quest_18 = ['OVER 330 SQUARE METRES', 'OVER 330 SQUARE METERS', 'OVER 330 SQ M', 'OVER 330 SQM'];
    	$quest_28 = ['800, OVER 800', 'EIGHT HUNDRED', 'OVER EIGHT HUNDRED'];
    	$quest_29 = ['4 MILLION DOLLARS', '$4 MILLION','$4,000,000','FOUR MILLION DOLLARS', '4000000'];
    	$quest_30 = ['1', 'ONE'];
    	$quest_31 = ['2006', 'IN 2006'];

		$score = 0;
		$total = count($result);

		foreach ($result as $key => $value) {
			if ($key == '14') {

				if (in_array($request->input('q'.$key), $quest_14)) {

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

			} elseif ($key == '17'){

				if (in_array($request->input('q'.$key), $quest_17)) {

					$score++;
					$as[$key] = 1;

				} else {

					$as[$key] = 0;

				}

			} elseif ($key == '18'){

				if (in_array($request->input('q'.$key), $quest_18)) {

					$score++;
					$as[$key] = 1;

				} else {

					$as[$key] = 0;

				}

			} elseif ($key == '28'){

				if (in_array($request->input('q'.$key), $quest_18)) {

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

			} elseif ($key == '31') {

				if (in_array($request->input('q'.$key), $quest_31)) {

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