<?php

namespace App\Http\Controllers\Admin\ipack\writing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Model\AdminWriting;
use DB;
use Carbon\Carbon;;

class DashboardController extends Controller
{

    // Dashboard
    public function index()
    {
        $writings = AdminWriting::total_writing();

        $pending = DB::table('text_result')
        ->select('*')
        ->where('th_id', auth('staff')->user()->id)
        ->where('status', ['W','TH_S'])
        ->latest()
        ->count();
     
        return view('admin.isac.writing.dashboard', compact('writings', 'pending'));
    }


    public function receive($id) {

        $receive = AdminWriting::receive($id);

        return redirect('writing/pending');
    }

}
