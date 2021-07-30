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

    public function edit(Projet $id) {
        $projet = $id;
    return view('backoffice.layouts.editProjet',compact('projet'));
}
    public function update(Projet $id, Request $request) {
        $projet = $id;
        $projet->titre = $request->titre;
        $projet->image = $request->image;
        $projet->description = $request->description;
        $projet->save();
        return redirect(route('showProjet'));

    }
    public function destroy($id) {
        $datas = Projet::find($id);
        $datas->delete();
        return redirect('/backoffice/backPortfolio');
    }
    public function show(Projet $id){
        $projet = $id;
        return view('backoffice.layouts.showProjet', compact('projet'));     
    }

}
