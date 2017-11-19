<?php 

//Si l'utilisateur veut effectuer une recherche (il a rempli la barre de recherche et appuyé sur rechercher), on arrive ici
if(isset($_POST['zone_recherche'])) {
	//On redirige l'utilisateur vers une page générée dynamiquement en utilisant les données de la zone de recherche
	//La page aura une interface similaire mais n'affichera que les candidats rencontrant les critères de recherche renseignés par l'utilisateur
	header("Location:../public/index.php?p=recherche&q=".$_POST['zone_recherche']);
}

?>

<div class="liste_offre"> 
	<div class= "row">
		<div class="col-xs-8" id="zone_affichage">
			<h1 > Recherche resultat : </h1>

			<?php 
				//Si une query a été faite dans l'URL
				if(isset($_GET['q']) AND !empty($_GET['q'])) {
					//On récupère les mots-clés
					$mot_cle = $_GET["q"] ;  
				}
			?>
			<?php
			//Si une query a été faite dans l'URL
			if(isset($_GET['q']) AND !empty($_GET['q'])) {
				//On récupère les mots-clés
				$mot_cle = $_GET["q"];
				//Pour chaque offre répondant aux critères de recherche
				foreach (App\Table\Offre::recherche($mot_cle) as $resultoffre):
			?> 
					<!--On affiche de brèves informations : nom, catégorie et extrait du descriptif-->
					<h2><a href="<?= $resultoffre->getURL() ?>"><?= $resultoffre->nom; ?></a> </h2>
					<p><em><?=  $resultoffre->categorie ?> </em></p>
					<p><?=  $resultoffre->getExtrait(); ?></p>
			<?php endforeach; };  ?>
		</div>
		<!--Formulaire de recherche d'offres d'emploi-->
		<div class="col-xs-4">
			<ul>
				<h3 align=center>Recherche </h3>
				<form class="form" method="POST" action="" >
					<p>Chercher dans :</p>
					<select class="form-control" id="emploi_choix_search">
						<option>L'intitulé de l'offre</option>
						<option>Le descriptif de l'offre</option>
						<option>Les qualifications de l'offre</option>
					</select>
					<p>les mots :</p>
					<input type="search" placeholder="Recherche..." name="zone_recherche" />
					
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