<?php

namespace App\Http\Controllers\Admin\club;

use App\Http\Controllers\Controller;
use App\Model\Clubs;
use Datetime;
use DB;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $clubs = Clubs::list_by_staff_wait_confirm();
        $approval = Clubs::list_by_staff_retrospect();
        return view('admin.clubs.index', compact('clubs', 'approval'));
    }

    public function history($date, $status)
    {
        $clubs = Clubs::list_by_staff_confirm($date, $status);
        return view('admin.clubs.history', compact('clubs'));
    }

    public function confirm(Request $request)
    {
        try {
            $data = $request->all();
            $id = (int)$data['id'];
            $club = DB::table('clubs')->select('status')->where('id', '=', $id)->first();
            if ($club->status == 0) {
                $value = (int)$data['value'];
                $note = $data['note'];
                $student_id = (int)$data['student'];
                $user_id = Auth::user()->staff_id;
                if ($value == 1) {
                    DB::update('UPDATE clubs SET status=?, user_edit=?,note=? , updated_at=? WHERE id=?', [$value, $user_id, $note, new Datetime(), $id]);
                } else if($value == 2) {
                    $point = DB::table('point')->select('club_point')->where('user_id', '=', $student_id)->first();
                    DB::update('UPDATE clubs SET status=?, user_edit=?,note=? , updated_at=? WHERE id=?', [$value, $user_id, $note, new Datetime(), $id]);
                    DB::update('UPDATE point SET club_point=? WHERE user_id=?', [(int)$point->club_point + 1, $student_id]);
                }
                return "success";
            } else {
                return "dont";
            }
        } catch (\Throwable $th) {
            return $th;
            return "failed";
        }
    }
}
