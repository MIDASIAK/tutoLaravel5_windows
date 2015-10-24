<?php

namespace App\Http\Controllers;

use App\Http\Requests\UtilisateurRequest;
use App\Repositories\UtilisateurRepositoryInterface;

class UtilisateursController extends Controller
{

    public function getForm()
    {
        return view('utilisateurs');
    }

    public function postForm(
        UtilisateurRequest $request,
        UtilisateurRepositoryInterface $utilisateurRepository)
    {
        $utilisateurRepository->save($request->input('usr_nom'), $request->input('usr_prenom'));

        return view('utilisateurs_ok');
    }
}