<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

class blogController extends Controller
{
    public function index() {
        $datas = Article::all();
    return view('pages.blog',compact('datas'));
}
}
