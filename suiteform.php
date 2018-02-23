<meta charset="utf-8">
<?php require_once("connexion.php");?>
<?php session_start();?>

<?php
$nom=$_POST["nom"]; $prenom=$_POST["prenom"];
$sexe=$_POST["sexe"];
$anniversaire=$_POST["anniversaire"]; $adresse=$_POST["adresse"]; $ville=$_POST["ville"]; $CP=$_POST["CP"];
$email=$_POST["email"];$mdp=$_POST["mdp"];

$req="insert into user (nom, prenom, sexe, anniversaire, adresse, ville, CP, email, mdp)
values ('$nom','$prenom','$sexe','$anniversaire','$adresse','$ville','$CP','$email','$mdp')"; 
mysqli_query($conn, $req) or die(mysql_error());
?>
<!doctype html>
<html>
<head>
<title></title>
</head>
<body>
</body>
</html>
