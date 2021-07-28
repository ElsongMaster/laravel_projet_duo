<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Projet;

class portfolioController extends Controller
{
    public function index() {
        $table =  new Projet;
        $datas = $table->get()->take(15);
    return view('pages.portfolio',compact('datas'));

}
    public function create() {
        return view('backoffice.portfolio');
    }

    public function store(Request $request){
        $newEntry = Projet::all();
        $newEntry->titre->$request->titre;
        $newEntry->description->$request->description;
        $newEntry->save();
        return redirect()->back();
    }
}