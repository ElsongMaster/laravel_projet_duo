<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;
class backPortfolioController extends Controller
{
    public function index() {
        $table = new Projet;
        $datas = $table->get()->take(15);
    return view('backoffice.backPortfolio',compact('datas'));

}
    public function create() {
        return view('backoffice.createProjet');
    }

    public function store(Request $request){
        $newEntry = new Projet ;
        $newEntry->titre = $request->titre;
        $newEntry->description = $request->description;
        $newEntry->image = $request->image;
        $newEntry->save();
        return redirect()->back();
    }
    public function destroy($id) {
        $datas = Projet::find($id);
        $datas->delete();
        return redirect()->back();
    }

}
