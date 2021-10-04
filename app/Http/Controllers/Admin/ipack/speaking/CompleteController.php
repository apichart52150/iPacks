<?php

namespace App\Http\Controllers\Admin\ipack\speaking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\AdminSpeaking;
use DB;

class CompleteController extends Controller
{
    public function index(){

        return view('admin.isac.speaking.complete');
    }

    public function completeAjax(Request $request){

        $staff_id = auth('staff')->user()->staff_id;

        $columns = array(
            0 => 'id',
            1 => 'first_name',
            2 => 'last_name',
            3 => 'topic',
            4 => 'created_at',
            5 => 'th_sent_date',
            6 => 'action'
        );

        $totalData = DB::table('speaking')
        ->select('speaking.*','users.first_name', 'users.last_name')
        ->leftjoin('users','users.id','=','speaking.std_id')
        ->where([
            ['speaking.status','=','success'],
            ['speaking.th_id','=', $staff_id]
        ])
        ->count();

        $totalFiltered = $totalData;

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if(empty($request->input('search.value'))){

            $completes = DB::table('speaking')
            ->select('speaking.*','users.first_name', 'users.last_name')
            ->leftjoin('users','users.id','=','speaking.std_id')
            ->where([
                ['speaking.status','=','success'],
                ['speaking.th_id','=', $staff_id]
            ])
            ->offset($start)
            ->limit($limit)
            ->orderBy($order, $dir)
            ->get();

        }else {
            $search = $request->input('search.value');

            $completes = DB::table('speaking')
            ->select('speaking.*','users.first_name', 'users.last_name')
            ->leftjoin('users','users.id','=','speaking.std_id')
            ->where([
                ['speaking.status','=','success'],
                ['speaking.th_id','=', $staff_id]
            ])
            ->orwhere('users.first_name','LIKE',"%{search}%")
            ->orwhere('users.last_name','LIKE',"%{search}%")
            ->orwhere('speaking.topic','LIKE',"%{search}%")
            ->offset($start)
            ->limit($limit)
            ->orderBy($order, $dir)
            ->get();

            $totalFiltered = DB::table('speaking')
            ->select('speaking.*','users.first_name', 'users.last_name')
            ->leftjoin('users','users.id','=','speaking.std_id')
            ->where([
                ['speaking.status','=','success'],
                ['speaking.th_id','=', $staff_id]
            ])
            ->orwhere('users.first_name','LIKE',"%{search}%")
            ->orwhere('users.last_name','LIKE',"%{search}%")
            ->orwhere('speaking.topic','LIKE',"%{search}%")
            ->offset($start)
            ->limit($limit)
            ->orderBy($order, $dir)
            ->count();
        }

        $data = array();

        if(!empty($completes)){
            $i = 1;
            foreach ($completes as $complete) {
                
                $show = route('completed',$complete->id);

                $nestedData['id'] = $i;
                $nestedData['username'] = $complete->first_name." ".$complete->last_name;
                $nestedData['topic'] = $complete->topic;
                $created_at = date('d-m-Y H:i:s', strtotime($complete->created_at));
                $nestedData['created_at'] = "<span class='badge badge-success p-1'>{$created_at}</span>";
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

        $check = AdminSpeaking::check($id);

        return view('admin.isac.speaking.view_completed',compact('check'));
    }

}
