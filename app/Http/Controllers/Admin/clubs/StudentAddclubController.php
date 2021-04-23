<?php

namespace App\Http\Controllers\Admin\clubs;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentAddclubController extends Controller {

	public function add_club(Request $request) {

		dd($request->all());

		if($request != '')
		{

			$room = DB::table('club_room')
			->join('club_subtitle', 'club_subtitle.id', '=', 'club_room.subtitle_id')
			->join('club_type', 'club_type.id', '=', 'club_subtitle.type_id')
			->where('club_room.id','=',$request->room_id)
			->limit(1)
			->select('club_room.*','club_type.title_type as type','club_subtitle.title as title','club_room.amount')
			->get();
			
			$check_studentroombonus = DB::table('club_register')
			->join('club_room', 'club_room.id', '=', 'club_register.room_id')
			->where('club_register.std_id','=',$request->std_id)
			->where('club_room.status','=','1')
			->select('club_room.*')
			->get();
			$rs_studentroombonus = count($check_studentroombonus);
			
			$check_studentroombonus_s2 = DB::table('club_register')
			->join('club_room', 'club_room.id', '=', 'club_register.room_id')
			->where('club_register.std_id','=',$request->std_id)
			->where('club_room.status','=','3')
			->select('club_room.*')
			->get();
			$rs_studentroombonus_s2 = count($check_studentroombonus_s2);
			
 

			$student = DB::table('student')
			->where('std_id','=',$request->std_id)
			->limit(1)
			->select('*')
			->get();
			//print_r($student[0]->bonus);die;

			$room_amount = DB::table('club_register')
			->where('room_id','=',$request->room_id)
            //->groupBy('id')
            //->select('count(id) as amount')
			->select('*')
			->get();

			$check_studentroom = DB::table('club_register')
			->where('std_id','=',$student[0]->std_id)
			->where('room_id','=',$request->room_id)
            //->groupBy('id')
            //->select('count(id) as amount')
			->select('*')
			->get();
			 $rs_countstudent = count($check_studentroom);

            //print_r(count($room_amount));die;
			//print_r($room[0]->amount);die;
          
			   
			  
			if(count($room_amount) < $room[0]->amount){
			foreach ($room as $key => $rooms) {
        	# code...
        	 //print_r($student[0]->std_point );die;

				if($rooms->status == '0')
				{
					if(($student[0]->std_point > 0) and ($rs_countstudent == 0))
					{
					//print_r($rooms->title );die;
						$point = $student[0]->std_point - 1;
						DB::table('student')
						->where('std_id', $student[0]->std_id)
						->update(['std_point' => $point]);

						DB::table('club_register')->insert(
							array('std_id' =>$student[0]->std_id,
								'room_id' =>$request->room_id)
							);

						DB::table('log')->insert(
							array('std_id' =>$student[0]->std_id, 'content' =>
							 'Register '.$rooms->type.' '.$rooms->teacher.' '.date('j F, Y h:i:s',strtotime($rooms->start_date)).' Complete','tab' => 'Register','tab' => 'Register','score'=> '-1 Point','room_id' => $request->room_id)
							);
						return redirect('admin/club_register/'.$request->room_id);

					}
					else
					{
					//$status ='Point ไม่พอสำหรับลง Club';
					 session()->flash('message_register','Point ไม่พอสำหรับลง Club หรือมีชื่อใน Club อยู่เเล้ว');
                     session()->flash('status','Fail');
                     return redirect()->to('admin/studentaddclub/'.$student[0]->std_id);
					 
					}
				}elseif($rooms->status == '1'){
					 
					if(($student[0]->std_bonus > 0) and ($rs_countstudent == 0) and ($rs_studentroombonus < 1))
					{

						$bonus = $student[0]->std_bonus - 1;
						DB::table('student')
						->where('std_id', $student[0]->std_id)
						->update(['std_bonus' => $bonus]);

						DB::table('club_register')->insert(
							array('std_id' =>$student[0]->std_id,
								'room_id' =>$request->room_id)
							);

						DB::table('log')->insert(
							array('std_id' =>$student[0]->std_id,
								'content' => 'Register '.$rooms->type.' '.$rooms->teacher.' '.date('j F, Y h:i:s',strtotime($rooms->start_date)).' Complete'
								,'tab' => 'Register'
								,'room_id' => $request->room_id
								,'score'=> '-1 Bonus'));
						return redirect('admin/club_register/'.$request->room_id);
					}
					else 
					{
					 
					 
					 session()->flash('message_register','Bonus ไม่พอสำหรับลง Club หรือมีชื่อใน Club อยู่เเล้ว');
                     session()->flash('status','Fail');
                     return redirect()->to('admin/studentaddclub/'.$student[0]->std_id);
					}
				}elseif($rooms->status == '3'){
					 
					if(($student[0]->std_bonus > 0) and ($rs_countstudent == 0) and ($rs_studentroombonus_s2 < 1))
					{

						$bonus = $student[0]->std_bonus - 1;
						DB::table('student')
						->where('std_id', $student[0]->std_id)
						->update(['std_bonus' => $bonus]);

						DB::table('club_register')->insert(
							array('std_id' =>$student[0]->std_id,
								'room_id' =>$request->room_id)
							);

						DB::table('log')->insert(
							array('std_id' =>$student[0]->std_id,
								'content' => 'Register '.$rooms->type.' '.$rooms->teacher.' '.date('j F, Y h:i:s',strtotime($rooms->start_date)).' Complete'
								,'tab' => 'Register'
								,'room_id' => $request->room_id
								,'score'=> '-1 Bonus'));
						return redirect('admin/club_register/'.$request->room_id);
					}
					else 
					{
					 
					 
					 session()->flash('message_register','Bonus ไม่พอสำหรับลง Club หรือมีชื่อใน Club อยู่เเล้ว');
                     session()->flash('status','Fail');
                     return redirect()->to('admin/studentaddclub/'.$student[0]->std_id);
					}
				}
			}
		}else{
			//$status ='Club เต็ม';
		 
					 session()->flash('message_register','Club เต็ม');
                     session()->flash('status','Fail');
                     return redirect()->to('admin/studentaddclub/'.$student[0]->std_id);
			}
		  }
		}
 
}