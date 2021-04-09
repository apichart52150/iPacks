<?php

namespace App\Http\Controllers\Admin\isac\writing;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\AdminWriting;
use DB;

class CompleteController extends Controller
{

    public function __construct() {

        $this->middleware('auth');
    }

    public function index() {

        return view('admin.isac.writing.complete');

    }

    public function completeAjax_writing(Request $request){

        $columns = array(
            0 => 'id',
            1 => 'std_name',
            2 => 'header_test',
            3 => 'test_type',
            4 => 'sent_date',
            5 => 'th_sent_date',
            6 => 'action',
        );

        $totalData = DB::table('text_result')
        ->select('text_result.*','student.std_name')
        ->leftjoin('student','student.std_id','=','text_result.std_id')
        ->where([
            ['text_result.status','=','Y'],
            ['text_result.th_id','=', Auth::user()->id]
        ])
        ->count();

        $totalFiltered = $totalData;

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if(empty($request->input('search.value'))){

            $completes = DB::table('text_result')
            ->select('text_result.*','student.std_name')
            ->leftjoin('student','student.std_id','=','text_result.std_id')
            ->where([
                ['text_result.status','=','Y'],
                ['text_result.th_id','=', Auth::user()->id]
            ])
            ->offset($start)
            ->limit($limit)
            ->orderBy($order, $dir)
            ->get();

        } else {

            $search = $request->input('search.value');

            $completes = DB::table('text_result')
            ->select('text_result.*','student.std_name')
            ->leftjoin('student','student.std_id','=','text_result.std_id')
            ->where([
                ['text_result.status','=','Y'],
                ['text_result.th_id','=', Auth::user()->id]
            ])
            ->orwhere('text_result.header_test','LIKE',"%{search}%")
            ->orwhere('text_result.test_type','LIKE',"%{search}%")
            ->orwhere('student.std_name','LIKE',"%{search}%")
            ->offset($start)
            ->limit($limit)
            ->orderBy($order, $dir)
            ->get();

            $totalFiltered = DB::table('text_result')
            ->select('text_result.*','student.std_name')
            ->leftjoin('student','student.std_id','=','text_result.std_id')
            ->where([
                ['text_result.status','=','Y'],
                ['text_result.th_id','=', Auth::user()->id]
            ])
            ->orwhere('text_result.header_test','LIKE',"%{search}%")
            ->orwhere('text_result.test_type','LIKE',"%{search}%")
            ->orwhere('student.std_name','LIKE',"%{search}%")
            ->offset($start)
            ->limit($limit)
            ->orderBy($order, $dir)
            ->count();

        }

        $data = array();

        if(!empty($completes)){
            $i = 1;
            foreach ($completes as $complete) {

                $show = route('completed_writing',$complete->id);
                
                $nestedData['id'] = $i;
                $nestedData['std_name'] = $complete->std_name;
                $nestedData['header_test'] = $complete->header_test;
                $nestedData['test_type'] = $complete->test_type;
                $sent_date = date('d-m-Y H:i:s', strtotime($complete->sent_date));
                $nestedData['sent_date'] = "<span class='badge badge-success p-1'>{$sent_date}</span>";
                ($complete->th_sent_date != null ? $th_date = date('d-m-Y H:i:s', strtotime($complete->th_sent_date)) : $th_date = '');
                $nestedData['th_sent_date'] = "<span class='badge badge-dark p-1'>{$th_date}</span>";
                $nestedData['action'] = "<a href='{$show}' class='btn btn-primary btn-sm'>View</a>";
                
                $data[] = $nestedData;

                $i++;
            }
        }



        $json_data = array(
            "draw" => intval($request->input('draw')),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data
        );

        return response()->json($json_data);
    }

    public function history($id){

        $check = AdminWriting::check($id);

        return view('admin.isac.writing.view_completed',compact('check'));
    }
}
