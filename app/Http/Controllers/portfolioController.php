<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;
class portfolioController extends Controller
{
    public function index() {
        $datas = Projet::all();
    return view('pages.portfolio',compact('datas'));
}
}
