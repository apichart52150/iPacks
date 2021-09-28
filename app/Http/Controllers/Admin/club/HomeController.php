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
            $club = DB::table('clubs')->select('status')->where('clubs_id', '=', $id)->first();
            if ($club->status == 0) {
                $value = (int)$data['value'];
                $note = $data['note'];
                $student_id = (int)$data['student'];
                $user_id = Auth::user()->staff_id;
                if ($value == 1) {
                    DB::update('UPDATE clubs SET status=?, user_edit=?,note=? , updated_at=? WHERE clubs_id=?', [$value, $user_id, $note, new Datetime(), $id]);
                } else if ($value == 2) {
                    $point = DB::table('point')->select('club_point')->where('user_id', '=', $student_id)->first();
                    DB::update('UPDATE clubs SET status=?, user_edit=?,note=? , updated_at=? WHERE clubs_id=?', [$value, $user_id, $note, new Datetime(), $id]);
                    DB::update('UPDATE point SET club_point=? WHERE user_id=?', [(int)$point->club_point + 1, $student_id]);
                }
                return "success";
            } else {
                return "dont";
            }
        } catch (\Throwable $th) {
            return "failed";
        }
    }

    public function edit_data(Request $request)
    {
        try {
            $data = $request->all();
            $id = (int)$data['id'];
            $status1 = (int)$data['status1'];
            $status2 = (int)$data['status2'];
            $note = $data['note'];
            $student_id = $data['student_id'];
            $user_id = Auth::user()->staff_id;
            $point = DB::table('point')->select('club_point')->where('user_id', $student_id)->first()->club_point;
            if ($status1 == $status2) {
                DB::update('UPDATE clubs SET user_edit=?,note=? , updated_at=? WHERE clubs_id=?', [$user_id, $note, new Datetime(), $id]);
                return "success";
            } else {
                if ($status2 == 1) {
                    if ($point > 0) {
                        DB::update('UPDATE clubs SET status=?, user_edit=?,note=? , updated_at=? WHERE clubs_id=?', [$status2, $user_id, $note, new Datetime(), $id]);
                        DB::table('point')->where('user_id', $student_id)->update(['club_point' => $point - 1]);
                        return "success";
                    } else {
                        return $point;
                    }
                } else {
                    DB::update('UPDATE clubs SET status=?, user_edit=?,note=? , updated_at=? WHERE clubs_id=?', [$status2, $user_id, $note, new Datetime(), $id]);
                    DB::table('point')->where('user_id', $student_id)->update(['club_point' => $point + 1]);
                    return "success";
                }
            }
        } catch (\Throwable $th) {
            return "failed";
        }
    }
}
