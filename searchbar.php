<?php
@$keywords = $_POST["keywords"];
@$valider = $_POST["valider"];

if (isset ($valider) && !empty(trim($keywords))){
	$words=explode(" ",trim($keywords));
	for($i=0;$i<count($words);$i++)
		$kw[$i]="nom_article LIKE '%".$words[$i]."%'";
		require_once "DB\Connexion_DB.php";
	$query="SELECT * FROM articles WHERE ".implode(" or ",$kw); 
	$req=$dbh->prepare($query);
	$req->setFetchMode(PDO:: FETCH_ASSOC);
	$req->execute();
	$tab=$req->fetchAll();
	$afficher="oui";
}
?>
	<div class="col-3">
		<div class="container-fluid">
			
				<form id="recherche" class="d-flex" method="POST" action="" role="search">
					<input class="form-control me-1" type="search" name="keywords" placeholder="Que recherchez-vous ?" aria-label="Search">
					<button class="btn btn-outline-success" type="submit" name="valider" style="border: none; background-color: rgb(255, 255, 255);" ><img src="img/loupe.png" alt="RECH" width="25" height="25"></button>
				</form>
			
        </div>
	</div>
	

	
   

