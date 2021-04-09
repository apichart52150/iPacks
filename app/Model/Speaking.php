<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Speaking extends Model {

    public static function querySpeaking($std_id) {

        $speaking = DB::table('speaking')
        ->select('speaking.*','users.name as th_name')
        ->where('std_id','=', $std_id)
        ->leftjoin('users','users.id','=','speaking.th_id')
        ->orderBy('created_at', 'desc')
        ->get();

        return ($speaking);

    } 

   // show one topic 
   public static function status_speaking_topic($id) {

   	$topic = DB::table('speaking')
   	->select('speaking.*','users.name as th_name')
    ->leftjoin('users','users.id','=','speaking.th_id')
   	->where('speaking.id',$id)
   	->get();

   	return ($topic);

   }

   // check speaking point form other db newcambr_isac
   public static function checkPoint() {

      $point = DB::connection('mysql')->select('select std_pointspeaking as point from student where std_id = ?',[Session('std_id')]);
 
      return ($point); 

   }

   public static function checkPointWriting() {

      $pointW = DB::connection('mysql')->select('select std_pointsac as point from student where std_id = ?',[Session('std_id')]);
 
      return ($pointW); 

   }

   public static function getCourse() {
      $courses = DB::table('course')
                ->select('*')
                ->get();
      return $courses;
   }

}