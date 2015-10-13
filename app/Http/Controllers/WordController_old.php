<?php 

namespace App\Http\Controllers;

use App\Http\Requests\WordRequest;

class WordController extends Controller 
{

    public function getForm()
    {
        return view('word');
    }

    public function postForm(WordRequest $request)
    {
        $word = $request->file('document');

        if($word->isValid())
        {
            $chemin = config('word.path');

            $extension = $word->getClientOriginalExtension();

            do {
                $nom = str_random(10) . '.' . $extension;
            } while(file_exists($chemin . '/' . $nom));

            if($word->move($chemin, $nom)) {
                return view('word_ok');
            }
        }

        return redirect('word/form')
            ->with('error','Désolé mais votre document Word ne peut pas être envoyé !');
    }

}