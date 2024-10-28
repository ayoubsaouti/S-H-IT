<?php
    session_start();

    require_once('DB/Connexion_DB.php');
    include('HautDePage.php');

	// si la variable de session n'exsite pas alors on est pas connecté
	if(!isset($_SESSION['username']))
	{
		$sError = '';
		// si le formulaire est correctement rempli
		if(!empty($_GET['login']) AND !empty($_GET['pwd']))
		{
			$sQuery = 'SELECT * FROM users WHERE users_login=:login AND users_password=:password';
			$stmt = $dbh->prepare($sQuery);
			$stmt->bindParam(':login',$_GET['login'],PDO::PARAM_STR,20);
			$stmt->bindParam(':password',$_GET['pwd'] ,PDO::PARAM_STR,20);

			// si il y a problème de requete
			if(!$stmt->execute())
			{
				$sError = 'Problème de requête ! ';
			}
			else // si pas de problème de requete
			{
				$iNbResultat = $stmt->rowCount();
				// si il y a 0 résultat alors le compte user/login n'existe pas
				// si il y a >1 résultat alors il y a un problème d'intégrité de la table !! Il ne peut pas y avoir plusieurs logins identiques dans la db
				if($iNbResultat==1)
				{
					// authentification réussie
					$sError = 'Connexion en cours...';
					$_SESSION['username']=$_GET['login'];
					$row = $stmt->fetch(PDO::FETCH_ASSOC);
					header('Location: MonCompte.php');
				}
				else
				{
					// échec authentification
					$sError = 'Login ou mot de passe incorrect ! ';
				}
			}
		}
		else 
		{
			$sError = 'Veuillez entrez votre e-mail ainsi que votre mot de passe ';
		}
?>
		<div class="bg-image" style="background-image: url(img/background.jpg);"></div>
        <div class="container d-flex justify-content-center mt-5">
            <div class="card p-4">
                <h1 class="mb-4">Connectez-vous</h1>
                <form action="" method="get">
                    <div>
                        <label>Adresse e-mail : </label>
                        <input type="email" class="form-control" name="login" placeholder="Entrez votre email">
                    </div>
                    <div>
                        <label>Mot de passe : </label>
                        <input type="password" class="form-control" name="pwd" placeholder="Entrez votre mot de passe" >
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-dark" name ="validation">Se connecter</button>
                    </div>
                   
                    <div class="mt-2">
                        <a href="#" style="color : #000000; text-decoration: underline;">Mot de passe oublié ?</a>
                    </div>
                
                    <h2 class="mt-3">Pas encore inscrit ?</h2>
                    <a href="Inscription.php" style="color : #000000; text-decoration: underline;" style="text-align: center;">Créer un compte</a>
                </form>
            </div>
        </div>
<?php
		
		echo '<h2 style ="text-align: center;">'.$sError.'</h2>';
	}
	else // si la session existe, on est donc authentifié
	{
		// si il y a une demande de deconnection alors on déconnecte
		if(isset($_GET['logout']))
		{
			session_destroy();
			header('Location: Login.php');
		}
		else // sinon c'est simplement que l'utilisateur est revenu manuellement sur la page, rien de grave, on le redirige vers la page d'accueil
		{
			header('Location: MonCompte.php');
		}
	}
	$dbh = NULL;
    include('Footer.html');
?>