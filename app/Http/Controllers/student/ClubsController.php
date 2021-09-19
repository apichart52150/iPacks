<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Model\Clubs;
use Auth;
use Datetime;
use DB;
use Illuminate\Http\Request;

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
        $data = $request->all();

        $date = $data['date'];
        $user_id = Auth::user()->id;
        DB::insert('INSERT INTO clubs (club_date,status,user_create,user_edit,created_at,updated_at) VALUES (?,?,?,?,?,?)',
            [$date,0, $user_id, $user_id, new Datetime(), new Datetime()]);
        return "success";
    }
}
