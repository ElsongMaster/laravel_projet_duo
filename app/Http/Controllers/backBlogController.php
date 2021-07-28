<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

class backBlogController extends Controller
{
    public function index(){
        $datas = Article::all();
        return view('backoffice.blogBackOffice',compact('datas'));
    }

    public function create(){
        return view('backoffice.createArticle');
    }

    public function store (Request $request){
        $newEntry = new Article;
        $newEntry->titre = $request->titre;
        $newEntry->image = $request->image;
        $newEntry->description = $request->desription;
        $newEntry->save();
        return redirect()->back();
    }

    public function destroy(Article $id){
        $id->delete();
        return redirect()->back();
    }
}
