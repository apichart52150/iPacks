<?php
namespace App\Http\Controllers\Admin\mocktest;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

use App\Model\Student;
use App\Model\Classroom;

class AllScoreController extends Controller
{

    public static function index()
    {
     return view('admin.mocktest.dashboard');
    }


    public static function all_score($score=''){

        $number = $score;

        switch($number) {
            case 0:
            return '0'; 
            break;
            case null:
            return '0'; 
            break;
            case in_array($number, range(39, 40)):
            return '9'; 
            break;
            case in_array($number, range(37, 38)):
            return '8.5'; 
            break;
            case in_array($number, range(35, 36)):
            return '8'; 
            break;
            case in_array($number, range(33, 34)):
            return '7.5'; 
            break;
            case in_array($number, range(30, 32)):
            return '7'; 
            break;
            case in_array($number, range(28, 29)):
            return '6.5'; 
            break;
            case in_array($number, range(26, 27)):
            return '6'; 
            break;
            case in_array($number, range(24, 25)):
            return '5.5'; 
            break;
            case in_array($number, range(22, 23)):
            return '5'; 
            break;
            case in_array($number, range(19, 21)):
            return '4.5'; 
            break;
            case in_array($number, range(17, 18)):
            return '4'; 
            break;
            case in_array($number, range(15, 16)):
            return '3.5'; 
            break;
            case in_array($number, range(13, 14)):
            return '3'; 
            break;
            case in_array($number, range(10, 12)):
            return '2.5'; 
            break;
            case in_array($number, range(8, 9)):
            return '2';
            break;
            case in_array($number, range(6, 7)):
            return '1.5'; 
            break;
            case in_array($number, range(4, 5)):
            return '1'; 
            break;

            default:
            return '0.5';
            break;
        }

    }

    public static function resultOverAllWri($score_wri_1='',$score_wri_2='',$score_wri_3=''){

        $wri1_3 =  $score_wri_1 + $score_wri_3;
        $wri2 = $score_wri_2;


        $result_writing = ($wri1_3 + ($wri2 * 2)) / 3;
            

    return $result_writing; 
    }


    public static function reSultOverAllband($score_lis='',$score_read='',$overall_wri='',$score_speak=''){

        $lis_score = $score_lis;
        $read_score = $score_read;
        $all_writing = $overall_wri;
        $speak_score = $score_speak;

        $result_over_all = ($lis_score + $read_score + $all_writing + $speak_score) / 4;

        return $result_over_all;
    }

    public static function floatingResultScore($over_score=''){

        $result_score = $over_score;

        $floor_overall = floor($result_score);

        $decimal_overall = $result_score - $floor_overall;

        if($decimal_overall < 0.25){
            $result = $floor_overall;
        }elseif($decimal_overall >= 0.25 && $decimal_overall < 0.75){
            $result = $floor_overall+0.5;
        }elseif($decimal_overall >= 0.75){
            $result = $floor_overall+1;
        }else{
            $result = 'error';
        }

        return $result;
    }

    // @desc new calcucate band listening & reading
    public static function IELTSband($rawScore = '') {

        $score = $rawScore;

        switch ($score) {
            case 0:
                return '0';
                break;
            case null:
                return '0';
                break;
            case in_array($score, range(1, 3)):
                return '1';
                break;
            case in_array($score, range(4, 6)):
                return '1.5';
                break;
            case in_array($score, range(7, 8)):
                return '2';
                break;
            case in_array($score, range(9, 11)):
                return '2.5';
                break;
            case in_array($score, range(12, 13)):
                return '3';
                break;
            case in_array($score, range(14, 15)):
                return '3.5';
                break;
            case in_array($score, range(16, 17)):
                return '4';
                break;
            case in_array($score, range(18, 19)):
                return '4.5';
                break;
            case in_array($score, range(20, 21)):
                return '5';
                break;
            case in_array($score, range(22, 23)):
                return '5.5';
                break;
            case in_array($score, range(24, 26)):
                return '6';
                break;
            case in_array($score, range(27, 29)):
                return '6.5';
                break;
            case in_array($score, range(30, 31)):
                return '7';
                break;
            case in_array($score, range(32, 34)):
                return '7.5';
                break;
            case in_array($score, range(35, 36)):
                return '8';
                break;
            case in_array($score, range(37, 38)):
                return '8.5';
                break;
            case in_array($score, range(39, 40)):
                return '9';
                break;
            default:
                return 'Score Not found';
                break;
        }
    }



}
