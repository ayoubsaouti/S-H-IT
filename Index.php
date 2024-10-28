<?php
include('HautDePage.php');
include('Nav.php');
include('Article.php');
?>
                                
    <?php if(@$afficher!="oui"){ ?>
			<div class="bg-image" style="background-image: url(img/background.jpg);"></div>
			<article>
				<div class ="titre_ODM">OFFRE DU MOMENT :</div>
				<div class="container">
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-7">
						<div id="carousel-ODM" class="carousel slide" data-bs-ride="carousel">
							<div class="carousel-inner" >
							<div class="carousel-item active">
								<img src="img/A-laptop.jpg" class="d-block w-70" class="img-fluid">
								<div class="lb_article">ASUS PC portable gamer ROG Strix AMD Ryzen 7 4800H</div>
								<span class="prix_art">1154€</span>
								<span class="vprix_art">999€</span>
								<div class="d-grid gap-2">
									<a href="Produit.php?id=2" class="btn btn-dark">Acheter</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="img/A-ecran.jpg" class="d-block w-70" class="img-fluid">
								<div class="lb_article">MSI Écran gamer Optix G27C4 E2 27" 170Hz Full-HD Curved</div>
								<span class="prix_art">319€</span>
								<span class="vprix_art">209,99€</span>
								<div class="d-grid gap-2">
									<a href="Produit.php?id=1" class="btn btn-dark">Acheter</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="img/B-laptop.jpg" class="d-block w-70" class="img-fluid">
								<div class="lb_article">ACER PC portable Aspire 3 A315-34-P4B5 Intel Pentium</div>
								<span class="prix_art">449€</span>
								<span class="vprix_art">319,99€</span>
								<div class="d-grid gap-2">
									<a href="Produit.php?id=4" class="btn btn-dark">Acheter</a>
								</div>
							</div>
							</div>
							<button class="carousel-control-prev" type="button" data-bs-target="#carousel-ODM" data-bs-slide="prev" >
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
							</button>
							<button class="carousel-control-next" type="button" data-bs-target="#carousel-ODM" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
							</button>
						</div>
						
					</div>
				</div>
			</article>
			<article>
				<div class ="titre_DECOUVRER">DECOUVREZ AUSSI : </div>
				<div class="container">
				  <div class="row">
					<div class="col-md-3">
						<div class="card" style="width: 18rem;">
							<img src="img/img_c1.jpg" class="card-img-top">
							<div class="card-body">
								<h5 class="card-title" style="text-align: center;">LES LAPTOP</h5>
								<p class="card-text"style="text-align: center;">Nos laptop sont conçus pour le gaming ainsi que pour les études, venez trouvez votre laptop !</p>
								<div class="d-grid gap-2">
									<a href="Laptop.php" class="btn btn-dark" >J'y vais !</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="col-md-3">
							<div class="card" style="width: 18rem;">
								<img src="img/img_c2.jpg" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title" style="text-align: center;">LES PC FIXES</h5>
									<p class="card-text"style="text-align: center;">Nos pc fixes sont prinicpalement conçus pour le gaming ainsi que pour le multitâche, ils sont très performants.</p>
								  	<div class="d-grid gap-2">
										<a href="Tour.php" class="btn btn-dark" >J'y vais !</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="col-md-3">
							<div class="card" style="width: 18rem;">
								<img src="img/img_c3.jpg" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title"style="text-align: center;">LES ECRANS</h5>
									<p class="card-text"style="text-align: center;">Nous possèdons des écrans de toutes games, petits, grands, larges, longs,..</p>
									<div class="d-grid gap-2">
										<a href="Ecran.php" class="btn btn-dark" >J'y vais !</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="col-md-3">
							<div class="card" style="width: 18rem;">
								<img src="img/img_c4.jpg" class="card-img-top">
								<div class="card-body">
								  	<h5 class="card-title"style="text-align: center;">LES LICENSES</h5>
								  	<p class="card-text"style="text-align: center;">Plusieurs licenses Windows ainsi que quelques licenses Office. </p>
								  	<div class="d-grid gap-2">
									  <a href="Licences.php" class="btn btn-dark" >J'y vais !</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
			</article>
		<br>

<?php }?>
<?php
include('Footer.html');
?>