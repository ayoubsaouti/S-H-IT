<?php
require_once "DB\Connexion_DB.php";
include('HautDePage.php');
include('Nav.php');
include('Article.php');

// Vérifier si l'identifiant du produit est spécifié dans les paramètres GET
if (isset($_GET['id'])) {
    // Récupérer l'identifiant du produit depuis les paramètres GET
    $productId = $_GET['id'];
    session_start();
            if (!isset($_SESSION['username'])) {
                header('Location: Login.php');
                exit();
            }
            $username = $_SESSION['username'];
    // Récupérer les détails du produit depuis la base de données en utilisant une requête SQL
    
    $sql = "SELECT * FROM articles WHERE id = :id";
    $stmt = $dbh->prepare($sql);
    $stmt->execute(['id' => $productId]);
    $product = $stmt->fetch();

    if (isset($_POST['ajouter_panier'])) {
        // Code pour ajouter le produit au panier dans la table appropriée
        // Remplacez "votre_table_panier" par le nom de votre table de panier
        $sql2 = "INSERT INTO panier (`id`, `users_login`, `id_article`, `quantity`) VALUES (NULL, '$username', '$productId', '1')";
        if ($dbh->query($sql2) === TRUE) {
            echo "Produit ajouté au panier avec succès";
        } 
    }
?>
<div class="container text-center">
    <div class="row">
        <div class="col">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src=img/<?=$product["image_article"] ?> class="d-block w-100"> 
                    </div>
                    <div class="carousel-item">
                    <img src=img/<?=$product["image_article2"] ?> class="d-block w-100"> 
                    </div>
                    <div class="carousel-item">
                    <img src=img/<?=$product["image_article3"] ?> class="d-block w-100"> 
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product['nom_article']  ?></h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Caractéristiques</h6>
                    <p class="card-text">
                        <pre>
                            <?php echo "<p>" . $product['content_article'] . "</p>"?>
                        </pre>
                    </p>
                    <form method="POST">
                        <button type="submit" class="btn btn-dark" name="ajouter_panier">Panier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<?php
  include('Footer.html');
?>
