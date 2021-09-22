<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Clubs;
use Auth;
use Datetime;
use DB;

class ClubsController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $clubs = Clubs::list_by_student();
        $points = DB::select('SELECT club_point FROM point WHERE user_id = :id LIMIT 1', ['id' => $user_id]);
        $points = $points[0];
        return view('student.clubs.index', compact('clubs', 'points'));
    }

    public function book(Request $request)
    {
        try {
            $data = $request->all();
            $date = $data['date'];
            $user_id = Auth::user()->id;
            $point = DB::table('point')->select('club_point')->where('user_id', $user_id)->first()->club_point;
            if ($point > 0) {
                DB::insert(
                    'INSERT INTO clubs (club_date,status,user_create,created_at,updated_at) VALUES (?,?,?,?,?)',
                    [new Datetime($date), 0, $user_id, new Datetime(), new Datetime()]
                );
                DB::table('point')->where('user_id', $user_id)->update(['club_point' => $point - 1]);
                return "success";
            } else {
                return $point;
            }
        } catch (\Throwable $th) {
            //throw $th;
            return "failed";
        }
    }

    public function delete_club($id){
        try {
            DB::table('clubs')->where('id','=',$id)->delete();
            return "success";
        } catch (\Throwable $th) {
            //throw $th;
            return "failed";
        }
    }
}
