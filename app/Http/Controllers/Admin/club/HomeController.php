<?php

namespace App\Http\Controllers\Admin\club;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class HomeController extends Controller
{
    public function index(){
        $clubs = DB::select('SELECT clubs.created_at,clubs.id,clubs.club_date,users.first_name,users.last_name FROM clubs INNER JOIN users ON clubs.user_create = users.id ORDER BY clubs.created_at DESC');
        return view('admin.clubs', compact('clubs'));
    }

    public function confirm(Request $request){
        return "success";
    }
}
