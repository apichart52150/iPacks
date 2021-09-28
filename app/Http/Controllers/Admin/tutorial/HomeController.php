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
            $tutorial = DB::table('tutorial')->select('status')->where('tutorial_id', '=', $id)->first();
            if ($tutorial->status == 0) {
                $value = (int)$data['value'];
                $note = $data['note'];
                $student_id = (int)$data['student'];
                $user_id = Auth::user()->staff_id;
                if ($value == 1) {
                    DB::update('UPDATE tutorial SET status=?, user_edit=?,note=? , updated_at=? WHERE tutorial_id=?', [$value, $user_id, $note, new Datetime(), $id]);
                } else if($value == 2) {
                    $point = DB::table('point')->select('tutorial_point')->where('user_id', '=', $student_id)->first();
                    DB::update('UPDATE tutorial SET status=?, user_edit=?,note=? , updated_at=? WHERE tutorial_id=?', [$value, $user_id, $note, new Datetime(), $id]);
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
            $point = DB::table('point')->select('tutorial_point')->where('user_id', $student_id)->first()->tutorial_point;
            // return $point;
            if ($status1 == $status2) {
                DB::update('UPDATE tutorial SET user_edit=?,note=? , updated_at=? WHERE tutorial_id=?', [$user_id, $note, new Datetime(), $id]);
                return "success";
            } else {
                if ($status2 == 1) {
                    if ($point > 0) {
                        DB::update('UPDATE tutorial SET status=?, user_edit=?,note=? , updated_at=? WHERE tutorial_id=?', [$status2, $user_id, $note, new Datetime(), $id]);
                        DB::table('point')->where('user_id', $student_id)->update(['tutorial_point' => $point - 1]);
                        return "success";
                    } else {
                        return $point;
                    }
                } else {
                    DB::update('UPDATE tutorial SET status=?, user_edit=?,note=? , updated_at=? WHERE tutorial_id=?', [$status2, $user_id, $note, new Datetime(), $id]);
                    DB::table('point')->where('user_id', $student_id)->update(['tutorial_point' => $point + 1]);
                    return "success";
                }
            }
        } catch (\Throwable $th) {
            return "failed";
        }
    }
}
