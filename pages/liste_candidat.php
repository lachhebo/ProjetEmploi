<?php 

/*
Fichier correspondant à l'interface permettant aux rh de voir la liste des candidats du site et d'effectuer des recherches de candidats suivant divers critères
*/

//Si l'utilisateur veut effectuer une recherche (il a rempli la barre de recherche et appuyé sur rechercher), on arrive ici
if(isset($_POST['zone_recherche'])) {
	//On redirige l'utilisateur vers une page générée dynamiquement en utilisant les données de la zone de recherche
	//La page aura une interface similaire mais n'affichera que les candidats rencontrant les critères de recherche renseignés par l'utilisateur
	header("Location:../public/index.php?p=recherche_candidat&q=".$_POST['zone_recherche']);
}

?>


<div class="liste_offre"> 
	<div class= "row">
		<!--Affichage des candidats-->
		<div class="col-xs-8" class="liste_offre_1">
			<h1 > Candidats : </h1>
			<!--On affiche tout les candidats dans la bdd-->
			<?php foreach (App\Table\Personnage::getLast() as $post): ?> 
				<!--On génère un lien vers les informations détaillées du candidat-->
				<h2><a href="<?= $post->getURL() ?>"><?= $post->get_nom(); ?></a> </h2>
				<!--On affiche également le prénom du candidat-->
				<p><em><?= $post->get_prenom() ?> </em></p>
				<!--Ainsi qu'un extrait de sa biographie-->
				<p><?= $post->getExtrait(); ?></p>
			<?php endforeach; ?> 
	   	</div>

		<!--Formulaire pour effectuer des recherches sur les candidats-->
		<div class="col-xs-4" class="list_offre_2">
			<ul>	
				<div class="div-header">
					<p><span class="glyphicon glyphicon-search"></span> Effectuez une recherche de candidats :</p>
				</div>
				<form class="form" method="POST" action="" >
					<p>Chercher dans :</p>

					<select class="form-control" id="emploi_choix_search">
						<option>Le nom / prénom du candidat</option>
						<option>Les compétences techniques du candidat</option>
						<option>L'adresse du candidat</option>
					</select>
					<p>les mots :</p>
					<input type="search" class="form-control" id="input_search_emploi" placeholder="Ex : Gérard, Bayonne, C++ ..." name = "zone_recherche">

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