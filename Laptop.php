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
                <img src="img/A-laptop.jpg" class="card-img-top" alt="LAPTOP ASUS">
                <div class="card-body">
                    <h5 class="card-title">ASUS PC portable gamer ROG Strix AMD Ryzen 7 4800H</h5>
                    <span class="prix_art">1154€</span>
                    <span class="vprix_art">999€</span>
                    
                    <button class="btn btn-dark"><a href="Produit.php?id=2">Acheter</a></button>
                </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                <img src="img/B-laptop.jpg" class="card-img-top" alt="LAPTOP ACER">
                <div class="card-body">
                    <h5 class="card-title">ACER PC portable Aspire 3 A315-34-P4B5 Intel Pentium</h5>
                    <span class="prix_art">449€</span>
                                    <span class="vprix_art">319,99€</span>
                    
                    <button class="btn btn-dark"><a href="Produit.php?id=4">Acheter</a></button>
                </div>
                </div>
            </div>
        </div>
    </div>
    <?php }?>

<?php
  include('Footer.html');
?>