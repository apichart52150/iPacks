<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Model\Login;


class HomeController extends Controller
{
    public function __construct() {
        $this->middleware('auth:student');
    }

    public function index(){
        return view('student.user_home');
    }

}