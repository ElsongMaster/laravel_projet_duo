<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class backHomeController extends Controller
{
    public function index(){
        return view('backoffice.homeBackOffice');
    }
}
