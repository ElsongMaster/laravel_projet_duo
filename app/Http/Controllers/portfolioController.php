<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\Projet;
class portfolioController extends Controller
{
    public function index() {
        $table = new Projet;
        $datas = $table->get()->take(15);
    return view('pages.portfolio',compact('datas'));
}


=======

use App\Models\Projet;

class portfolioController extends Controller
{
    public function index() {
        $table =  new Projet;
        $datas = $table->get()->take(15);
    return view('pages.portfolio',compact('datas'));
>>>>>>> f9d939f8cddde4d56a5ee7f31c02f3e1ab0caad8

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