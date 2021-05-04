<?php
namespace App\Http\Controllers\Admin\mocktest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\Classroom;
use Carbon\Carbon;
use Datatables;

class DashboardController extends Controller
{
 
    public static function index(Request $request)
    {
    	// $data = Classroom::get_detail_classroom();
        if($request->ajax()){

            $data = DB::table('class')
            ->select('class.nccode','class.startdate','class.lastdate','class.th_name','course.coursename','class.id','class.class_pass','class.set_exam','set_exam.name') 
            ->leftjoin('course', 'class.courseid', '=', 'course.courseid')
            ->leftjoin('set_exam', 'set_exam.id', '=', 'class.set_exam')
            ->orderBy('class.created_at', 'DESC');

        
            return Datatables::of($data)

            ->addColumn('status', function($data) {
                $expdate = $data->lastdate.'23:59:59';
                if (strtotime($expdate) >=  strtotime(Carbon::now())) {
                    $status = "<span class='badge badge-success p-1'>Active</span>";
                } else {
                    $status = "<span class='badge badge-danger p-1'>Expire</span>";
                }
                return $status;
            })

            ->addColumn('class_pass', function($data) {
                $class_data = json_encode($data);
                if(empty($data->name)){
                    $class_pass = "
                    <button type='button' class='btn btn-primary waves-effect waves-light' data-toggle='modal' data-target='#classpass' data-whatever='$class_data'><i class='fas fa-lock'></i></button>
                    <button type='button' class='btn btn-secondary waves-effect waves-light' data-toggle='modal' data-target='#selectexam' data-whatever='$class_data'>Add Class</button>";
                }else{
                    $class_pass = "
                    <button type='button' class='btn btn-primary waves-effect waves-light' data-toggle='modal' data-target='#classpass' data-whatever='$class_data'><i class='fas fa-lock'></i></button>
                    <button type='button' class='btn btn-warning' data-toggle='modal' data-target='#selectexam' data-whatever='$class_data'>$data->coursename</button>";
                }
                return $class_pass;
            })

            ->editColumn('lastdate', function($data) {
                return date('j-F-Y',strtotime($data->lastdate));
            })

            ->editColumn('coursename', function($data){
                $view = route('class_detail', [$data->id]);
                return "<a href='$view'>".$data->coursename."</a>";
            })
            ->rawColumns(['status','coursename','class_pass'])
            ->make(true);

        }
        
    	return view('admin.mocktest.dashboard');
    } 

}
