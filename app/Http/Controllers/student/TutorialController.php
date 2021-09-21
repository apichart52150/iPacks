<?php

namespace App\Http\Controllers\student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Tutorial;
use Auth;
use Datetime;
use DB;

class TutorialController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $tutorials = Tutorial::list_by_student();
        $points = DB::select('SELECT tutorial_point FROM point WHERE user_id = :id LIMIT 1', ['id' => $user_id]);
        $points = $points[0];
        return view('student.tutorial.index', compact('tutorials', 'points'));
    }

    public function book(Request $request)
    {
        try {
            $data = $request->all();
            $date = $data['date'];
            $user_id = Auth::user()->id;
            $point = DB::table('point')->select('tutorial_point')->where('user_id', $user_id)->first()->tutorial_point;
            if($point>0){
                DB::insert(
                    'INSERT INTO tutorial (tutorial_date,status,user_create,created_at,updated_at) VALUES (?,?,?,?,?)',
                    [new Datetime($date), 0, $user_id, new Datetime(), new Datetime()]
                );
                DB::table('point')->where('user_id', $user_id)->update(['tutorial_point' => $point - 1]);
                return "success";
            }else{
                return $point;
            }
        } catch (\Throwable $th) {
            //throw $th;
            return "failed";
        }
    }
}
