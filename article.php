<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Bikestore</title>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css"
</head>

<body style="margin-top : 6%;">
<?php include('menu.php'); ?>
  <div class="row">
    <div class="col-sm-2">
        <?php include('menu-vert.php'); ?>
    </div>
    <div class="col-sm-10">
        <?php include('menu2.php'); ?>
        <div class="container" style="margin-top:2%;">
            <div class="row">
                <div class="col-sm-2" style="padding-left:0%;">
                    <h4 style="text-align:left;"><?php $article= $_GET['article']; echo $article; ?></h4>  
                </div>
                <div class="col-sm-10">
                    <p class="lead"><?php include 'req_article.php'; ?> </p>
                </div>
            </div>
        </div>
    </div>
  </div>

</body>