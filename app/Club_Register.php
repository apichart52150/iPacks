<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;
use Illuminate\Support\Facades\DB;

class Club_Register extends Model {

    protected $table    = 'club_register';
    
    protected $fillable = [
    'type_id',
    'title_id',
    'std_id',
    'room_id',
    'status'
    ];

    public static function getClubregister($id){
    	$club = DB::table('club_register')
    	->leftJoin('club_room', 'club_room.id', '=', 'club_register.room_id')
    	->leftJoin('club_subtitle', 'club_subtitle.id', '=', 'club_room.subtitle_id')
    	->leftJoin('club_type', 'club_type.id', '=', 'club_subtitle.type_id')
    	->leftJoin('student','club_register.std_id', '=', 'student.std_id')
		
		->leftJoin('class_student','class_student.std_id', '=', 'student.std_id')
		->leftJoin('class','class_student.nccode', '=', 'class.nccode') 
		->leftJoin('course','course.courseid', '=', 'class.courseid') 
    	->where('club_register.room_id','=',$id)
    	->select('club_type.id as club_type_id','club_type.title_type', 'club_type.status as title_status', 'club_subtitle.id as club_sub_id','club_subtitle.title as club_subtitle','club_subtitle.Status as club_subtitle_status','club_room.id as room_id','club_room.end_date','club_room.start_date','club_room.status as clubroom_st','club_register.std_id','club_register.status','club_register.datecreate','student.std_name','student.std_password','student.std_point','student.std_bonus','student.std_mobile','student.std_nickname', 'student.coursetype','club_room.teacher','class_student.nccode','class.courseid','course.coursename')
    	->get();

    	return $club;
    }

    public static function ExcelClubregister($id){
        $club = DB::table('club_register')
        ->join('club_room', 'club_room.id', '=', 'club_register.room_id')
        ->join('club_subtitle', 'club_subtitle.id', '=', 'club_room.subtitle_id')
        ->join('club_type', 'club_type.id', '=', 'club_subtitle.type_id')
        ->join('student','club_register.std_id', '=', 'student.std_id')
        ->where('club_register.room_id','=',$id)
        ->select('student.std_name as Name','student.std_nickname as Nickname','student.std_mobile as Mobile','club_type.title_type as Type','club_subtitle.title as SubType','club_room.start_date as Start','club_room.end_date as End')
        ->get();
		//dd($club);
        return $club;
    }

