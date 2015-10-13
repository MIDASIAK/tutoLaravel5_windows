<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>Prise de contact sur mon beau site</h2>
    <p>Réception d'une prise de contact avec les éléments suivants :</p>
    <ul>
	<li><strong>Civilité</strong> : {{ $civ }}</li>
      <li><strong>Nom</strong> : {{ $nom }}</li>
	@if(!(empty($prenom)))
		<li><strong>Prénom</strong> : {{$prenom}}</li>
    	@endif
	<!-- identique au bloc en commentaire suivant -->
	<!--<?php if (!(empty($prenom))) echo"<li><strong>Prénom</strong> : $prenom </li>";
	?>-->
      <li><strong>Email</strong> : {{ $email }}</li>
      <li><strong>Message</strong> : {{ $texte }}</li>
    </ul>
  </body>
</html>