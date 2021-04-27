<?php
namespace App\Http\Controllers\Admin\mocktest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\Classroom;
use App\Carbon;

class DashboardController extends Controller
{
 
    public static function index()
    {
    	$data = Classroom::get_detail_classroom();
    	return view('admin.mocktest.dashboard',compact('data'));
    } 

}
