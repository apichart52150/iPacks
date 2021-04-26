<?php

namespace App\Http\Controllers\student\clubs;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\UserAlert;
use App\ClubRegisUser;
use Session;

class ClubRegisterController extends Controller
{
    public function register_club(Request $request) {

        $rooms = ClubRegisUser::register($request->room_id, Session::get('std_id'));

        session()->flash('responses', $rooms);

        return back();
    }

    public function accept_cancel() {

        $status = UserAlert::updateStatus();

        if($status['code'] == 200) {
            return redirect('/user_home');
        } else {
            return 'Update Status Error '.$status['code']; die;
        }

    }
}
