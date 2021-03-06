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
        $newEntry->description = $request->description;
        $newEntry->save();
        return redirect()->back();
    }
    public function edit(Article $id) {
        $article = $id;
    return view('backoffice.layouts.editArticle',compact('article'));
}
    public function update(Article $id, Request $request) {
        $article = $id;
        $article->titre = $request->titre;
        $article->image = $request->image;
        $article->description = $request->description;
        $article->save();
        return redirect(route('showArticle',$article->id));

    }
    public function show(Article $id){
        $article = $id;
        return view('backoffice.layouts.showArticle', compact('article'));     
    }

    public function destroy(Article $id){
        $id->delete();
        return redirect(route('backBlog'));
    }
}
