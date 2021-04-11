<?php 

namespace App\Http\Controllers\student\mocktest\gateway;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * 
 */
class ListeningController extends Controller
{

	public function index() {

		return view('gateway.listening');

	}

	public function exam(Request $request) {

        $answer = array(
            $quest0 = "/^(26)$|((the)*.?(26).?(th)$)/i",
            $quest1 = "/^(26)$|((the)*.?(26).?(th)$)/i",
            $quest2 = "/(^7$)|7.*(([p0]{1})\.?([m0]{1})\.?)$|^ten$|ten.*([ ][p]\.?[m]\.?)$/i",
            $quest3 = "/^(circle)$/i",
            $quest4 = "/(a21).?(-|to).?(a*)+24/i",
            $quest5 = "/^(mastercard)$/i",
            $quest6 = "/^(3290587644012899)$/i",
            $quest7 = "/^(whitton)$/i",
            $quest8 = "/(^42).?(south$)/i",
            $quest9 = "/(^sw).?(2.?5).?(ge$)/i",
            $quest10 = "/^(headphones|earphones)$/i",
            $quest11 = "/d/i",
            $quest12 = "/f/i",
            $quest13 = "/i/i",
            $quest14 = "/b/i",
            $quest15 = "/e/i",
            $quest16 = "/a/i",
            $quest17 = "/g/i",
            $quest18 = "/arm.?band/i",
            $quest19 = "/^(an ambulance)$|^(ambulance).s*$/i",
            $quest20 = "/(yellow ticket)s*$/i",
            $quest21 = "/(b)|(d)|(f)/i",
            $quest22 = "/(b)|(d)|(f)/i",
            $quest23 = "/(b)|(d)|(f)/i",
            $quest24 = "/a/i",
            $quest25 = "/b/i",
            $quest26 = "/c/i",
            $quest27 = "/a/i",
            $quest28 = "/^march$/i",
            $quest29 = "/^secretary$/i",
            $quest30 = "/^computer office$/i",
            $quest31 = "/((coast)(s)*)$|^shore$/i",
            $quest32 = "/^(garbage|rubbish|waste)$/i",
            $quest33 = "/^summer$/i",
            $quest34 = "/^fish$/i",
            $quest35 = "/^checked$/i",
            $quest36 = "/^boat$/i",
            $quest37 = "/^camera$/i",
            $quest38 = "/^(released|freed)$/i",
            $quest39 = "/b/i",
            $quest40 = "/a/i"
        );

        $score = 0;
        $total = count($answer);
        $exam = 0;
        $list_array = 0;
        $chioce = 0;
        $add_answer = $request->input('q21');
        // dd($request->input());

        switch(count($add_answer)){
            case '1':
                $add_answer = array("No answer","No answer");
                array_push($add_answer, $request->input('q21')[0]);
            break;
            case '2':
                $add_answer = array("No answer");
                array_push($add_answer,$request->input('q21')[0], $request->input('q21')[1]);
            break;
        }
 
    	foreach ($answer as $key => $value) { 
            
           if($key == $exam){

                if($key == 21 || $key == 22 || $key == 23){
                    
                    if(preg_match(($answer[$list_array]), $add_answer[$chioce])){
                        $score++;
                        $as[$key] = 1;
                        $exam +=1;
                        $list_array +=1;
                        $chioce +=1;
                    }else{
                        $as[$key] = 0;
                        $exam +=1;
                        $list_array +=1;
                        $chioce +=1;
                    }

                }else{
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
        }

        //dd($score);
        

    	$total_data = ['score' => $score, 'total' =>  $answer];

        
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
            'q21' => $add_answer[0],
            'q22' => $add_answer[1],
            'q23' => $add_answer[2],
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