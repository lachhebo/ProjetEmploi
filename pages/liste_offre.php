<?php 

if(isset($_POST['zone_recherche'])) {
	header("Location:../public/index.php?p=recherche&q=".$_POST['zone_recherche']);
}

?>


<div class="liste_offre"> 

<div class= "row">
	<div class="col-xs-8" class="liste_offre_1">

		<h1 > Offres : </h1>

			<?php foreach (App\Table\Offre::getLast() as $post):
				 ?> 


				<h2><a href="<?= $post->getURL() ?>"><?= $post->nom_offre; ?></a> </h2>
				<p><em><?= $post->categorie ?> </em></p>


				<p><?= $post->getExtrait(); ?></p>

			<?php endforeach; ?> 
	   	
   
	</div>

	<div class="col-xs-4" class="list_offre_2">
		<ul>
			<div class="div-header">
					<p><span class="glyphicon glyphicon-search"></span> Effectuez une recherche d'offres :</p>
			</div>
			
					

				<form class="form" method="POST" action="">

					<p>Chercher dans :</p>
					<select class="form-control" id="emploi_choix_search">
						<option>L'intitulé de l'offre</option>
						<option>Le descriptif de l'offre</option>
						<option>Les qualifications de l'offre</option>
					</select>
					
					<p>les mots :</p>

					<input type="search" class="form-control" placeholder="Recherche..." name="zone_recherche" />
					

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
					<button type="submit"  class="btn btn-default btn-emploi-search"> <span class="glyphicon glyphicon-search"></span>Recherche </button>
				</form>
		</ul>
	</div>
</div> 

</div>