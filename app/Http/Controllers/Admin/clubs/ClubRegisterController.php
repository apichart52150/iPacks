<?php
namespace App\Http\Controllers\Admin\clubs;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Club_Register;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Excel;
 


class ClubRegisterController extends Controller {

	public function index($id = null) {
		
		$club_register = Club_Register::getClubregister($id);
		//dd($club_register);

       	if(count($club_register) != 0){ 
		 	$id= array('id'=>$club_register['0']->room_id);
		 
	   	}else{
		    
		}

		$alert_app = DB::table('alert_app')
		->where('room_id','=',$id)
		->select('*')
		->get();
		//dd($alert_app);

		if(empty($alert_app)){
			$status = '';	

			}else{
				//print_r($alert_app);die;
				$status = array();
				foreach($alert_app as $key =>$rows){
					//dd($alert_app);die;
					$status[$rows->std_id] = $rows->status;
				}
			}
			
					 
		return view('admin.clubs.club_register',compact('club_register','status','id'));
	}


	public function excel_room($id = null) {

		$club_register = Club_Register::ExcelClubregister($id);
		$club_info = Club_Register::getClubregister($id);

		$title = $club_info[0]->title_type.' '.$club_info[0]->club_subtitle;
		$date = date('j F Y (D) g:i', strtotime($club_info[0]->start_date)).'-'.strtoupper(date('g:i a', strtotime($club_info[0]->end_date)));
		$teacher = $club_info[0]->teacher;

		$data = array();

		for($i = 0; $i < 16; $i++) {
			$data[$i]['No'] = $i+1;
			if(!empty($club_register[$i])) {
				$data[$i]['Name'] = $club_register[$i]->Name;
				$data[$i]['Nickname'] = $club_register[$i]->Nickname;
				$data[$i]['Mobile'] = $club_register[$i]->Mobile;
				$data[$i]['Remark'] = '';
			} else {
				$data[$i]['Name'] = '';
				$data[$i]['Nickname'] = '';
				$data[$i]['Mobile'] = '';
				$data[$i]['Remark'] = '';
			}
		}

		Excel::create($club_register['0']->Type.'_'.$club_register['0']->SubType, function($excel) use($data, $title, $date, $teacher){
		$excel->sheet('Excel sheet', function($sheet) use($data, $title, $date, $teacher){

			$sheet->fromArray($data, null, 'A7', true);

			$sheet->setAutoSize(true);
			// $sheet->setHeight(6, 30);

			$row = [];

			for($i = 6; $i <= 23; $i++) {
				$row[$i] = 25;	
			}

			$sheet->setHeight($row);

			$sheet->setSize(array(
				'A6' => array(
					'width' => 7
				),
				'E6' => array(
					'width' => 30,
				)
			));

			$sheet->mergeCells('A3:E3');
			$sheet->mergeCells('A4:E4');
			$sheet->mergeCells('A5:E6');
			$sheet->setBorder('A7:E23');
			$sheet->cell('A7:F7', function($cell) {
				$cell->setAlignment('center');
				$cell->setValignment('center');
				$cell->setFontWeight('bold');
			});

			$sheet->cell('A7:E23', function($cell) {
				$cell->setAlignment('center');
				$cell->setValignment('center');
			});

			$sheet->cell('B7:B23', function($cell) {
				$cell->setAlignment('left');
				$cell->setValignment('center');
			});

			$sheet->cell('A3', function($cell) use($title) {
				$cell->setValue($title);
				$cell->setFontSize(20);
				$cell->setAlignment('center');
				$cell->setValignment('top');
				$cell->setFontWeight('bold');
			});
			$sheet->cell('A4', function($cell) use($date) {
				$cell->setValue($date);
				$cell->setFontSize(20);
				$cell->setAlignment('center');
				$cell->setFontWeight('bold');
			});
			$sheet->cell('A5', function($cell) use($teacher) {
				$cell->setValue($teacher);
				$cell->setFontSize(20);
				$cell->setAlignment('right');
				$cell->setValignment('center');
				$cell->setFontWeight('bold');
			});
		});

		})->export('xls');		 
 		//return view('admin.club_register.index',compact('club_register','status'));
	}


	public function check_student(Request $request) {

		$detail = $request->detail.' '.$request->teacher.' '.date('j F, Y h:i:s', strtotime($request->start_date));

		$status = Club_register::Check_Student_updet($request->std_id, $request->status, $detail, $request->clubroom_st, $request->room_id);

		if ($status == 'success_check_point') {

			return redirect('admin/club_register/'.$request->room_id);

		}else if ($status == 'success_check_bonus') {

			return redirect('admin/club_register/'.$request->room_id);

		}else if ($status == 'Attendance') {

			return redirect('admin/club_register/'.$request->room_id);

		}else if ($status == 'success_cancel_point') {

			return redirect('admin/club_register/'.$request->room_id);

		}else if ($status == 'success_cancel_bonus') {

			return redirect('admin/club_register/'.$request->room_id);

		}else {

			echo 'error 404 (ระบบขัดข้อง ติดต่อ Administrator)'; die;
			
		}
		 
	}

}