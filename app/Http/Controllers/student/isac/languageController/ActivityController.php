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
        ->where('sub_menu_type','=', $sub_topic)
        ->select('sub_menu_name', 'sub_menu_id')
        ->get();

        $menu = DB::table('menu_language')
        ->where('menu_id','=', $sub_topic)
        ->select('menu_name')
        ->get();

        if($sub_topic == 1 || $sub_topic == 2 || $sub_topic == 3){
            $topicNo = 1;
            $category = 'Grammar and Vocabulary';
            $topicName ='Intermediate';
            $color = 'success';
            $icon = '<i class="fas fa-check font-20"></i>';

        }else  if($sub_topic == 4 || $sub_topic == 5 || $sub_topic == 6){
            $topicNo = 2;
            $category = 'Grammar and Vocabulary';
            $topicName ='Advanced';
            $color = 'danger';
            $icon = '<i class="fas fa-check-double font-20"></i>';

        }else if($sub_topic == 7 || $sub_topic == 8){
            $topicNo = 3;
            $category = 'IELTS Task 1';
            $topicName ='Report';
            $color = 'info';
            $icon = '<i class="fas fa-paragraph font-20"></i>';

        }else{
            $topicNo = 4;
            $category = 'IELTS Task 2';
            $topicName ='Essays';
            $color = 'primary';
            $icon ='<i class="fas fa-quote-left font-20"></i>';

        }

        $s_menu = DB::table('menu_language')
        ->where('menu_type','=', $topicNo)
        ->select('menu_name' , 'menu_id')
        ->get();

        $activities = [
            'topicLink' => $sub_topic,
            'topicNo' => $s_menu,
            'topicName' => $topicName,
            'category' => $category,
            'activities' => $sub_menu,
            'color' => $color, 
            'icon' => $icon, 
        ];

        // dd($activities);

        return view('student.language.activities', compact('activities'));
    }

    public function exam($sub_menu_id) {

        $sub_menu = DB::table('sub_menu_language')
        ->where('sub_menu_id','=', $sub_menu_id)
        ->select('sub_menu_name','sub_menu_type')
        ->get();

        $main_menu = DB::table('menu_language')
        ->where('menu_id','=', $sub_menu[0]->sub_menu_type)
        ->select('menu_id','menu_name')
        ->get();

        $path = $sub_menu[0]->sub_menu_type;

        $view = "student.language.exam.$path.$sub_menu_id";

        $pageTitle = [
            'category' => $main_menu[0]->menu_name,
            'topic' => $sub_menu[0]->sub_menu_name,
        ];

    
        return view('student.language.exam', ['view' => $view, 'pageTitle' => $pageTitle]);
    }

}
