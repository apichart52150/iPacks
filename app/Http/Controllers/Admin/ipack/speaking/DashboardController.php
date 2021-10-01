<?php

namespace App\Http\Controllers\Admin\ipack\speaking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\AdminSpeaking;
use DB;
use Carbon\Carbon;

class DashboardController extends Controller
{

    // Dashboard
    public function index()
    {
        $speakings = AdminSpeaking::total_speaking()->toArray();

        $pending = DB::table('speaking')
        ->select('*')
        ->where('th_id', Auth::user()->staff_id)
        ->where('status', 'pending')
        ->latest()
        ->count();
    
        return view('admin.isac.speaking.dashboard', compact('speakings', 'pending'));
    }


    public function receive($id) {

        $receive = AdminSpeaking::receive($id);

        return redirect('speaking/pending');
    }

}
