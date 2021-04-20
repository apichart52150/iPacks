<?php

namespace App\Http\Controllers\student\clubs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;

class ConditionController extends Controller
{

    public function index() {

        if(Session::has('condition')) {
            return redirect('clubs/home');
        } else {
            return view('student.clubs.condition');
        }
        
    }

    public function condition_submit(Request $request) {

        if($request->condition) {

            Session::put('condition', $request->condition);

            return redirect('clubs/home');

        } else {
            return redirect('clubs/condition');
        }

    }
}
