<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrialController extends Controller
{
    public function index(){
        return view('trial.home');
    }

    public function listening(){
        return view('trial.listening');
    }
    public function reading(){
        return view('trial.reading');
    }
    public function language(){
        return view('trial.language');
    }
}
