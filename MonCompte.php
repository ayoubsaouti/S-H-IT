<?php
session_start();
include('HautDePage.php');
include('Nav.php');
include('article.php');


$s_Contenue="";
$s_FinContenue= <<< EOT
		</div>
	</div>
EOT;
if(isset($_SESSION['username']))
{
	
	$s_Contenue .= '<h5 class="card-title">Bienvenue '.$_SESSION['username'].'<br /></h5>';
?>
	<div class="card text-center">
		<div class="card-body">
<?php	
			echo $s_Contenue;	
?>
		  	<a href ="Login.php?logout"><button type="button" class="btn btn-danger">Se deconnecter</button></a>

<?php
	if($_SESSION['username'] == 'ADMIN@HELB.com'){
		$s_Droit = '<p class="card-text" style ="font-size: 20px">Vous possédez les droits administrateur :<br /></p><a href ="Admin.php" style = "color: #000000; font-weight: bold; font-size: 20px; text-decoration: underline;">CONSULTER</a>';
		echo $s_Droit;
		echo $s_FinContenue;
	}
	else{
		$s_Droit = '<p class="card-text" style ="font-size: 20px">Vous ne possédez aucun droit<br /></p>';
		echo $s_Droit;
		echo $s_FinContenue;
	}
}
else
{
	session_destroy();
	header('Location: Login.php');
}


include('Footer.html');
?>