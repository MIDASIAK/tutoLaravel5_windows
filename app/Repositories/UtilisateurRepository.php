<?php

namespace App\Repositories;

use App\Utilisateur;

class UtilisateurRepository implements UtilisateurRepositoryInterface
{

    protected $utilisateur;

	public function __construct(Utilisateur $unUtilisateur)
	{
		$this->utilisateur = $unUtilisateur;
	}

	public function save($nom, $prenom)
	{
		$utilisateur = new $this->utilisateur;
		$utilisateur->usr_nom = $nom;
		$utilisateur->usr_prenom = $prenom;
		$utilisateur->save();
	}

}