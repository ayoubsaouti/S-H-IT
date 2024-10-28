<?php
session_start();
if(isset($_SESSION['username'])){
	header('Location: MonCompte.php');
}

include('HautDePage.php');
require_once('DB/Connexion_DB.php');
include('Form-inscription.html');

$sContenue ="";
$iCompteur=0;


if(isset($_GET['validation']))
{
	if(!empty($_GET['login']) AND !empty($_GET['password']) )
	{
		
			
			$sLogin = $_GET['login'];
			$sPassword = $_GET['password'];

			$stmt = $dbh->prepare('SELECT * FROM users WHERE users_login=:login');
			$stmt->bindParam(':login',$sLogin,PDO::PARAM_STR);


			if(!$stmt->execute())
			{
				$sContenue .= 'Erreur de la requete. <br />';
			}
			else
			{
				$iNbResultat = $stmt->rowCount();
				if($iNbResultat==0)
				{
					$sQuery = "INSERT INTO users (users_login,users_password) values (:login,:password)";
					$stmt = $dbh->prepare($sQuery);
					$stmt->bindParam(':login',$sLogin,PDO::PARAM_STR,20);
					$stmt->bindParam(':password',$sPassword,PDO::PARAM_STR,20);
					
					if(!$stmt->execute())
					{
						$sContenue .= 'Erreur lors de l insert.<br />';
					}
					else
					{
						$sContenue .= 'Utilisateur ajouté. <br />';
						$iCompteur = 1;
					}
				}
				else
				{
					$sContenue .= "L'e-mail a déjà été utilisé, veuillez utilisez un autre e-mail.";
				}
			}
	}
}



if($iCompteur == 1){
	$sContenue .= '<a href ="Login.php"><button type="button" class="btn btn-success">Se connecter</button><a/>';
}

?>
	<div class="card text-center">
		<div class="card-body">
<?php	
			echo '<h2>'.$sContenue.'</h2>';	
?>
		</div>
	</div>
<?php
include('Footer.html');
?>