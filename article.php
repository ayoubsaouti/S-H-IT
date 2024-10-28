
<?php if(@$afficher=="oui") { ?>
	
    <div class="nbr"><?= count($tab)." ".(count($tab)>1?"resultats trouvés":"résultat trouvé")?> </div>
            <section>
                
                <div class="container">
                    <div class="row justify-content-center gap-5 d-flex flex-row flex-wrap">
                    <?php foreach($tab as $article): ?>
                    
                        <article class="col-md-3">
                        <div class="card text-center">  
                            <img src=img/<?= @$article["image_article"]?>>
                            <div class="card-body">
                            <h5 class="card-title"><?= @$article["nom_article"] ?></h5>
                            <p class="card-text"><?= @$article["prix_article"] ?>€</p>
                            <button class="btn btn-dark"><a href="Produit.php?id=<?= $article['id']?>">Acheter</a></button>
                            </div>
                        </div>
                        
                        </article>
                    <?php endforeach; ?>
                    </div>
                </div>
               
            </section>
<?php } ?>

