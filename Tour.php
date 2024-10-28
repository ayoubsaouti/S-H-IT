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
              <img src="img/A-tour.jpg" class="card-img-top" alt="TOUR">
              <div class="card-body">
                <h5 class="card-title">HP PC gamer Victus TG02-0025nb Intel Core i5-12400F (6K7Z3EA)</h5>
                <p class="prix">999€</p>
                
                <button class="btn btn-dark"><a href="Produit.php?id=5">Acheter</a></button>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <img src="img/B-tour.jpg" class="card-img-top" alt="TOUR MSI">
              <div class="card-body">
                <h5 class="card-title">MSI PC gamer MAG Codex 5 12TG Intel Core i7-12700F (12TG-1499MYS)</h5>
                <p class="prix">1599,99€</p>
                
                <a class="btn btn-dark" href="Produit.php?id=9">Acheter</a>
              </div>
            </div>
          </div>
        </div>
    </div>
    <?php }?>

<?php
  include('Footer.html');
?>
