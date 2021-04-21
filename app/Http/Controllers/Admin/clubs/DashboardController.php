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

		return view('admin.clubs.club_room.index', compact('data'));
	}

	public function addclub(CreateClubRoomRequest $request)
	{
	    
		Club_Room::create($request->all());

		return redirect()->route(config('quickadmin.route').'.club_room.index');
	}

}
