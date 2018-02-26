<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Bikestore</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php"><img src="ressource/logo.png"/>  Bikestore</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto" style="margin-left: 6%;">
      <form class="form-inline form">
        <input class="form-control mr-sm-2" type="search" placeholder="Tapez votre recherche..." aria-label="Search" style="width: 400px;">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Chercher</button>
      </form>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item">
        <button type="button" class="btn btn-outline-success nav-link transparentbutton" data-toggle="modal" data-target="#login"><img src="ressource/login.png"/>  Connexion</a>
      </li>
      <li class="nav-item">
        <button type="button" class="btn btn-outline-success nav-link transparentbutton" data-toggle="modal" data-target="#panier"><img src="ressource/cart.png"/>  Panier</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid">
  <div class="row justify-content-md-center">
    <div class="col-md-3" style="border-right-style: solid;">

    </div>
    <div class="col col-lg">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            test
            </ul>
          </div>
        </nav>
      </div></br>
      <div class="container-fluid">
        test
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="panier" tabindex="-1" role="dialog" aria-labelledby="panier" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="panier">Panier</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="login">Connexion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Identifiant</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre identifiant">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
            </div>
            <button type="submit" class="btn btn-success">Connecter</button>
            </form>
            <a href="form.php" class="form-text text-muted">Pas encore d'identifiant ? Cliquez ici pour vous inscrire.</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>