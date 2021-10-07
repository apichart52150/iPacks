<?php

namespace App\Http\Controllers\Admin\payment;

use App\Http\Controllers\Controller;
use App\Model\KTC;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $pag = 3;
        $ktc = KTC::data_list($pag);
        return view('admin.payment.index', compact('ktc','pag'));
    }

    public function edit_data(Request $request)
    {}

    public function delete($id)
    {}
}
