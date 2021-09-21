<?php

namespace App\Http\Controllers\Admin\tutorial;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Tutorial;
use Datetime;
use DB;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
        $tutorial = Tutorial::list_by_staff_wait_confirm();
        $approval = Tutorial::list_by_staff_retrospect();
        return view('admin.tutorial.index', compact('tutorial', 'approval'));
    }

    public function history($date, $status)
    {
        $tutorials = Tutorial::list_by_staff_confirm($date, $status);
        return view('admin.tutorial.history', compact('tutorials'));
    }

    public function confirm(Request $request)
    {
        try {
            $data = $request->all();
            $id = (int)$data['id'];
            $tutorial = DB::table('tutorial')->select('status')->where('id', '=', $id)->first();
            if ($tutorial->status == 0) {
                $value = (int)$data['value'];
                $note = $data['note'];
                $student_id = (int)$data['student'];
                $user_id = Auth::user()->staff_id;
                if ($value == 1) {
                    DB::update('UPDATE tutorial SET status=?, user_edit=?,note=? , updated_at=? WHERE id=?', [$value, $user_id, $note, new Datetime(), $id]);
                } else if($value == 2) {
                    $point = DB::table('point')->select('tutorial_point')->where('user_id', '=', $student_id)->first();
                    DB::update('UPDATE tutorial SET status=?, user_edit=?,note=? , updated_at=? WHERE id=?', [$value, $user_id, $note, new Datetime(), $id]);
                    DB::update('UPDATE point SET tutorial_point=? WHERE user_id=?', [$point->tutorial_point + 1, $student_id]);
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
