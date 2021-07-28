<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class backBlogController extends Controller
{
    public function index(){
        return view('backoffice.blogBackOffice');
    }
}
