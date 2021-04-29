<?php

namespace App\Http\Controllers\student\clubs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Model\Club\ClubRegister;
use App\Model\Club\UserAlert;
use Carbon\Carbon;

class HomeController extends Controller
{

    public function index() {

        $cancel_class = UserAlert::getUserAlert();

        if(empty($cancel_class) || $cancel_class['status'] == '0') {
            $isCancel = false;
        } else {
            $isCancel = true;
        }

        $clubs = ClubRegister::getClubRoom();

        //  dd($clubs);
        
        $current_date = date('Y-m-d H:i:s');

        $rooms = array();

        $data = array();

        foreach($clubs as $club) {
        
            // Check Club Expired
            if($club->end_date >= $current_date) {
                
                // Check start post | end post
                if($current_date >= $club->start_post_date && $current_date <= $club->end_post_date) {

                    $room_state = 'Available';
                    $show_state = '';
         
                    // Check student in club
                    if($club->amount == $club->studentInClass) {
                        $room_state = 'Full';
                        $show_state = "($room_state)";
                    }
        
                    if($club->room_type_header == 2) {
                        $room_state = 'Cancel Class';
                        $show_state = '(Cancel)';
                    }

                    $color_topic = 'warning';

                } else {
                    $room_state = 'Open Soon';
                    $show_state = "($room_state)";
                    $color_topic = 'secondary';
                }

                // Content in Button
                if(!empty($club->topicClub) && strpos($club->type_header, 'Bonus') == false) {
                    $topic_content = $club->teacher.' '.$show_state."<br><span style='color: $color_topic;'>Topic : $club->topicClub</span> <br>".$club->date_show;
                } else {
                    $topic_content = $club->teacher.' '.$show_state.'<br>'.$club->date_show;
                }

                $rooms = array(
                    'club_id' => $club->type_id,
                    'club_header' => $club->type_header,
                    'subtitle_id' => $club->subtitle_id,
                    'subtitle_header' => $club->subtitle_header,
                    'topic' => trim($topic_content),
                    'teacher' => $club->teacher,
                    'room_id' => $club->room_id,
                    'room_status' => $club->room_type_header,
                    'room_expired' => false,
                    'room_state' => $room_state,
                    'date_show' => $club->date_show,
                    'start_date' => $club->start_date,
                    'end_date' => $club->end_date,
                    'start_post_date' => $club->start_post_date,
                    'end_post_date' => $club->end_post_date
                );


                $data[$club->type_header][$club->subtitle_header][] = $rooms;

                
            } 
            
        }
        // dd($data);

        return view('student.clubs.home', compact('data', 'isCancel'));

    }
}