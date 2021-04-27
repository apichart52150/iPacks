<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon; 



class Club_Room extends Model {
    
    protected $table    = 'club_room';
    
    protected $fillable = [
        'subtitle_id',
        'type',
        'topicClub',
        'teacher',
        'amount',
        'start_date',
        'end_date',
        'start_post_date',
        'end_post_date',
        'status'
    ];

    public static function endclass($input)
    {
        if($input != '') {
			DB::table('club_room')
			->where('id',$input)
			->update(['status' => '2']);
			return 'endclass_success';
             
        }else{
            return 'endclass_fail';die;
        }
    }

}