<?php 

namespace App\Http\Controllers;

class monDeuxiemeControleur extends Controller
{
    public function show($n)
    {
        return view('facture')->with('numero', $n);
    }
}