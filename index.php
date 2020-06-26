<!DOCTYPE html>

<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title> ÉVALUATION PHP CHLOÉ</title> <! -- titre de mon fichier -->
	</head>

	<body>
		<form name="formulaire" action="/ma-page-de-traitement" method="post"> <! -- formulaire -->
    	<div>
        	<label for="name">Nom et prénom :</label> <! -- Nom du champ -->
        	<input type="text"  id="clname" name="clname">
    	</div>

    	<div>
       	 <label for="city">Ville :</label> <! -- Nom du champ -->
        	<input type="city"  id="clcity" name="clcity">
   	 	</div>

		<div>
       	 <label for="phone">Téléphone :</label> <! -- Nom du champ -->
        	<input type="phone" id="clphone" name="clphone">
   	 	</div>

    	<div>
       	 <label for="mail">Adresse e-mail :</label> <! -- Nom du champ -->
        	<input type="email"  id="clmail" name="clmail">
   	 	</div>
   	 
		</form>


<?php
// Champs du formulaire
echo $_GET['clname'];
echo $_GET['clcity'];
echo $_GET['clphone'];
echo $_GET['clmail'];

?>

	</body>
  <! -- Urls consultées : 
  https://developer.mozilla.org/fr/docs/Web/Guide/HTML/Formulaires/Mon_premier_formulaire_HTML?fbclid=IwAR3ENj_flXT4ymHMcOAtzf4_Loh71uMsAtQfNFqaum7zaYhnO9xmWyAJYB0  
  https://developer.mozilla.org/fr/docs/Web/HTML/Element/Input?fbclid=IwAR2V-b1D5ceD7Qb9TRD_8RFTqlgCB6Gs-hG2KxpJ1d6sqkHqgBw_-K_DakU
  http://www.conseil-webmaster.com/formation/php/09-variables-get-php.php -->

</html>

