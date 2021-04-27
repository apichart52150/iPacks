<?php

namespace App\Http\Controllers\Admin\clubs;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Club_Room;
use App\Http\Requests\CreateClubRoomRequest;
use App\Http\Requests\UpdateClubRoomRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Club_Subtitle;
use App\Club_Type;



class DashboardController extends Controller {

	
	public function index(Request $request)
	{
		$club_room = DB::table('club_room')
		->join('club_subtitle', 'club_subtitle.id', '=', 'club_room.subtitle_id')
		->join('club_type', 'club_type.id', '=', 'club_subtitle.type_id')
		->select('club_room.*','club_type.title_type','club_subtitle.title')
		->get();

		$club_type = DB::table('club_type')
		->join('club_subtitle', 'club_subtitle.type_id', '=', 'club_type.id')
		->select('club_subtitle.id','club_type.title_type','club_subtitle.title')
		->get();

		$data = [
			'club_room' => $club_room,
			'club_type' => $club_type
		];

		// dd($data);

		return view('admin.clubs.dashboard', compact('data'));
	}

	public function addclub(Request $request){

		$data = [
			"subtitle_id" => $request->input('subtitle_id'),
			"topicClub" => $request->input('topicClub'),
			"teacher" => $request->input('teacher'),
			"amount" => $request->input('amount'),
			"start_date" => $request->input('start_date')." ".$request->input('start_time'),
			"end_date" => $request->input('end_date')." ".$request->input('end_time'),
			"start_post_date" => $request->input('start_post_date'),
			"end_post_date" => $request->input('end_post_date'),
			"status" => $request->input('status')
		];

		Club_Room::create($data);

		return redirect('clubs/dashboard');
	}

	public function clubupdate($id, Request $request){

		$club_room = Club_Room::findOrFail($id);

		$club_room->update($request->all());

		return redirect('clubs/dashboard');
	}

	public function clubdelete($id)
	{
		Club_Room::destroy($id);
		
		$data_filter = DB::table('club_register')
		->where('room_id','=',$id)
		->delete();

		$alert_app = DB::table('alert_app')
		->where('room_id','=',$id)
		->delete();

		return redirect('clubs/dashboard');
	}

	public function endclub(Request $request) {  
		
    	$detail = $request->title_type.' : '.date('j F, Y h:i:s',strtotime($request->start_date));

    	$endclass = Club_Room::endclass($request->room_id);

    	$endclass = 'endclass_success';

    	if($endclass == 'endclass_success'){
			if($request->status == '0'){//point
			 	$data_filter = DB::table('club_register')
			 	->where('room_id','=',$request->room_id)
			 	->get();
			 	foreach ($data_filter as $key => $rows){

			 		$student = DB::table('student')
			 		->where('std_id','=',$rows->std_id)
			 		->limit(1)
			 		->select('*')
			 		->get();

			 		try {
						DB::beginTransaction();
						$point = $student[0]->std_point + 1;
						DB::table('student')
						->where('std_id', $rows->std_id)
						->update(['std_point' => $point]);
   
						DB::table('alert_app')->insert(
							array('std_id' => $rows->std_id,
								'content' => 'Cancel '.$detail,
								'room_id' => $request->room_id,
								'status' => '1')
							);
   
						DB::table('log')->insert(
							array('std_id' =>$rows->std_id,
								'content' => 'Cancel '.$detail,
							   	'tab' => 'Cancel',
								'score' => '+ 1 Point'
							)
						);

						DB::commit();
					} catch (Exception $e) {
						DB::rollback();
						echo $e->getMessage();
					}

			 	}

			 	return redirect('clubs/dashboard');

			}elseif($request->status == '1'){//bonus

				$data_filter = DB::table('club_register')
				->where('room_id','=',$request->room_id)
				->get();

				foreach ($data_filter as $key => $rows){	 
					$student = DB::table('student')
					->where('std_id','=',$rows->std_id)
					->limit(1)
					->select('*')
					->get();

					try {
						DB::BeginTransaction();
						$bonus = $student[0]->std_bonus + 1;
						DB::table('student')
						->where('std_id', $rows->std_id)
						->update(['std_bonus' => $bonus]);

						DB::table('alert_app')->insert(
							array('std_id' =>$rows->std_id,
								'content' => 'Cancel '.$detail,
								'room_id' => $request->room_id,
								'status' => '1')
						);

						DB::table('log')->insert(
							array('std_id' =>$rows->std_id,
								'content' => 'Cancel '.$detail,
								'tab' => 'Cancel',
								'score' => '+ 1 Bonus')
						);

						DB::commit();
					} catch (Exception $e) {
						DB::rollback();
						return $e->getMessage();
					}
				}
				 	
				return redirect('clubs/dashboard');

			}elseif($request->status == '3'){//bonus

				$data_filter = DB::table('club_register')
				->where('room_id','=',$request->room_id)
				->get();
				foreach ($data_filter as $key => $rows){	 
					$student = DB::table('student')
					->where('std_id','=',$rows->std_id)
					->limit(1)
					->select('*')
					->get();

					try {
						DB::BeginTransaction();
						$bonus = $student[0]->std_bonus + 1;
						DB::table('student')
						->where('std_id', $rows->std_id)
						->update(['std_bonus' => $bonus]);

						DB::table('alert_app')->insert(
							array('std_id' =>$rows->std_id,
							'content' => 'Cancel '.$detail,
							'room_id' => $request->room_id,
							'status' => '1')
						);

						DB::table('log')->insert(
							array('std_id' =>$rows->std_id,
							'content' => 'Cancel '.$detail,
							'tab' => 'Cancel',
							'score' => '+ 1 Bonus')
						);
						DB::commit();
					} catch (Exception $e) {
						DB::rollback();
						return $e->getMesaage();
					}
				}

				return redirect('clubs/dashboard');
				 
			}
		}

		return redirect('clubs/dashboard');
	}

}
