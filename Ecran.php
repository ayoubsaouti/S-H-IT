<?php
    include('HautDePage.php');
    include('Nav.php');
    include('article.php');
?>
                                
    <?php if(@$afficher!="oui"){ ?>
    <div class="container">
        <div class="row justify-content-center gap-5 d-flex flex-row flex-wrap">
            <div class="col-md-3">
                <div class="card">
                <img src="img/A-ecran.jpg" class="card-img-top" alt="Ecran MSI">
                <div class="card-body">
                    <h5 class="card-title">MSI Écran gamer Optix G27C4 E2 27" 170Hz Full-HD Curved</h5>
                    <span class="prix_art">319€</span>
                    <span class="vprix_art">209,99€</span>
                    
                    <button class="btn btn-dark"><a href="Produit.php?id=1">Acheter</a></button>
                </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

<?php
  include('Footer.html');
?>