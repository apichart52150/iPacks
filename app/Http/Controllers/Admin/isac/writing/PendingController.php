<?php

namespace App\Http\Controllers\Admin\isac\writing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Model\AdminWriting;
use DB;


class PendingController extends Controller
{

    public function __construct() {

        $this->middleware('auth');
    }

    public function index() {

        $pendings = AdminWriting::receive_writing();

        return view('admin.isac.writing.pending', compact('pendings'));

    }


  
    public function check($id) {

        $check = AdminWriting::check($id);

        return view('admin.isac.writing.check',compact('check'));
    }
    

    public function check_submit(Request $request){

        $check_submit = AdminWriting::check_submit($request);

        return redirect('writing/completed');
    }
}
