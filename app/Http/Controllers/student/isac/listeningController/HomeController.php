<?php

namespace App\Http\Controllers\student\isac\listeningController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;

class HomeController extends Controller
{

    public function __construct() {
        $this->middleware('auth:student');
    }

    public function index()
    {
        if(Auth::guard('student')->check()) {
            
            $main_menu = DB::table('menu_lis')
            ->select('*')
            ->get();

            foreach($main_menu as $menus){

                $data = array(
                    'menu_name' =>  $menus->menu_name,
                    'menu_id' =>  $menus->menu_id,
                    'pdf_file' =>  $menus->pdf_file
                );
                $menu[$menus->menu_type][$menus->menu_name] = $data;

            }
            // dd($menu);

            return view('student.isac.listening.home', compact('menu'));
        }else {
            return redirect('user_login');
        }
    }

    public function submenu(Request $request){
        $main = DB::table('menu_lis')
        ->select('menu_name')
        ->where('menu_id', '=',  $request->input('main_menu'))
        ->first();

        $sub_menu = DB::table('sub_menu_lis')
        ->select('*')
        ->where('sub_menu_type','=', $request->input('main_menu'))
        ->get();



        if($request->input('type') == '1'){
            $data = array(
                'color' => "info", 
                'sub_menu' => "Language Drills Practice"
            );
        }elseif ($request->input('type') == '2'){
            $data = array(
                'color' => "warning", 
                'sub_menu' => "NC Listening Test"
            );
        }elseif($request->input('type') == '3'){
            $data = array(
                'color' => "danger", 
                'sub_menu' => "Active Listening"
            );
        }else{
            $data = array(
                'color' => "pink", 
                'sub_menu' => "Challenges Practice"
            );
        }
        return view('student.isac.listening.subhome', compact('sub_menu','data','main'));
    }

    public function exam($exam_type, $exam_id){
        // dd($exam_type, $exam_id);

        $menu_listening = DB::table('menu_lis')
        ->select('menu_id', 'menu_name', 'menu_type')
        ->where('menu_id', '=', $exam_type)
        ->get();

        $sub_menu_listening = DB::table('sub_menu_lis')
        ->select('*')
        ->where('sub_menu_type', '=', $exam_type)
        ->where('sub_menu_id', '=', $exam_id)
        ->get();

        $navigation_count =  DB::table('sub_menu_lis')
        ->where('sub_menu_type','=', $sub_menu_listening[0]->sub_menu_type)
        ->select('sub_menu_id')
        ->get();

        $pageTitle = [
            "menu_name" => $menu_listening[0]->menu_name,
            "menu_id" => $menu_listening[0]->menu_id,
            "sub_menu_id" => $sub_menu_listening[0]->sub_menu_id,
            "sub_menu_name" => $sub_menu_listening[0]->sub_menu_name,
            "sub_menu_type" => $sub_menu_listening[0]->sub_menu_type,
            "name_audio" => $sub_menu_listening[0]->name_audio,
        ];

        $pagination = [
            'prev' => "isac/listening/".($exam_type)."/".($exam_id-1),
            'current' => $exam_id,
            'next' => "isac/listening/".($exam_type)."/".($exam_id+1),
            'textBtn' => $exam_id == count($navigation_count) ? 'Finish' : 'Next'
        ];

        // dd($pageTitle);

        
        $view = "student.isac.listening.exam.$exam_type.$exam_id";
       
        return view('student.isac.listening.exam', ['view' => $view , 'pageTitle' => $pageTitle, 'pagination' => $pagination]);
    }
}
