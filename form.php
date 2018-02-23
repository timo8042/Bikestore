<?php require_once("connexion.php");?>
<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Inscription</title>
	<link href="formestyle.css" type="text/css" rel="stylesheet"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<h1>Inscription</h1>
<div class="form">
	<form name="saisie" action="suiteform.php" method="post">
		<h2>Informations personnelles</h2>
		<div>
			<input class="namespace" placeholder="  Nom" name="nom" type="text" size="30" maxlength="25"/>				<!--size = afficher, maxlength = defilement -->
			<input class="namespace" placeholder="  Prénom" name ="prenom" type="text" size="30" maxlength="25"/><br/><br/>
		</div>
		Sexe <input type="radio" name="sexe" value="H"/>Homme
			 <input type="radio" name="sexe" value="F"/>Femme<br/>
		Date de naissance<input class="datepicker" type="date" name="anniversaire"/><br/>
		<h2>Coordonées</h2>
		<input class="input" placeholder="  Numéro et rue" name="adresse" type="text" size="30"/><br/>
		<input class="input" placeholder="  Ville" name="ville" type="text"/><br/>
		<input class="input" placeholder="  Code postale" name="CP" type="text"/><br/>
		<h2>Création du compte</h2>
		<input class="input" placeholder="  Adresse Mail" type="email" name="email" size="30"/><br/>
		<input class="input" placeholder="  Mot de passe - 6 caractères minimum" name="mdp" type="password" size="30" /><br/>
		<br/>
		<div class="spacebutton">
			<input class="btn btn-outline-success" type="submit" name="valider" value="Valider"/>
			<input class="btn btn-secondary" type="reset" name="reset" value="Effacer"/>
		</div>								
	</form></div>
</body>
</html>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>