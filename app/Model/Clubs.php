<?php

namespace App\Model;

use Auth;
use DateTime;
use DB;
use Illuminate\Database\Eloquent\Model;

class Clubs extends Model
{
    public static function list_by_student()
    {

        $clubs = DB::table('clubs')
            ->select('id', 'club_date', 'user_edit', 'status', 'note')
            ->where('user_create', '=', Auth::user()->id)
            ->orderBy('updated_at', 'desc')
            ->get();
        return ($clubs);
    }

    public static function list_by_staff_retrospect()
    {

        $datetime = new Datetime();
        $datetime->modify('-3 months');
        $clubs = DB::table('clubs')
            ->select('clubs.id', 'clubs.club_date', 'users.first_name', 'users.last_name', 'users.email')
            ->leftjoin('users', 'clubs.user_create', '=', 'users.id')
            ->where('clubs.status', '=', 1)
            ->where('clubs.club_date', '>', $datetime->format('Y-m-d'))
            ->orderBy('clubs.updated_at', 'desc')
            ->get();
        return ($clubs);
    }

    public static function list_by_staff_wait_confirm()
    {

        $clubs = DB::table('clubs')
            ->select('clubs.created_at', 'clubs.user_create', 'clubs.status', 'clubs.id', 'clubs.club_date', 'clubs.note', 'users.first_name', 'users.last_name', 'users.email')
            ->leftjoin('users', 'clubs.user_create', '=', 'users.id')
            ->where('clubs.status', '=', 0)
            ->orderBy('clubs.updated_at', 'desc')
            ->get();
        return ($clubs);
    }

    public static function list_by_staff_confirm($date, $status)
    {
        $pag = 10;
        if ($date == 'all' && $status == 'all') {
            $clubs = DB::table('clubs')
                ->select('clubs.status', 'clubs.created_at', 'clubs.id', 'clubs.club_date', 'clubs.note', 'users.first_name', 'users.last_name', 'staff.staff_username')
                ->leftjoin('users', 'clubs.user_create', '=', 'users.id')
                ->leftjoin('staff', 'clubs.user_edit', '=', 'staff.staff_id')
                ->where('clubs.status', '>', 0)
                ->orderBy('clubs.updated_at', 'desc')
                ->paginate($pag);
            return ($clubs);
        } else if ($date == 'all' && $status != 'all') {
            $clubs = DB::table('clubs')
                ->select('clubs.status', 'clubs.created_at', 'clubs.id', 'clubs.club_date', 'clubs.note', 'users.first_name', 'users.last_name', 'staff.staff_username')
                ->leftjoin('users', 'clubs.user_create', '=', 'users.id')
                ->leftjoin('staff', 'clubs.user_edit', '=', 'staff.staff_id')
                ->where('clubs.status', '=', $status)
                ->orderBy('clubs.updated_at', 'desc')
                ->paginate($pag);
            return ($clubs);
        } else if ($date != 'all' && $status == 'all') {
            $clubs = DB::table('clubs')
                ->select('clubs.status', 'clubs.created_at', 'clubs.id', 'clubs.club_date', 'clubs.note', 'users.first_name', 'users.last_name', 'staff.staff_username')
                ->leftjoin('users', 'clubs.user_create', '=', 'users.id')
                ->leftjoin('staff', 'clubs.user_edit', '=', 'staff.staff_id')
                ->where('clubs.status', '>', 0)
                ->where('clubs.club_date', '=', new DateTime($date ." 00:00:00"))
                ->orderBy('clubs.updated_at', 'desc')
                ->paginate($pag);
            return ($clubs);
        } else if ($date != 'all' && $status != 'all') {
            $clubs = DB::table('clubs')
                ->select('clubs.status', 'clubs.created_at', 'clubs.id', 'clubs.club_date', 'clubs.note', 'users.first_name', 'users.last_name', 'staff.staff_username')
                ->leftjoin('users', 'clubs.user_create', '=', 'users.id')
                ->leftjoin('staff', 'clubs.user_edit', '=', 'staff.staff_id')
                ->where('clubs.status', '=', $status)
                ->where('clubs.club_date', '=', new DateTime($date ." 00:00:00"))
                ->orderBy('clubs.updated_at', 'desc')
                ->paginate($pag);
            return ($clubs);
        }
    }
}
