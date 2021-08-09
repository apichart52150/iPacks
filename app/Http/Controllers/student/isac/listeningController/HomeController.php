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

    public function audio($id, $name){
        
        return view('student.isac.listening.audio' ,compact('id','name'));
    }
}
