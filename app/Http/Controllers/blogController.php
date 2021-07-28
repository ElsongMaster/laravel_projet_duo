<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

use App\Models\Article;

class blogController extends Controller
{
    public function index() {
<<<<<<< HEAD
        $table = new Article;
        $datas = $table->get()->take(4);
=======
        $datas = Article::all();
>>>>>>> f9d939f8cddde4d56a5ee7f31c02f3e1ab0caad8
    return view('pages.blog',compact('datas'));
}
}
