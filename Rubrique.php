<?php
  require_once "DB\Connexion_DB.php";
  $sql = "SELECT * FROM articles ORDER BY id ";
  $requete = $dbh->query($sql);
  $articles = $requete->fetchAll();
  include('HautDePage.php');
  include('Nav.php');
  include('Article.php');
?>
        <?php if(@$afficher!="oui"){ ?>                   
<section>
  <div class="container">
    <div class="row justify-content-center gap-5 d-flex flex-row flex-wrap">
      <?php foreach($articles as $article): ?>
        <article class="col-md-3">
          <div class="card text-center">
              <img src=img/<?=$article["image_article"] ?>>
            <div class="card-body">
              <h5 class="card-title"><?= $article["nom_article"] ?></h5>
              <p class="card-text"><?= $article["prix_article"] ?>€</p>
              <a class="btn btn-dark" href="Produit.php?id=<?= $article['id'] ?>">Acheter</a>
              
            </div>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

         
<?php
        }
  include('Footer.html');
?>
