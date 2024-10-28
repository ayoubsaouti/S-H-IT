<?php	
	include('HautDePage.html');
?>
		<!--contact-->
		
		<form class="row">
			<fieldset class="row mb-3">
			
				<legend class="col-form-label col-sm-2 pt-0">Sexe</legend>
				<div class="col-sm-10">
				  <div class="form-check">
					<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
					<label class="form-check-label" for="gridRadios1">
				      Homme
					</label>
				  </div>
				  <div class="form-check">
					<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
					<label class="form-check-label" for="gridRadios2">
					  Femme
					</label>
				  </div>
				  <div class="form-check">
					<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
					<label class="form-check-label" for="gridRadios3">
					  Non-binaire
					</label>
				  </div>
				</div>
			  </fieldset>
			<div class="col-md-6">
				<label for="inputName" class="form-label">Nom</label>
				<input type="Nom" class="form-control" id="inputName">
			  </div>
			  <div class="col-md-6">
				<label for="inputLastName" class="form-label">Prénom</label>
				<input type="LastName" class="form-control" id="inputLastName">
			  </div>
			 
			<div class="col-12">
			  <label for="inputEmail4" class="form-label">E-mail</label>
			  <input type="email" class="form-control" id="inputEmail4">
			</div>
			<div class="col-12">
			  <label for="inputPassword4" class="form-label">Mot de passe</label>
			  <input type="password" class="form-control" id="inputPassword4">
			</div>
			<div class="col-12">
				<label for="inputPassword1" class="form-label">Confirmez votre mot de passe</label>
				<input type="password" class="form-control" id="inputPassword1">
			  </div>
			<div class="col-12">
			  <label for="inputAddress" class="form-label">Adresse</label>
			  <input type="text" class="form-control" id="inputAddress" placeholder="Rue...">
			</div>
			<div class="col-md-6">
			  <label for="inputCity" class="form-label">Ville</label>
			  <input type="text" class="form-control" id="inputCity">
			</div>
			<div class="col-md-4">
			  <label for="inputCP" class="form-label">Code Postale</label>
			  <input type="text" class="form-control" id="inputCP">
			</div>
			<div class="col-md-4">
			  <label for="inputState" class="form-label">Statut</label>
			  <select id="inputState" class="form-select">
				<option selected>Choisir</option>
				<option>Particulier</option>
				<option>Etudiant</option>
				<option>Entreprise</option>
			  </select>
			</div>
			<div class="col-12">
			  <div class="form-check">
				<input class="form-check-input" type="checkbox" id="gridCheck">
				<label class="form-check-label" for="gridCheck">
				  Se souvenir de moi
				</label>
			  </div>
			</div>
			<div class="col-12">
			  <button type="submit" class="btn btn-primary">S'identifier</button>
			</div>
		  </form>
	</body>
	<?php
	include('Footer.html');
	?>
</html>