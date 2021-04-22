<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Clubregister extends Model
{

	public static function getClubType(){

		$club = DB::table('club_type')
            ->join('club_subtitle', 'club_type.id', '=', 'club_subtitle.type_id')
            ->join('club_room', 'club_subtitle.id', '=', 'club_room.subtitle_id')
            ->select('club_type.id as club_type_id','club_type.title_type', 'club_type.status as title_status', 'club_subtitle.title as club_subtitle','club_subtitle.id as club_sub_id','club_room.end_date','club_subtitle.id as sub_id','club_room.id as room_id','club_subtitle.Status as club_subtitle_status',
            	'club_room.start_date')
            ->get();

       	$response = array();


		 foreach ($club as $key => $clubtype) {

			$club_type = array(
				'club_type' => $clubtype->title_type,
				'club_type_id' => $clubtype->club_type_id,
				'club_subtitle' => $clubtype->club_subtitle,
				'club_sub_id' => $clubtype->club_sub_id,
				'room_id' => $clubtype->room_id,
				'room_start_date' => $clubtype->start_date,
				'room_end_date' => $clubtype->end_date);
			$response[] = $club_type;

		}

		$res = array_unique($response, SORT_REGULAR);

		return $res;

	}

	public static function getClub(){

            $club = DB::table('club_type')
            ->join('club_subtitle', 'club_type.id', '=', 'club_subtitle.type_id')
            ->join('club_room', 'club_subtitle.id', '=', 'club_room.subtitle_id')
            ->select('club_room.subtitle_id as subtitle_id','club_type.id as type_id','club_subtitle.id as sub_id','club_room.id as room_id','club_type.title_type','club_type.status as type_status','club_subtitle.title as club_subtitle','club_room.end_date','club_subtitle.type_id as sub_id','club_subtitle.id as sub_id','club_subtitle.Status as subtitle_status','club_room.start_date')
            ->get();

            // $response = $club;
            //dd($club);
            $response = array();
            $data = array();
    $i=0;
	$j=0;
	foreach ($club as $key => $clubs) {

		// $lastdate = date("M d, Y", strtotime($students->lastdate));
		 //$response[];
		//print_r($clubs->type_id);die;
		 
		$data_sub_id = $clubs->sub_id;
		if(in_array($data_sub_id,$response)){
			//if(in_array($data_sub_id,$data_type)){
				//}else{
					//$type_id[$clubs->type_id]['st_type']  = $clubs->type_status;
					//}
			$room_id[$clubs->room_id]['start_date'] = $clubs->start_date;
			$room_id[$clubs->room_id]['end_date'] = $clubs->end_date;
			$i++;
			 
		}else{
			$response['title_id'] = $clubs->type_id;
			$type_id[$clubs->type_id]['type_id']  = $clubs->type_id;			 
			$type_id[$clubs->type_id]['title_type']  = $clubs->title_type;
			$type_id[$clubs->type_id]['st_type']  = $clubs->type_status;
			$sub_id[$clubs->sub_id]['title_type_id'] = $clubs->type_id;
			$sub_id[$clubs->sub_id]['sub_title'] = $clubs->club_subtitle;
			$sub_id[$clubs->sub_id]['st_title'] = $clubs->subtitle_status;
			$room_id[$clubs->room_id]['subtitle_id'] = $clubs->subtitle_id;
			$room_id[$clubs->room_id]['start_date'] = $clubs->start_date;
			$room_id[$clubs->room_id]['end_date'] = $clubs->end_date;
			//$data_type = $type_id;
			//array_push($sub_id[$i],$room_id);
			//array_push($type_id[$i],$sub_id);
			
			//echo 1;
			 
		}
	
	}
	//print_r($type_id);die;
	 
	 
    //dd($type_id,$sub_id,$room_id);
    // dd($data);
	return $response;

		//protected $student = 'student';

	}

	public static function countSTD($id) {

		$count_std = DB::table('club_register')
		->select('*')
		->where('room_id','=',$id)
		->get();

		//dd($count_std);
		return count($count_std);
	}
    
}
