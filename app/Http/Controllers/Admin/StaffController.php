<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Datatables;


class StaffController extends Controller {

	public function index() {

        $staff = DB::table('staff')
        ->select('*')
        ->get();
       
        return view('admin.staff', compact('staff'));
    }

    public function create($status=null)
	{

       $course = DB::table('course')
       ->join('class','course.courseid', '=', 'class.courseid')
       ->where('class.lastdate', '>',date('Y-m-d'))
       ->select('course.courseid','course.coursename','class.nccode','class.startdate','class.lastdate')
       ->orderBy('class.created_at', 'desc')
       ->get();

       return view('admin.student', compact('course'));
   }

    public function addstaff(Request $request){

        $staff = DB::table('staff')
        ->select('staff_username')
        ->where('staff_username', '=', $request->staff_username)
        ->get();

        $row_staff = count($staff);

        if($row_staff == 0){

            DB::table('staff')->insert([
                'staff_username' => $request->staff_username, 
                'staff_password' => md5($request->staff_password), 
                'staff_level' => $request->staff_level,
                'staff_status' => $request->staff_status, 
            ]);
        
            session()->flash('success_ans','<div class="alert alert-success" role="alert">
            <i class="fas fa-check-circle mr-2"></i><strong>Add Staff Success</strong></div>'); 

            return redirect('staff');

        }else{

            session()->flash('error_ans','<div class="alert alert-danger" role="alert">
            <i class="far fa-window-close mr-2"></i><strong>Username* นี้มีในระบบแล้ว ไม่สามารถสร้างซ้อนทับได้</strong></div>');
            return redirect('staff');
        }

        return redirect('staff');
    }


    public function edit($staff_id)
	{

       $staff = DB::table('staff')
       ->select(DB::raw('*'))
       ->where('staff_id','=',$staff_id)
       ->get();

       return view('admin.edit', compact('staff') );
    }

    public function staffupdate($staffid, Request $request)
	{
        if(empty($request->staff_password)){
            DB::table('staff')
            ->where('staffid', $staffid)
            ->update([
                'staff_username' => $request->staff_username, 
                'staff_level' => $request->staff_level,
                'staff_status' => $request->staff_status,
            ]);
        }else{
            DB::table('staff')
            ->where('staffid', $staffid)
            ->update([
                'staff_username' => $request->staff_username, 
                'staff_password' => md5($request->staff_password), 
                'staff_level' => $request->staff_level,
                'staff_status' => $request->staff_status,
            ]);
        }

        session()->flash('success_ans','<div class="alert alert-success" role="alert">
        <i class="fas fa-check-circle mr-2"></i><strong>Update Success</strong></div>'); 

        return redirect('staff');
    }

    

    public function staffdelete($staff_id)
	{
		DB::transaction(function() use($staff_id) {
        DB::table('staff')->where('staff_id', '=',$staff_id)->delete();
        });

        session()->flash('success_ans','<div class="alert alert-danger" role="alert">
        <i class="fas fa-check-circle mr-2"></i><strong>Delete Success</strong></div>'); 

		return redirect('staff');
	}
}
