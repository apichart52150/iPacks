<?php

namespace App\Http\Controllers\student\isac\languageController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;

class HomeController extends Controller
{

    public function index()
    {
        if(Auth::guard('student')->check()) {
            
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
            return redirect('user_login');
        }
    }


    public function audio($id){

        $audio_file = DB::table('sub_menu_lis')
        ->select('name_audio')
        ->where('sub_menu_type','=', $id)
        ->get();

        $file_name = $id.'/'.$audio_file[0]->name_audio;

        return view('student.isac.listening.audio' ,compact('file_name',''));
    }
}
