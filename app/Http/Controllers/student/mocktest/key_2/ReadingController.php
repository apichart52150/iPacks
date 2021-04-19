<?php

namespace App\Http\Controllers\student\mocktest\key_2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class ReadingController extends Controller
{

    public static function index()
    {
        return view('student.mocktest.key_2.reading');
    }
    

    public function exam(Request $request)
    {

        $result = array('1' => 'D','2' => 'B','3' => 'D','4' => 'C','5' => 'A','6' => 'G','7' => 'C',
            '8' => 'H','9' => 'A','10' => 'F','11' => 'D','12' => 'H','13' => 'B','14' => 'TRUE',
            '15' => 'FALSE','16' => 'FALSE','17' => 'NOT GIVEN','18' => 'TRUE','19' => 'B','20' => 'D','21' => 'B','22' => 'GIGANTIC','23' => 'OPENINGS',
            '24' => 'RELATIVE','25' => 'SIFT','26' => 'BASKING','27' => 'FALSE','28' => 'FALSE','29' => 'TRUE','30' => 'FALSE','31' => 'TRUE',
            '32' => 'NOT GIVEN','33' => 'B','34' => 'B','35' => 'A','36' => 'C','37' => 'A','38' => 'PIECEMEAL','39' => 'UNITARY',
            '40' => 'PROSOPAMNESIA');


        $score = 0;
        $total = count($result);

        foreach ($result as $key => $value){ 

           if($value == @$request->input('q'.$key)){
                $score++;
                $as[$key] = 1;
            }else{
                $as[$key] = 0;
            }

        }

        $total_data = array('score' => $score, 
            'total' => $total);

        $total_exam = DB::table('read_score')
        ->insert(['std_id' => $request->std_id,
                'classroom_id' => $request->class_id,
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
