<?php 

namespace App\Gestion;

class WordGestion implements WordGestionInterface
{

    public function save($word)
    {
        if($word->isValid())
        {
            $chemin = config('word.path');
            $extension = $word->getClientOriginalExtension();

            do {
                $nom = str_random(10) . '.' . $extension;
            } while(file_exists($chemin . '/' . $nom));

            return $word->move($chemin, $nom);
        }

        return false;
    }

}