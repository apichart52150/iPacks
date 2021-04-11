<?php 

namespace App\Http\Controllers\student\mocktest\gateway;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * 
 */
class ReadingController extends Controller
{

	public function index() {

		return view('gateway.reading');

	}

	public function exam(Request $request) {

		$answer = array(
            $quest0 = "/(t)/i",
            $quest1 = "/(t)/i",
            $quest2 = "/(f)/i",
            $quest3 = "/(n)/i",
            $quest4 = "/(f)/i",
            $quest5 = "/(f)/i",
            $quest6 = "/a/i",
            $quest7 = "/d/i",
            $quest8 = "/c/i",
            $quest9 = "/b/i",
            $quest10 = "/c/i",
            $quest11 = "/^(totem)$/i",
            $quest12 = "/^(ancestors)$/i",
            $quest13 = "/^(blood of life)$/i",
            $quest14 = "/^(120(,*)000)$/i",
            $quest15 = "/(^1|one)\s*(mm|millime(tre|ter))$/i",
            $quest16 = "/(^80)\s*(cm|centime(tre|ter))+?s*$/i",
            $quest17 = "/(^2)?(,*)+(000)\s*(m|me(tre|ter).?s)$/i",
            $quest18 = "/(1950?s*)$/i",
            $quest19 = "/b/i",
            $quest20 = "/d/i",
            $quest21 = "/b/i",
            $quest22 = "/a/i",
            $quest23 = "/c/i",
            $quest24 = "/^leeward side$/i",
            $quest25 = "/^Amazon Basin$/i",
            $quest26 = "/^inversion layer$/i",
            $quest27 = "/d/i",
            $quest28 = "/c/i",
            $quest29 = "/b/i",
            $quest30 = "/b/i",
            $quest31 = "/a/i",
            $quest32 = "/h/i",
            $quest33 = "/b/i",
            $quest34 = "/f/i",
            $quest35 = "/c/i",
            $quest36 = "/d/i",
            $quest37 = "/f/i",
            $quest38 = "/a/i",
            $quest39 = "/h/i",
            $quest40 = "/c/i"
        );

        $score = 0;
        $total = count($answer);

        // dd($request->input());
        
        $exam = 0;
        $list_array = 0;
 
    	foreach ($answer as $key => $value) { 
            

           if($key == $exam){
			if (preg_match(($answer[$list_array]), $request->input('q'.$key))) {
				$score++;
				$as[$key] = 1;
				$exam +=1;
				$list_array +=1;
			} else {
				$as[$key] = 0;
				$exam +=1;
				$list_array +=1;
			}
            }
        }

        // dd($score);
        

    	$total_data = ['score' => $score, 'total' =>  $answer];

        
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