<?php

namespace App\Http\Controllers\student\isac\languageController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;

class ActivityController extends Controller
{
    public function index($sub_topic)
    {
        $sub_menu = DB::table('sub_menu_language')
        ->where('sub_menu_id','=', $sub_topic)
        ->select('sub_menu_name')
        ->get();

        $menu = DB::table('menu_language')
        ->where('menu_id','=', $sub_topic)
        ->select('menu_name')
        ->get();


        if($sub_topic == 1 || $sub_topic == 2 || $sub_topic == 3){
            $activities = [
                'topicNo' => $menu[0]->menu_name,
                'topicName' => 'Intermediate',
                'category' => 'Grammar and Vocabulary',
                'activities' => $sub_menu,
                'color' => 'success', 
                'icon' => '<i class="fas fa-check font-20"></i>', 
            ];
        }else  if($sub_topic == 4 || $sub_topic == 5 || $sub_topic == 6){
            $activities = [
                'topicNo' => $menu[0]->menu_name,
                'topicName' => 'Advanced',
                'category' => 'Grammar and Vocabulary',
                'activities' => $sub_menu,
                'color' => 'danger', 
                'icon' => '<i class="fas fa-check-double font-20"></i>', 
            ];
        }else if($sub_topic == 7 || $sub_topic == 8){
            $activities = [
                'topicNo' => $menu[0]->menu_name,
                'topicName' => 'Report',
                'category' => 'IELTS Task 1',
                'activities' => $sub_menu,
                'color' => 'info', 
                'icon' => '<i class="fas fa-paragraph font-20"></i>', 
            ];
        }else{
            $activities = [
                'topicNo' => $menu[0]->menu_name,
                'topicName' => 'Essays',
                'category' => 'IELTS Task 2',
                'activities' => $sub_menu,
                'color' => 'primary', 
                'icon' => '<i class="fas fa-quote-left font-20"></i>', 
            ];
        }

        return view('student.language.activities', compact('activities'));
    }

}
