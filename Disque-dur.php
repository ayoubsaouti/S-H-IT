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
                <img src="img/B-disquedur.jpg" class="card-img-top" alt="Disque Dur">
                <div class="card-body">
                    <h5 class="card-title">LACIE Disque dur externe Rugged Mini 5 TB (STJJ5000400)</h5>
                    <p class="prix">199,99€</p>
                    
                    <button class="btn btn-dark"><a href="Produit.php?id=7">Acheter</a></button>
                </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                <img src="img/A-disquedur.jpg" class="card-img-top" alt="Disque Dur">
                <div class="card-body">
                    <h5 class="card-title">TOSHIBA Disque dur externe Canvio Basics 2TB (HDTB420EK3AA)</h5>
                    <p class="prix">80,99€</p>
                    
                    <button class="btn btn-dark"><a href="Produit.php?id=8">Acheter</a></button>
                </div>
                </div>
            </div>
      </div>
    </div>
    <?php }?>

<?php

  include('Footer.html');
?>