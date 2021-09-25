<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Auth;
use DateTime;
use DB;

class Tutorial extends Model
{
    public static function list_by_student()
    {

        $tutorial = DB::table('tutorial')
            ->select('tutorial_id', 'tutorial_date', 'user_edit', 'status', 'note')
            ->where('user_create', '=', Auth::user()->id)
            ->orderBy('updated_at', 'desc')
            ->get();
        return ($tutorial);
    }

    public static function list_by_staff_retrospect()
    {

        $datetime = new Datetime();
        $datetime->modify('-3 months');
        $tutorial = DB::table('tutorial')
            ->select('tutorial.tutorial_id', 'tutorial.tutorial_date', 'users.first_name', 'users.last_name', 'users.email')
            ->leftjoin('users', 'tutorial.user_create', '=', 'users.id')
            ->where('tutorial.status', '=', 1)
            ->where('tutorial.tutorial_date', '>', $datetime->format('Y-m-d'))
            ->orderBy('tutorial.updated_at', 'desc')
            ->get();
        return ($tutorial);
    }

    public static function list_by_staff_wait_confirm()
    {

        $tutorial = DB::table('tutorial')
            ->select('tutorial.created_at', 'tutorial.user_create', 'tutorial.status', 'tutorial.tutorial_id', 'tutorial.tutorial_date', 'tutorial.note', 'users.first_name', 'users.last_name', 'users.email')
            ->leftjoin('users', 'tutorial.user_create', '=', 'users.id')
            ->where('tutorial.status', '=', 0)
            ->orderBy('tutorial.updated_at', 'desc')
            ->get();
        return ($tutorial);
    }

    public static function list_by_staff_confirm($date, $status)
    {
        $pag = 10;
        if ($date == 'all' && $status == 'all') {
            $tutorial = DB::table('tutorial')
                ->select('tutorial.status', 'tutorial.created_at', 'tutorial.tutorial_id', 'tutorial.tutorial_date', 'tutorial.note', 'users.id', 'users.first_name', 'users.last_name', 'staff.staff_username')
                ->leftjoin('users', 'tutorial.user_create', '=', 'users.id')
                ->leftjoin('staff', 'tutorial.user_edit', '=', 'staff.staff_id')
                ->where('tutorial.status', '>', 0)
                ->orderBy('tutorial.updated_at', 'desc')
                ->paginate($pag);
            return ($tutorial);
        } else if ($date == 'all' && $status != 'all') {
            $tutorial = DB::table('tutorial')
                ->select('tutorial.status', 'tutorial.created_at', 'tutorial.tutorial_id', 'tutorial.tutorial_date', 'tutorial.note', 'users.id', 'users.first_name', 'users.last_name', 'staff.staff_username')
                ->leftjoin('users', 'tutorial.user_create', '=', 'users.id')
                ->leftjoin('staff', 'tutorial.user_edit', '=', 'staff.staff_id')
                ->where('tutorial.status', '=', $status)
                ->orderBy('tutorial.updated_at', 'desc')
                ->paginate($pag);
            return ($tutorial);
        } else if ($date != 'all' && $status == 'all') {
            $tutorial = DB::table('tutorial')
                ->select('tutorial.status', 'tutorial.created_at', 'tutorial.tutorial_id', 'tutorial.tutorial_date', 'tutorial.note', 'users.id', 'users.first_name', 'users.last_name', 'staff.staff_username')
                ->leftjoin('users', 'tutorial.user_create', '=', 'users.id')
                ->leftjoin('staff', 'tutorial.user_edit', '=', 'staff.staff_id')
                ->where('tutorial.status', '>', 0)
                ->where('tutorial.tutorial_date', '=', new DateTime($date ." 00:00:00"))
                ->orderBy('tutorial.updated_at', 'desc')
                ->paginate($pag);
            return ($tutorial);
        } else if ($date != 'all' && $status != 'all') {
            $tutorial = DB::table('tutorial')
                ->select('tutorial.status', 'tutorial.created_at', 'tutorial.tutorial_id', 'tutorial.tutorial_date', 'tutorial.note', 'users.id', 'users.first_name', 'users.last_name', 'staff.staff_username')
                ->leftjoin('users', 'tutorial.user_create', '=', 'users.id')
                ->leftjoin('staff', 'tutorial.user_edit', '=', 'staff.staff_id')
                ->where('tutorial.status', '=', $status)
                ->where('tutorial.tutorial_date', '=', new DateTime($date ." 00:00:00"))
                ->orderBy('tutorial.updated_at', 'desc')
                ->paginate($pag);
            return ($tutorial);
        }
    }
}
