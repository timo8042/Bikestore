<?php	
    $article=$_GET['article'];
	$reponse = $conn->query('SELECT * FROM article, sousfamille where article.codesousfamille=sousfamille.codesousfamille and sousfamille.nomsousfamille="'.$_GET['article'].'" order by article.prixvente DESC');
	$compteur=0;
	while ($donnees = mysqli_fetch_array($reponse)){
?>

<div align="center" class="panel panel-default">
    <div class="panel-title">
        <h5 class="panel-title"><a href="./detail_article.php?article=<?php $texte = $donnees['designation']; echo $texte;	?>"><b><?php echo $texte; ?></b></a></h5>
    </div>
    <div class="panel-body">
        <img src="ressource/images/<?php $photo = $donnees['photo']; echo $photo; ?>"/>
    </div>
</div>


<?php } 

if ($raw=mysqli_num_rows($reponse) == 0){
    ?> <h3 style="text-align:center; margin-top:10%;">Rupture de stock</h3>
<?php } ?>