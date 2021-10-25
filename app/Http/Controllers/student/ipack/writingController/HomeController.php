<?php

namespace App\Http\Controllers\student\ipack\writingController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Writing;
use DB;
use App\Model\Points;
use File;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class HomeController extends Controller
{
    public function index() {

        $images = collect(File::files('public/assets/images/ks-ix'))
        ->map(function ($image, $key) {
            if(strlen($image) == 35) {
                $img = substr($image, strlen($image) - 8);
            } else {
                $img = substr($image, strlen($image) - 7);
            }
            return $img;
        })->groupBy(function ($value, $key) {
            return $value[0];
        });

        $task1 = [];
        $task2 = [];
        
        $tabT1 = $images[1]->chunk(20);
        $tabT2 = $images[2]->chunk(20);

        $startT1 = $startT2 = 1;
        $lengthInTab1 = $lengthInTab2 = 20;

        for($i = 1; $i <= count($tabT1); $i++) {
            
            if($i == count($tabT1)) {
                $lengthInTab1 = ($lengthInTab1 - 20) + (count($tabT1[$i-1]));
            } 

            $task1['tab'][$i] = $startT1.'-'.$lengthInTab1;
            $startT1 = $lengthInTab1 + 1;
            $lengthInTab1+=20;

            for($j = 1; $j <= count($images[1]); $j++) {

                $number = '1-'. ($j >= 10 ? $j : '0'.$j);
                
                if(in_array($j, [1, 11, 16, 17, 21, 33, 37, 58, 64, 66, 70, 71, 83, 90])) {
    
                    $task1['task1'][$j] = ['number' => $number, 'type' => 'Pie Chart', 'icon' => '<i class="mdi mdi-chart-arc"></i>'];
    
                } else if(in_array($j, [2, 4, 18, 19, 42, 43, 49, 53, 59, 65, 72, 88])) {
    
                    $task1['task1'][$j] = ['number' => $number, 'type' => 'Line Graph', 'icon' => '<i class="mdi mdi-chart-line"></i>'];
    
                } else if(in_array($j, [3, 6, 8, 10, 12, 13, 14, 24, 31, 44, 46, 48, 56, 60, 63, 68, 74, 76, 79, 80, 87])) {
    
                    $task1['task1'][$j] = ['number' => $number, 'type' => 'Bar Chart', 'icon' => '<i class="mdi mdi-chart-bar-stacked"></i>'];
    
                } else if(in_array($j, [5, 20, 23, 32, 35, 40, 50, 51, 67])) {
    
                    $task1['task1'][$j] = ['number' => $number, 'type' => 'Table', 'icon' => '<i class="mdi mdi-table"></i>'];
    
                } else if(in_array($j, [7, 9, 38, 41, 47, 54, 57, 61, 73, 84])) {
    
                    $task1['task1'][$j] = ['number' => $number, 'type' => 'Mixed', 'icon' => '<i class="mdi mdi-view-module"></i>'];
    
                } else if(in_array($j, [25, 26, 27, 45, 52, 62, 75, 78, 81, 86])) {
    
                    $task1['task1'][$j] = ['number' => $number, 'type' => 'Map', 'icon' => '<i class="mdi mdi-google-maps"></i>'];
    
                } else if(in_array($j, [15, 30, 39, 55, 77, 82, 85, 89])) {
    
                    $task1['task1'][$j] = ['number' => $number, 'type' => 'Process', 'icon' => '<i class="mdi mdi-comment-question-outline"></i>'];
    
                } else if(in_array($j, [22, 28, 29, 69])) {
    
                    $task1['task1'][$j] = ['number' => $number, 'type' => 'Cycle', 'icon' => '<i class=" mdi mdi-recycle"></i>'];
    
                } else if(in_array($j, [34, 36])) {
    
                    $task1['task1'][$j] = ['number' => $number, 'type' => 'Picture', 'icon' => '<i class="mdi mdi-image"></i>'];
    
                } else {
                    $task1['task1'][$j] = '';
                }

            }
        }

        for($i = 1; $i <= count($tabT2); $i++) {

            if($i == count($tabT2)) {
                $lengthInTab2 = ($lengthInTab2 - 20) + (count($tabT2[$i-1]));
            } 


            $task2['tab'][$i] = $startT2.'-'.$lengthInTab2;
            $startT2 = $lengthInTab2 + 1;
            $lengthInTab2+=20;

            for($j = 1; $j <= count($images[2]); $j++) {

                $number = '2-'. ($j >= 10 ? $j : '0'.$j);

                if(in_array($j, [1, 7, 24, 45])) {

                    $task2['task2'][$j] = ['number' => $number, 'type' => 'Listing', 'icon' => '<i class="mdi mdi-format-list-bulleted"></i>'];

                } else if(in_array($j, [2, 3, 4, 5, 6, 8, 9, 11, 14, 17, 20, 21, 23, 26, 27, 28, 29, 30, 32, 35, 38, 39, 41, 43, 49, 50, 59, 61, 68, 69, 76, 77, 80, 83, 86])) {
    
                    $task2['task2'][$j] = ['number' => $number, 'type' => 'Agree/Disagree', 'icon' => '<i class="mdi mdi-check-circle-outline"></i>'];
    
                } else if(in_array($j, [6, 34, 51, 79])) {
    
                    $task2['task2'][$j] = ['number' => $number, 'type' => 'Causes/Solutions', 'icon' => '<i class="mdi mdi-book-multiple-variant"></i>'];
    
                } else if(in_array($j, [10, 13, 15, 16, 19, 31, 33, 37, 42, 44, 52, 53, 55, 56, 57, 60, 63, 65, 66, 70, 71, 72, 74, 75, 78, 81, 82, 84, 85, 87])) {
    
                    $task2['task2'][$j] = ['number' => $number, 'type' => 'Two-Part', 'icon' => '<i class="mdi mdi-gesture-two-double-tap"></i>'];
    
                } else if(in_array($j, [12, 18, 22, 25, 36, 40, 46, 47, 48, 54, 58, 62, 64, 67, 73, 88])) {
    
                    $task2['task2'][$j] = ['number' => $number, 'type' => 'Advantages/Disadvantages', 'icon' => '<i class="m mdi mdi-settings"></i>'];
    
                } else {

                    $task2['task2'] = '';

                }
        
            }
            
        }

        $pointWriting = Points::getPoint(Auth::user()->id);

        $check_data = DB::table('text_result')->where('std_id','=',Auth::user()->id)->count();
        $check_data2 = $check_data%2;

        $Task = '';
        if ($check_data2 == 0){
            $Task = 1;
        }else{
            $Task = 2;
        }
        // dd($Task);
        // dd($check_data2,$Task);

        return view('student.ipack.writing.home', compact('task1', 'task2', 'pointWriting','Task'));

    }

    public function status_writing() {

        $id = auth('web')->user()->id;

        $writing = Writing::queryWriting($id);

        // dd($writing);
        return view('student.ipack.writing.status_writing',  compact('writing'));
        
    }
}
    

