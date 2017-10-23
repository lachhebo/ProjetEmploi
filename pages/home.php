

<div class= "row">
	<div class="col-xs-8">

		<h3 > Offres : </h3>

			<?php foreach (App\Table\Offre::getLast() as $post): ?> 


				<h2><a href="<?= $post->getURL() ?>"><?= $post->nom; ?></a> </h2>
				<p><em><?= $post->categorie ?> </em></p>


				<p><?= $post->getExtrait(); ?></p>

			<?php endforeach; ?> 

		<h3 > Recherche resultat : </h3>

		<?php 
			if(isset($_GET['q']) AND !empty($_GET['q'])) {
		   		$result = App\App::getDb()->prepare('SELECT * FROM offres WHERE id= ?', [$_GET['q']], 'App\Table\Offre', false); 
		   	}

	   	?>
	   	
	   	<?php foreach ($result as $resultoffre): ?> 


			<h2><a href="<?= $$ $resultoffre->getURL() ?>"><?= $ $resultoffre->nom; ?></a> </h2>
			<p><em><?= $ $resultoffre->categorie ?> </em></p>


			<p><?= $ $resultoffre->getExtrait(); ?></p>

		<?php endforeach; ?>

   }
	</div>

	<div class="col-xs-4">
		<ul>
			<h3 align=center>Recherche </h3>
			<p>Chercher dans :</p>
				<form method="GET">
						<select class="form-control" id="emploi_choix_search">
							<option>L'intitulé de l'offre</option>
							<option>Le descriptif de l'offre</option>
							<option>Les qualifications de l'offre</option>
						</select>
						<p>les mots :</p>
						<input type="search" name="q" placeholder="Recherche..." />
						

						<div class="divider"></div>

						<p>Niveau d'étude :</p>
						<div class="checkbox">
							<label><input type="checkbox" value="">Bac</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" value="">Bac +2 / +3</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" value="">Bac +5 et supérieur</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" value="">Autre</label>
						</div>

						<div class="divider"></div>

						<p>Domaines d'activité :</p>

						<select class="big-select" name="secteur_activite[]" size="5" multiple="multiple">
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
					<input type="submit" value="Valider" />
					
						
		</ul>
	</div>