<?php 

namespace App\Http\Controllers;

use App\Http\Requests\WordRequest;
use App\Gestion\WordGestionInterface;

class WordController extends Controller 
{

    public function getForm()
    {
        return view('word');
    }

    public function postForm(WordRequest $request, WordGestionInterface $wordgestion)
    {
        if($wordgestion->save($request->file('document'))) {
            return view('word_ok');
        }
        return redirect('word/form')
            ->with('error','Désolé mais votre document Word ne peut pas être envoyé !');
    }

}