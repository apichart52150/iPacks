<?php

namespace App\Http\Controllers\Admin\isac\speaking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\AdminSpeaking;
use DB;

class PendingController extends Controller
{


    public function index() 
    {
        $pendings = AdminSpeaking::receive_speaking();

        return view('admin.isac.speaking.pending', compact('pendings'));
    }


    public function check($id) {

        $check = AdminSpeaking::check($id);

        return view('admin.isac.speaking.check',compact('check'));
    }

    public function check_submit(Request $request){

        $check_submit = AdminSpeaking::check_submit($request);

        return redirect('speaking/completed');
    }
}
