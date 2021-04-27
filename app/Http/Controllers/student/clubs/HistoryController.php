<?php

namespace App\Http\Controllers\student\clubs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Club\History;
use App\Model\Club\ClubRegister;
use Session;

class HistoryController extends Controller
{

    public function index() {
       
        $tabs = ['Registration', 'Status', 'Cancellation'];
        

        $historys = History::getHistory();

        $historys = $historys->groupBy(function ($item, $key) {
            return $item->tab_status;
        });

        $data = [];

        foreach($tabs as $tab) {
            if(isset($historys[$tab])) {
                foreach($historys[$tab] as $value) {
                    $data[$tab][] = $value;
                }
            } else {
                $data[$tab] = [];
            }
        }

        // dd($data);
        return view('student/clubs/history', compact('data', 'tabs'));
    }

    public function status() {

        $myclubs = ClubRegister::myClub(Session::get('std_id'));

        $myclubs = $myclubs->map(function ($item, $key) {
            $end_date = date('d M', strtotime($item->end_date));
            $start_time = date('H.i', strtotime($item->start_date));
            $end_time = date('H.i A', strtotime($item->end_date));
            return $item = array(
                'topicClub' => 'Topic : '.$item->topicClub,
                'teacher' => $item->teacher,
                'title_type' => $item->title_type,
                'date_show' => $end_date.' ('.$start_time.' - '.$end_time.')'
            );
        });


        return view('student/clubs/status', compact('myclubs'));
    }
}
 