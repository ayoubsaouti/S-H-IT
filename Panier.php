<?php
include('HautDePage.php');
include('Nav.php');


            // Connexion à la base de données

            $pdo = new PDO('mysql:host=localhost;dbname=helb', 'redacteur', 'helb');
            $table_name = 'panier';
            
            // Récupération du nom d'utilisateur depuis la session
            session_start();
            if (!isset($_SESSION['username'])) {
                header('Location: Login.php');
                exit();
            }
            $username = $_SESSION['username'];
            
            $stmt = $pdo->prepare("SELECT COUNT(*) FROM $table_name WHERE users_login = :username");
            $stmt->bindParam(':username', $_SESSION['username']);
            $stmt->execute();
            $row_count = $stmt->fetchColumn();
            
            if ($row_count == 0) {
                // Le panier est vide
                echo "Le panier de l'utilisateur $username est vide.";
            } else {
                // Récupère les articles du panier
                $stmt = $pdo->prepare("SELECT panier.quantity, articles.id, articles.nom_article, articles.image_article, articles.prix_article FROM panier INNER JOIN articles ON panier.id_article = articles.id WHERE panier.users_login = :username");
                $stmt->bindParam(':username', $_SESSION['username']);
                $stmt->execute();
                $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
                // Affiche le panier
                echo "Le panier de l'utilisateur {$_SESSION['username']} contient les éléments suivants :";
                echo '<table>';
                echo '<tr><th>Article</th><th>Quantité</th><th>Prix unitaire</th><th>Total</th><th>Action</th></tr>';
                $total = 0;
                foreach ($articles as $article) {
                    $id = $article['id'];
                    $nom_article = $article['nom_article'];
                    $image_article = "img/".$article['image_article'];
                    $prix_article = $article['prix_article'];
                    $quantity = $article['quantity'];
                    $total_article = $prix_article * $quantity;
                    $total += $total_article;
                    echo "<tr>";
                    echo "<td><a href='Produit.php?id=$id'><img src='$image_article' height='100' width='100'>$nom_article</a></td>";
                    echo "<td>$quantity <form method='POST'><input type='hidden' name='article_id' value='$id'><button type='submit' name='remove_from_cart'>-</button></form></td>";
                    echo "<td>$prix_article €</td>";
                    echo "<td>$total_article €</td>";
                    echo "<td><form method='POST'><input type='hidden' name='article_id' value='$id'><button type='submit' name='remove_from_cart'>Supprimer</button></form></td>";
                    echo "</tr>";
                }
                echo "<tr><td colspan='3'><b>Total :</b></td><td colspan='2'><b>$total €</b></td></tr>";
                echo '</table>';
                echo '<form method="POST">';
                echo '<button type="submit" name="commander">Commander</button>';
                echo '</form>';
            }

            

            // Ajout d'un article au panier
            if (isset($_POST['add_to_cart'])) {
                $user_login = $_SESSION['login'];
                $article_id = $_POST['article_id'];
                $quantity = $_POST['quantity'];

                // Vérification si l'article existe dans le panier de l'utilisateur
                $stmt = $pdo->prepare('SELECT * FROM panier WHERE users_login = ? AND id_article = ?');
                $stmt->execute([$user_login, $article_id]);
                $panier_article = $stmt->fetch();

                if ($panier_article) {
                    // Si l'article existe déjà dans le panier, on met à jour la quantité
                    $new_quantity = $panier_article['quantity'] + $quantity;
                    $stmt = $pdo->prepare('UPDATE panier SET quantity = ? WHERE users_login = ? AND id_article = ?');
                    $stmt->execute([$new_quantity, $user_login, $article_id]);
                } else {
                    // Sinon, on ajoute l'article dans le panier de l'utilisateur
                    $stmt = $pdo->prepare('INSERT INTO panier (users_login, id_article, quantity) VALUES (?, ?, ?)');
                    $stmt->execute([$user_login, $article_id, $quantity]);
                }
            }

            // Suppression d'un article du panier
            if (isset($_POST['remove_from_cart'])) {
                $user_login = $_SESSION['username'];
                $article_id = $_POST['article_id'];

                $stmt = $pdo->prepare('DELETE FROM panier WHERE users_login = ? AND id_article = ?');
                $stmt->execute([$user_login, $article_id]);
            }

            // Affichage du panier de l'utilisateur
            $user_login = $_SESSION['username'];
            $stmt = $pdo->prepare('SELECT panier.quantity, articles.nom_article, articles.image_article, articles.content_article
                                FROM panier
                                INNER JOIN articles ON panier.id_article = articles.id
                                WHERE panier.users_login = ?');
            $stmt->execute([$user_login]);
            $panier = $stmt->fetchAll();
            $total = 0;
include('Footer.html');
?>