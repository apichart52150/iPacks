<?php

namespace App\Http\Controllers\student\isac\listeningController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;

class HomeController extends Controller
{

    public function index()
    {
        if(Auth::guard('student')->check()) {
            
            $main_menu = DB::table('menu_lis')
            ->select('*')
            ->get();

            $sub_menu = DB::table('sub_menu_lis')
            ->select('*')
            ->get();

            foreach($sub_menu as $sub_menus){

                $sub_data[$sub_menus->sub_menu_type][] = $sub_menus->sub_menu_name;

            }

            foreach($main_menu as $menus){

                $data[$menus->menu_type][$menus->menu_id] = $menus->menu_name;

            }
            // dd($data);

            return view('student.isac.listening.home', compact('data'));
        }else {
            return redirect('user_login');
        }
    }
}
