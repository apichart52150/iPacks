<?php

namespace App\Http\Controllers\student\isac\languageController;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;

class TopicController extends Controller
{
    public function index($topic) {

        if($topic == 'Intermediate'){
            $id = '1';
        }else   if($topic == 'Advanced'){
            $id = '2';
        }else   if($topic == 'Report'){
            $id = '3';
        }else{
            $id = '4';
        }

        $menu = DB::table('menu_language')
        ->where('menu_type','=', $id)
        ->select('menu_name', 'menu_id', 'pdf_file', 'menu_type')
        ->get();

        $topicInfo = [
            'Intermediate' => ['title' => 'Grammar and Vocabulary - Intermediate', 'topicName' => $topic,'topicColor' => 'success', 'submenu' => $menu],
            'Advanced' => ['title' => 'Grammar and Vocabulary - Advanced', 'topicName' => $topic,'topicColor' => 'danger', 'submenu' => $menu],
            'Report' => ['title' => 'IELTS Task 1 - Report', 'topicName' => $topic,'topicColor' => 'info', 'submenu' => $menu],
            'Essays' => ['title' => 'IELTS Task 2 - Essays', 'topicName' => $topic,'topicColor' => 'primary', 'submenu' => $menu]
        ];

        // dd($topicInfo);


        return view('student.language.topic', ['topic' => $topicInfo[$topic]], compact('topicInfo'));
    }

}
