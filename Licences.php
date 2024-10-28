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
                    <img src="img/A-office.jpg" class="card-img-top" alt="LICENCE OFFICE">
                    <div class="card-body">
                        <h5 class="card-title">Microsoft 365 Personnel FR 12 mois (+3 mois extra si acheté ensemble avec un laptop)</h5>
                        <p class="prix">69€</p>
                        
                        <button class="btn btn-dark"><a href="Produit.php?id=3">Acheter</a></button>
                    </div>
                    </div>
                </div>
                <div class="col-md-3">
                <div class="card">
                <img src="img/A-windows.jpg" class="card-img-top" alt="LICENCE WINDOWS">
                <div class="card-body">
                    <h5 class="card-title">Windows 10 Home GER USB (HAJ-00060)</h5>
                    <p class="prix">145€</p>
                    
                    <button class="btn btn-dark"><a href="Produit.php?id=6">Acheter</a></button>
                </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

<?php
  include('Footer.html');
?>