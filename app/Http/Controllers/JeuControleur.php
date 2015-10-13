<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JeuControleur extends Controller
{
    public function getNomjeu()
    {
        return view('nomjeu');
    }

    public function postNomjeu(Request $request)
    {
        return 'Le jeu saisi est : ' . $request->input('jeu'); 
    }
}