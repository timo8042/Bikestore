<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
<?php
$conn = new mysqli("localhost", "root", "", "bikestore");
if ($conn->connect_errno) 
    {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

$req=("SELECT nomfamille FROM famille");

$res = mysqli_query($conn, $req);

    while ($count = mysqli_fetch_array($res)) 
        {  
            $famille = $count['nomfamille'];
            $req2=("SELECT sousfamille.nomsousfamille FROM sousfamille INNER JOIN famille ON famille.codefamille = sousfamille.codefamille WHERE famille.nomfamille = '$famille' ");
            $res2 = mysqli_query($conn, $req2);
            
    ?>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $famille ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php
                        while ($count2 = mysqli_fetch_array($res2)){
                            $sousfamille = $count2['nomsousfamille']; ?>
                                <a class="dropdown-item" href="#"> <?php echo $sousfamille; ?> </a>
                    <?php } ?>
            </div>
        </li>
    <?php } ?>
    </ul>
  </div>
</nav>




    