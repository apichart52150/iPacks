<?php

namespace App\Http\Controllers\Admin\isac\writing;

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
        $writings = AdminWriting::total_writing()->toArray();

        $pending = DB::table('text_result')
        ->select('*')
        ->where('th_id', Auth::user()->id)
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
