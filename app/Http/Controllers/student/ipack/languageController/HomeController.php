<?php

namespace App\Http\Controllers\student\ipack\languageController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;

class HomeController extends Controller
{

    public function index()
    {
        if(Auth::guard('web')->check()) {
            
            $main_menu = DB::table('menu_language')
            ->select('menu_language.*')
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

            return view('student.language.home', compact('menu'));
        }else {
            return redirect('login');
        }
    }
}
