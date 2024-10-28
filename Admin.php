<?php
session_start();
include('HautDePage.php');
include('Nav.php');
include('article.php');

if($_SESSION['username'] == 'ADMIN@HELB.com'){
    

require_once('DB/Connexion_DB.php');

$dbh = new PDO($dsn, $user, $pass);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query = "SELECT id,nom_article FROM articles";

$i_Compteur=0;
$s_Name = <<< EOT
                                <div class="mt-3">
                                    <label for="name" class="form-label">Nom de l'article :</label>
                                    <input type="text" class="form-control" id="name" name="nom_article">
                                </div>
                                <button type="submit" class="btn btn-dark" name ="Modifier">Modifier</button>

EOT;
$s_Image1 = <<< EOT
                                <div class="mt-3">
                                    <label for="image1" class="form-label">Image 1:</label>
                                    <input class="form-control" type="file" id="image1" name="image1_article">
                                </div>     
                                <button type="submit" class="btn btn-dark" name ="Modifier">Modifier</button>
   
EOT;
$s_Image2 = <<< EOT
                                <div class="mt-3">
                                    <label for="image2" class="form-label">Image 2:</label>
                                    <input class="form-control" type="file" id="image2" name="image2_article">
                                </div>     
                                <button type="submit" class="btn btn-dark" name ="Modifier">Modifier</button>
   
EOT;
$s_Image3 = <<< EOT
                                <div class="mt-3">
                                    <label for="image3" class="form-label">Image 3:</label>
                                    <input class="form-control" type="file" id="image3" name="image3_article">
                                </div>     
                                <button type="submit" class="btn btn-dark" name ="Modifier">Modifier</button>
   
EOT;
$s_Prix = <<< EOT
                                <div class="mb-3">
                                        <label for="prix" class="form-label">Prix de l'article :</label>
                                        <input type="text" class="form-control" id="prix" name="prix_article">
                                </div>
                                <button type="submit" class="btn btn-dark" name ="Modifier">Modifier</button>

EOT;
$s_Content = <<< EOT
                                 <div class="mt-3">
                                    <label for="description" class="form-label">Description :</label>
                                    <textarea class="form-control" id="description" rows="3" name="content_article"></textarea>
                                </div>
                                <button type="submit" class="btn btn-dark" name ="Modifier">Modifier</button>

EOT;



// AJOUTER
if(isset($_GET['Ajouter'])) {
    if(empty($_GET['nom_article'])){
        echo '<div class="alert alert-danger" role="alert">Veuillez entrer un nom !</div>';
    }
    if(empty($_GET['image1_article']) || empty($_GET['image2_article']) || empty($_GET['image3_article'])){
        echo '<div class="alert alert-danger" role="alert">Image manquante !</div>';
    }
    if(empty($_GET['prix_article'])){
        echo '<div class="alert alert-danger" role="alert">Veuillez entrer un prix !</div>';
    }
    if(empty($_GET['content_article'])){
        echo '<div class="alert alert-danger" role="alert">Veuillez entrer une description !</div>';
    }
    if (!empty($_GET['nom_article']) AND !empty($_GET['image1_article']) AND !empty($_GET['image2_article']) AND !empty($_GET['image3_article']) AND !empty($_GET['prix_article']) AND !empty($_GET['content_article'])){
        $s_NomArticle = $_GET['nom_article'];
        $s_Image1Article = $_GET['image1_article'];
        $s_Image2Article = $_GET['image2_article'];
        $s_Image3Article = $_GET['image3_article'];
        $s_PrixArticle = $_GET['prix_article'];
        $s_DescriptionArticle = $_GET['content_article'];
        $sql = "INSERT INTO articles (nom_article, image_article, image_article2, image_article3, prix_article, content_article) VALUE ('$s_NomArticle', '$s_Image1Article', '$s_Image2Article', '$s_Image3Article', '$s_PrixArticle', '$s_DescriptionArticle')";
        if ($dbh->query($sql)) {
            echo 'Article ajouté'; 
            header('Location:Admin.php');
        }
        else {
            echo "Error: " . $sql . "<br>" . $dbh->errorInfo()[2];
        }
    }
}
// MODIFIER
else if(isset($_GET['Modifier'])){
    if(isset($_GET['options_choisir_article'])){
        if($_GET['options_modif_article'] == '1')
        {
            $s_NomArticle = $_GET['nom_article'];
            $sql = "UPDATE articles SET nom_article = '$s_NomArticle' WHERE id = $_GET[options_choisir_article]";

            if ($dbh->query($sql)) {        
                echo '<p>Nom de l article modifié</p>';
                header('Location:Admin.php');
            }
            else {
                echo "Error: " . $sql . "<br>" . $dbh->errorInfo()[2];
            }
        }
        else if($_GET['options_modif_article'] == '2')
        {
            $s_Image1Article = $_GET['image1_article'];
            $sql = "UPDATE articles SET image_article = '$s_Image1Article' WHERE id = $_GET[options_choisir_article]";

            if ($dbh->query($sql)) {        
                echo '<p>l image 1 de l article modifié</p>';
                header('Location:Admin.php');
            }
            else {
                echo "Error: " . $sql . "<br>" . $dbh->errorInfo()[2];
            }
        }
        else if($_GET['options_modif_article'] == '3')
        {
            $s_Image2Article = $_GET['image2_article'];
            $sql = "UPDATE articles SET image_article2 = '$s_Image2Article' WHERE id = $_GET[options_choisir_article]";

            if ($dbh->query($sql)) {        
                echo '<p>l image 2 de l article modifié</p>';
                header('Location:Admin.php');
            }
            else {
                echo "Error: " . $sql . "<br>" . $dbh->errorInfo()[2];
            }
        }
        else if($_GET['options_modif_article'] == '4')
        {
            $s_Image3Article = $_GET['image3_article'];
            $sql = "UPDATE articles SET image_article3 = '$s_Image3Article' WHERE id = $_GET[options_choisir_article]";

            if ($dbh->query($sql)) {        
                echo '<p>l image 3 de l article modifié</p>';
                header('Location:Admin.php');
            }
            else {
                echo "Error: " . $sql . "<br>" . $dbh->errorInfo()[2];
            }
        }
        else if($_GET['options_modif_article'] == '5')
        {
            $s_PrixArticle = $_GET['prix_article'];
            $sql = "UPDATE articles SET prix_article = '$s_PrixArticle' WHERE id = $_GET[options_choisir_article]";

            if ($dbh->query($sql)) {        
                echo '<p>Le prix de l article modifié</p>';
                header('Location:Admin.php');
            }
            else {
                echo "Error: " . $sql . "<br>" . $dbh->errorInfo()[2];
            }
        }
        else if($_GET['options_modif_article'] == '6')
        {
            $s_DescriptionArticle = $_GET['content_article'];
            $sql = "UPDATE articles SET content_article = '$s_DescriptionArticle' WHERE id = $_GET[options_choisir_article]";

            if ($dbh->query($sql)) {        
                echo '<p>La description de l article modifié</p>';
                header('Location:Admin.php');
            }
            else {
                echo "Error: " . $sql . "<br>" . $dbh->errorInfo()[2];
            }
        }
    }
    else{
        echo 'Aucun article disponible';
    }
}
// SUPPRIMER
if(isset($_GET['Supprimer'])){
    if(isset($_GET['options_choisir_article']))
    {
        $s_DeleteArticle = $_GET['options_choisir_article'];
        $sql = "DELETE FROM articles WHERE id = '$s_DeleteArticle';";
        if ($dbh->query($sql))
        {        
            echo '<p>Article supprimé</p>';        
            header('Location:Admin.php');
        }
    }
    else{
        echo 'Aucun article disponible';
    }
}
?>
            <div class="bg-image" style="background-image: url(img/background.jpg);"></div>

            <div class="container d-flex justify-content-center align-items-center">
                <h1 class="mb-7" >ADMIN</h1>
            </div>

            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <div class="card-header text-center">
                                <h1 class="mb-0">Ajouter un article</h1>
                            </div>
                            <div class="card-body"> 
                                <!-- Content of the first form -->
                                <form name ="form_ajouter" action="#" method="get">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nom de l'article :</label>
                                        <input type="text" class="form-control" id="name" name="nom_article">
                                    </div>
                                    <div class="mb-3">
                                        <label for="image1" class="form-label">Image 1:</label>
                                        <input class="form-control" type="file" id="image1" name="image1_article">
                                    </div>
                                    <div class="mb-3">
                                        <label for="image2" class="form-label">Image 2:</label>
                                        <input class="form-control" type="file" id="image2" name="image2_article">
                                    </div>
                                    <div class="mb-3">
                                        <label for="image3" class="form-label">Image 3:</label>
                                        <input class="form-control" type="file" id="image3" name="image3_article">
                                    </div>
                                    <div class="mb-3">
                                        <label for="prix" class="form-label">Prix de l'article :</label>
                                        <input type="text" class="form-control" id="prix" name="prix_article">
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description :</label>
                                        <textarea class="form-control" id="description" rows="3" name="content_article"></textarea>
                                    </div>
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <button type="submit" class="btn btn-dark" name ="Ajouter" >Ajouter</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <div class="card-header text-center">
                                <h1 class="mb-0">Modifier un article</h1>
                            </div>
                            <div class="card-body">
                                <!-- Content of the second form -->
                                <form name ="form_choisir_article" action="#" method="get">
                                    <h6>Quelle article voulez-vous modifier ?</h6>
                                    <select class="form-select" name ="options_choisir_article">
                                        <?php
                                        try {
                                            $result = $dbh->query($query);
                                            foreach($result as $row) {
                                                if(isset($_GET['options_choisir_article'])){
                                                    if($_GET['options_choisir_article'] == $row['id']){
                                                        echo "<option value = \"".$row['id']."\" selected >" . $row['nom_article'] . '</option>';
                                                    }
                                                }
                                                echo "<option value = \"".$row['id']."\">" . $row['nom_article'] . '</option>';
                                            }
                                        } catch (PDOException $e) {
                                            die("Erreur : " . $e->getMessage());
                                        }
                                        ?>
                                    </select>
                                    <h6>Que voulez-vous modifier ?</h6>
                                    <select class="form-select" name ="options_modif_article">
                                        <option value="1" <?php if(isset($_GET['options_modif_article'])){if($_GET['options_modif_article'] == "1") echo 'selected';}?>>Je veux modifier le nom de l'article</option>
                                        <option value="2" <?php if(isset($_GET['options_modif_article'])){if($_GET['options_modif_article'] == "2") echo 'selected';}?>>Je veux modifier l'image 1 de l'article</option>
                                        <option value="3" <?php if(isset($_GET['options_modif_article'])){if($_GET['options_modif_article'] == "3") echo 'selected';}?>>Je veux modifier l'image 2 de l'article</option>
                                        <option value="4" <?php if(isset($_GET['options_modif_article'])){if($_GET['options_modif_article'] == "4") echo 'selected';}?>>Je veux modifier l'image 3 de l'article</option>
                                        <option value="5" <?php if(isset($_GET['options_modif_article'])){if($_GET['options_modif_article'] == "5") echo 'selected';}?>>Je veux modifier le prix de l'article</option>
                                        <option value="6" <?php if(isset($_GET['options_modif_article'])){if($_GET['options_modif_article'] == "6") echo 'selected';}?>>Je veux modifier la description de l'article</option>
                                    </select>
                                    <button type="submit" class="btn btn-dark" name ="Choisir" data-bs-target="#Ajouter_Bascule" data-bs-toggle="modal">Choisir</button>
                                <?php
                                    if(isset($_GET['Choisir']))
                                    {
                                        if($_GET['options_modif_article'] == '1')
                                        {
                                            echo $s_Name;
                                        }
                                        else if($_GET['options_modif_article'] == '2')
                                        {
                                            echo $s_Image1;
                                        }
                                        else if($_GET['options_modif_article'] == '3')
                                        {
                                            echo $s_Image2;
                                        }
                                        else if($_GET['options_modif_article'] == '4')
                                        {
                                            echo $s_Image3;
                                        }
                                        else if($_GET['options_modif_article'] == '5')
                                        {
                                            echo $s_Prix;
                                        }
                                        else if($_GET['options_modif_article'] == '6')
                                        {
                                            echo $s_Content;
                                        }
                                    }
                                ?>
                                </form> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <div class="card-header text-center">
                                <h1 class="mb-0">Supprimer un article</h1>
                            </div>
                            <div class="card-body">
                                <!-- Content of the third form -->
                                <form name ="form_supprimer" action="#" method="get">
                                    <select class="form-select" name ="options_choisir_article">
                                        <?php
                                        try {
                                            $result = $dbh->query($query);
                                            foreach($result as $row) {
                                                echo "<option value = \"".$row['id']."\">" . $row['nom_article'] . '</option>';
                                            }
                                        } catch (PDOException $e) {
                                            die("Erreur : " . $e->getMessage());
                                        }
                                        ?>
                                    </select>
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <button type="submit" class="btn btn-dark" name ="Supprimer">Supprimer</button>
                                    </div>
                                </form>            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
}
else{
    header('Location:MonCompte.php');
}
include('Footer.html');
?>