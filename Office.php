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
                    <a href="A-LicenceOffice.php" class="btn btn-dark">Acheter</a>
                </div>
                </div>
            </div>
            
        </div>
    </div>
    <?php }?>

<?php
  include('Footer.html');
?>