<?php
if (isset($_POST['name'])) {
	if (isset($_POST['description'])) {
		if (isset($_POST['entreprise'])) {
			if(isset($_POST['secteur_activite'])){ 
				if(isset($_POST['adresse'])){
					App\Table\Offre::creer_offre($_POST['name'], $_POST['description'], $_POST['entreprise'], $_POST['secteur_activite'],$_POST['adresse']); 
				}
			} 
		}
	}

}


?>



<div class="liste_offre"> 

	<h1> Offre : </h1>

	<div class= "row" >


		<div class="col-xs-2" ></div>

		<div class="col-xs-6">

			<form class="form" method="POST" action="" >
			              <div class="form-group">
			                <label for="name">Nom :</label>
			                <input type="text" id="name" class="form-control" placeholder="Nom" name="name">
			              </div>
			               <div class="form-group">
			                <label for="description">Description: </label>
			                <textarea id="description" class="form-control" name="description" placeholder="Description"> </textarea>
			              </div>
			              <div class="form-group">
			                <label for="entreprise">Entreprise: </label>
			                <input type="text" id="entreprise" class="form-control" name="entreprise" placeholder="Entreprise">
			              </div>
			              <div class="form-group">
			              	<label for="secteur_activite[]">Secteur: </label>
			                <select class="big-select" name="secteur_activite" size="8" multiple="multiple">
										<option>Agroalimentaire</option>
										<option>Banque / Assurance</option>
										<option>Bois / Papier / Carton / Imprimerie</option>
										<option>BTP / Matériaux de construction</option>
										<option>Chimie / Parachimie</option>
										<option>Commerce / Négoce / Distribution</option>
										<option>Edition / Communication / Multimédia</option>
										<option>Electronique / Electricité</option>
										<option>Etudes et conseils</option>
										<option>Industrie pharmaceutique</option>
										<option>Informatique / Télécoms</option>
										<option>Machines et équipements / Automobile</option>
										<option>Métallurgie / Travail du métal</option>
										<option>Plastique / Caoutchouc</option>
										<option>Services aux entreprises</option>
										<option>Textile / Habillement / Chaussure</option>
										<option>Transports / Logistique</option>
							</select>
			              </div>
			              <div class="form-group">
			                <label for="adres">Adresse: </label>
			                <input type="text" id="adres" class="form-control" name="adresse" placeholder="Adresse postale">
			              </div>

						<button type="submit" class="btn btn-default" id="inscription_btn_pro">Ajouter</button>
						<em>* Toutes les renseignements doivent être complétés</em>
			</form>
		</div>
	</div>
</div>