    public static function Check_Student_updet($id,$status,$detail,$clubroom_st,$room_id){
		
    	if($status == 'fail'){//ขาดเรียน
			
			if($clubroom_st == '0'){// 0 คือ Point
				$student = DB::table('student')
				->where('std_id','=',$id)
				->limit(1)
				->select('*')
				->get();
				
				$point = $student[0]->std_point - 1;
						DB::table('student')
						->where('std_id', $student[0]->std_id)
						->update(['std_point' => $point]);
				
    			DB::table('log')->insert(
    				array('std_id' =>$id,
    					'content' => 'Absence '.$detail,
						'tab' => 'Checking',
						'room_id' => $room_id,
    					'score' => '-1 Point')
    				);
					
    			$data_filter = DB::table('club_register')
    			->where('std_id','=',$id)
				->where('room_id','=',$room_id)
    			->delete(); 
    			return 'Attendance';
				
    		}elseif($clubroom_st == '1'){// 1 คือ Bonus
				
				$student = DB::table('student')
				->where('std_id','=',$id)
				->limit(1)
				->select('*')
				->get();
				
				$bonus = $student[0]->std_bonus - 1;
						DB::table('student')
						->where('std_id', $student[0]->std_id)
						->update(['std_bonus' => $bonus]);
				
    			DB::table('log')->insert(
    				array('std_id' =>$id, 
    					'content' => 'Absence '.$detail,
						'tab' => 'Checking',
						'room_id' => $room_id,
    					'score' => '-1 Bonus')
    				);

    			$data_filter = DB::table('club_register')
    			->where('std_id','=',$id)
				->where('room_id','=',$room_id)
    			->delete(); 

    			return 'Attendance';
			}elseif($clubroom_st == '3'){// 3 คือ Bonus next week
				
				$student = DB::table('student')
				->where('std_id','=',$id)
				->limit(1)
				->select('*')
				->get();
				
				$bonus = $student[0]->std_bonus - 1;
						DB::table('student')
						->where('std_id', $student[0]->std_id)
						->update(['std_bonus' => $bonus]);
				
    			DB::table('log')->insert(
    				array('std_id' =>$id, 
    					'content' => 'Absence '.$detail,
						'tab' => 'Checking',
						'room_id' => $room_id,
    					'score' => '-1 Bonus')
    				);

    			$data_filter = DB::table('club_register')
    			->where('std_id','=',$id)
				->where('room_id','=',$room_id)
    			->delete(); 

    			return 'Attendance';
			}
	
    	}elseif($status == 'success'){//มาเรียน
    		if($clubroom_st == '0'){// 0 คือ Point
    			DB::table('log')->insert(
    				array('std_id' =>$id,
    					'content' => 'Attendance '.$detail,
						'tab' => 'Checking',
						'room_id' => $room_id,
    					'score' => 'Point')
    				);
    			$data_filter = DB::table('club_register')
    			->where('std_id','=',$id)
				->where('room_id','=',$room_id)
    			->delete(); 
    			return 'success_check_point';
    		}elseif($clubroom_st == '1'){// 1 คือ Bonus
    			DB::table('log')->insert(
    				array('std_id' =>$id, 
    					'content' => 'Attendance '.$detail,
						'tab' => 'Checking',
    					'score' => 'Bonus')
    				);

    			$data_filter = DB::table('club_register')
    			->where('std_id','=',$id)
				->where('room_id','=',$room_id)
    			->delete(); 

    			return 'success_check_bonus';
			}elseif($clubroom_st == '3'){// 3 คือ Bonus
    			DB::table('log')->insert(
    				array('std_id' =>$id, 
    					'content' => 'Attendance '.$detail,
						'tab' => 'Checking',
    					'score' => 'Bonus')
    				);

    			$data_filter = DB::table('club_register')
    			->where('std_id','=',$id)
				->where('room_id','=',$room_id)
    			->delete(); 

    			return 'success_check_bonus';
			}
		}elseif($status == 'cancel'){//ยกเลิกClub
			//print_r($status);die;
			$data_filter = DB::table('log')
			->where('std_id','=',$id)
			->where('room_id','=',$room_id)
			->delete(); 
				
           	if($clubroom_st == '0'){
			   $student = DB::table('student')
				->where('std_id','=',$id)
				->limit(1)
				->select('*')
				->get();
			   
    			 $point = $student[0]->std_point + 1;
						DB::table('student')
						->where('std_id', $student[0]->std_id)
						->update(['std_point' => $point]);
						
    			$data_filter = DB::table('club_register')
    			->where('std_id','=',$id)
				->where('room_id','=',$room_id)
    			->delete(); 
				
    			return 'success_cancel_point';
				
    		}elseif($clubroom_st == '1'){
				
				$student = DB::table('student')
				->where('std_id','=',$id)
				->limit(1)
				->select('*')
				->get();
    	 
		         $bonus = $student[0]->std_bonus + 1;
						DB::table('student')
						->where('std_id', $student[0]->std_id)
						->update(['std_bonus' => $bonus]);

    			$data_filter = DB::table('club_register')
    			->where('std_id','=',$id)
				->where('room_id','=',$room_id)
    			->delete(); 

    			return 'success_cancel_bonus';
				
			}elseif($clubroom_st == '3'){
					
				$student = DB::table('student')
				->where('std_id','=',$id)
				->limit(1)
				->select('*')
				->get();
			
					$bonus = $student[0]->std_bonus + 1;
						DB::table('student')
						->where('std_id', $student[0]->std_id)
						->update(['std_bonus' => $bonus]);

				$data_filter = DB::table('club_register')
				->where('std_id','=',$id)
				->where('room_id','=',$room_id)
				->delete(); 

				return 'success_cancel_bonus';
				
			}
    		 
				
		}else{
			return 'Fail [Fn_Check_Student_updet]';
		}
	}

    	
    
    
}

?>