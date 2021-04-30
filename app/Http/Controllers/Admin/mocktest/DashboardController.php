<?php
namespace App\Http\Controllers\Admin\mocktest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\Classroom;
use App\Carbon;
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
                if (date('Y-m-d') > $data->lastdate) {
                    $status = "<span class='badge badge-danger p-1'>Expire</span>";
                } else {
                    $status = "<span class='badge badge-success p-1'>Active</span>";
                }
                
                return $status;
            })
            ->editColumn('lastdate', function($data) {
                return date('j-F-Y',strtotime($data->lastdate));
            })
            ->editColumn('coursename', function($data){
                $view = route('class_detail', [$data->id]);
                return "<a href='$view'>".$data->coursename."</a>";
            })
            ->rawColumns(['status','coursename'])
            ->make(true);

        }
        
    	return view('admin.mocktest.dashboard');
    } 

}
