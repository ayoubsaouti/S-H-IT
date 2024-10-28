<?php
$nav= <<<'EOT'
    	<nav class="navbar navbar-expand-lg bg-body-tertiary " style="background-color: #416186 !important;">
			<div class="container-fluid">
			
			  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				  <li class="nav-item">
					<a class="nav-link active" aria-current="page" href="Index.php" style="color: #FFFFFF;">Offre Du moment</a>
				  </li>
		
				  <li class="nav-item">
					<a class="nav-link active" aria-current="page" href="Rubrique.php" style="color: #FFFFFF;">Nos produits</a>
				  </li>
				  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #FFFFFF ;">
					  Hardware
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="Tour.php">Tour fixe</a></li>
						<li><hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="Laptop.php">Laptop</a></li>
						<li><hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="Ecran.php">Ecran</a></li>
						<li><hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="Disque-dur.php">Disque dur</a></li>
						<li><hr class="dropdown-divider"></li>
								
					</ul>
					<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #FFFFFF;">
					  Software
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="Licences.php" >Licences</a></li>
						<li><hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="Windows.php">Windows</a></li>
						<li><a class="dropdown-item" href="Office.php">Office</a></li>		
					</ul>
				  	</li>
				</ul>
			  </div>
			</div>
		</nav>
			
EOT;

echo $nav 

?>
