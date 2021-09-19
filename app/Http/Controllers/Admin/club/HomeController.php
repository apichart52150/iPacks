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
        return view('admin.clubs.index', compact('clubs'));
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
            $value = (int)$data['value'];
            $note = $data['note'];
            $student_id = (int)$data['student'];
            $user_id = Auth::user()->staff_id;
            if ($student_id > 0) {
                $point = DB::table('point')->select('club_point')->where('user_id', '=', $student_id)->first();
                if ($point->club_point > 0) {
                    DB::update('UPDATE clubs SET status=?, user_edit=?,note=? , updated_at=? WHERE id=?', [$value, $user_id, $note, new Datetime(), $id]);
                    DB::update('UPDATE point SET club_point=? WHERE user_id=?', [$point->club_point - 1, $student_id]);
                }
            }else{
                DB::update('UPDATE clubs SET status=?, user_edit=?,note=? , updated_at=? WHERE id=?', [$value, $user_id, $note, new Datetime(), $id]);
            }
            return "success";
        } catch (\Throwable $th) {
            return $th;
            return "failed";
        }
    }
}
