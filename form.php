<?php require_once("connexion.php");?>
<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Inscription</title>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"
</head>

<?php include('menu.php'); ?>
<body style="margin-top : 6%;">
<div class="container"></br>
	<h1>Inscription</h1></br>
	<form name="saisie" action="suiteform.php" method="post">
		<div class="form-row">
			<div class="col">
				<label for="prenom">Prénom</label>
				<input type="text" class="form-control"id="prenom" name="prenom" placeholder="Prénom">
			</div>
			<div class="col">
				<label for="nom">Nom</label>
				<input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
			</div>
		</div></br>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label >Sexe</label></br>
				<input type="radio" name="sexe" value="H"/>Homme
				<input type="radio" name="sexe" value="F"/>Femme<br/>
			</div>
			<div class="form-group col-md-6">
				<label >Date de naissance</label>
				<input type="date" name="anniversaire" max="3000-12-31" 
					min="1000-01-01" class="form-control">
			</div>
		</div></br>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Email">
			</div>
			<div class="form-group col-md-6">
				<label for="password">Mot de passe</label>
				<input type="password" class="form-control" id="password" name="mdp" placeholder="Mot de passe">
			</div>
		</div></br>
		<div class="form-group">
			<label for="inputAddress">Addresse</label>
			<input type="text" class="form-control" id="adresse" name="adresse" placeholder="23 rue Beau-Soleil">
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
			<label for="ville">Ville</label>
			<input type="text" class="form-control" id="ville" name="ville" placeholder="Amiens">
			</div>
			<div class="form-group col-md-2">
				<label for="CP">Code Postale</label>
				<input type="text" class="form-control" id="CP" name="CP" placeholder="80000">
			</div>
		</div>
		<button type="submit" class="btn btn-primary" name="valider" value="Valider">S'inscrire</button>
		<input type="reset" class="btn btn-secondary" name="reset" value="Effacer"/>
	</form>
</div>



</body>
</html>

