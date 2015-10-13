<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h2>Prise de contact sur mon beau site</h2>
    <p>R�ception d'une prise de contact avec les �l�ments suivants :</p>
    <ul>
	<li><strong>Civilit�</strong> : {{ $civ }}</li>
      <li><strong>Nom</strong> : {{ $nom }}</li>
	@if(!(empty($prenom)))
		<li><strong>Pr�nom</strong> : {{$prenom}}</li>
    	@endif
	<!-- identique au bloc en commentaire suivant -->
	<!--<?php if (!(empty($prenom))) echo"<li><strong>Pr�nom</strong> : $prenom </li>";
	?>-->
      <li><strong>Email</strong> : {{ $email }}</li>
      <li><strong>Message</strong> : {{ $texte }}</li>
    </ul>
  </body>
</html>