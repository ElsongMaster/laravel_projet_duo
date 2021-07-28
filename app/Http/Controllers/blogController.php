<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;



class blogController extends Controller
{
    public function index() {
        $table = new Article;
        $datas = $table->get()->take(4);
    return view('pages.blog',compact('datas'));
}
}
