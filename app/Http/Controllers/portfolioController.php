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
}
=======

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
>>>>>>> f3e2a4c5f55c3d0d0c53159a36a609af94681d2d
