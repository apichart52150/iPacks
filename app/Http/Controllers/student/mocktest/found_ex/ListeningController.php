<?php 

namespace App\Http\Controllers\student\mocktest\found_ex;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * 
 */
class ListeningController extends Controller
{
	
	public function index() {

		return view('student.mocktest.found_ex.listening');

	}

	public function exam(Request $request) {

		$result = ['1' => 'B', '2' => 'C', '3' => 'C', '4' => 'C', '5' => 'B', '6' => '99999', 
        '7' => '99999', '8' => '99999', '9' => 'SATURDAY EVENING', '10' => '99999', '11' => '99999', '12' => '99999', '13' => '99999',
        '14' => '99999', '15' => 'A', '16' => 'A', '17' => 'B', '18' => 'B', '19' => 'A', '20' => 'B', 
        '21' => '99999', '22' => '99999', '23' => '99999', '24' => '99999', '25' => '99999', '26' => 'RELEVANT', '27' => '99999', '28' => '99999', '29' => 'EXCELLENT',
        '30' => 'MUCH BETTER', '31' => 'B', '32' => 'B', '33' => 'A', '34' => 'C', '35' => 'B',
        '36' => 'BEYOND THEIR LIMITS', '37' => 'AREAS OF INDUSTRY', '38' => '99999', '39' => 'COLLAPSING', '40' => 'B'];


        $quest_6 = ['22B', '22 B'];   
        $quest_7 = ['EX15', 'EX 15','E X 15']; 
        $quest_8 = ['EVENING AFTER WORK', 'EVENING']; 
        $quest_10 = ['3 HOURS', '3HOURS','THREE HOURS'];         
    	$quest_11_14 = ['H', 'F', 'E', 'B'];
    	$quest_21 = ['5', 'FIVE','5 MAIN ESSAYS','FIVE MAIN ESSAYS','5 ESSAYS','FIVE ESSAYS'];
        $quest_22 = ['50%','FIFTY PERCENT','FIFTY PER CENT'];
    	$quest_23 = ['18','EIGHTEEN'];
    	$quest_24 = ['14','FOURTEEN'];
    	$quest_25 = ['THE FIRST TUTORIAL', 'IN THE FIRST TUTORIAL','FIRST TUTORIAL'];
    	$quest_27 = ['ELEGANT', 'VERY ELEGANT'];
    	$quest_28 = ['NOT POSSIBLE', 'IS NOT POSSIBLE', 'IS IMPOSSIBLE', 'IMPOSSIBLE'];
        $quest_38 = ['100','A HUNDRED','ONE HUNDRED'];


    	$score = 0;
    	$total = count($result);
        $i = 0;

        // dd($request->all());

    	foreach ($result as $key => $value) {

    		if ($key == '6') {

                if (in_array($request->input('q'.$key), $quest_6)) {

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

            } elseif ($key == '8') {

                if (in_array($request->input('q'.$key), $quest_8)) {

                    $score++;
                    $as[$key] = 1;

                } else {

                    $as[$key] = 0;

                }

            } elseif ($key == '10') {

                if (in_array($request->input('q'.$key), $quest_10)) {

                    $score++;
                    $as[$key] = 1;

                } else {

                    $as[$key] = 0;

                }

            } elseif ($key == '11' || $key == '12' || $key == '13' || $key == '14') {

                $arr[$key] = @$request->input('q11')[$i++];


                if (in_array($arr[$key], $quest_11_14)) {

                    $score++;
                    $as[$key] = 1;
                } else {

                    $as[$key] = 0;
                }
    
                
    		} elseif ($key == '21') {

                if (in_array($request->input('q'.$key), $quest_21)) {

                    $score++;
                    $as[$key] = 1;

                } else {

                    $as[$key] = 0;

                }

            } elseif ($key == '22') {

                if (in_array($request->input('q'.$key), $quest_22)) {

                    $score++;
                    $as[$key] = 1;

                } else {

                    $as[$key] = 0;

                }

            } elseif ($key == '23') {

                if (in_array($request->input('q'.$key), $quest_23)) {

                    $score++;
                    $as[$key] = 1;

                } else {

                    $as[$key] = 0;

                }

            } elseif ($key == '24') {

                if (in_array($request->input('q'.$key), $quest_24)) {

                    $score++;
                    $as[$key] = 1;

                } else {

                    $as[$key] = 0;

                }

            } elseif ($key == '25') {

    			if (in_array($request->input('q'.$key), $quest_25)) {

    				$score++;
    				$as[$key] = 1;

    			} else {

    				$as[$key] = 0;

    			}

    		} elseif ($key == '27') {

    			if (in_array($request->input('q'.$key), $quest_27)) {

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

    	$total_data = ['score' => $score, 'total' => $total];


    	$q11 = $request->q11;

    	if(count($q11) != 4) {
    		for($i = 0; $i <= 3; $i++) {
    			$check = array_key_exists($i, $q11);

    			if(!$check) {
    				array_push($q11, null);
    			}
    		}

    	}

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
            'q11' => $q11[0],
            'q12' => $q11[1],
            'q13' => $q11[2],
            'q14' => $q11[3],
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