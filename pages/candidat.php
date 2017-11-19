<?php
//On récupère le candidat dont on veut afficher les infos dans la bdd
$post = App\App::getDb()->prepare2('SELECT * FROM membres WHERE id= ?', [$_GET['id']]); 

//On récupère ses diplomes
$diplome = App\App::getDb()->prepare('SELECT nom, date_obtention, ecole FROM diplome WHERE etudiant = ?', [$_GET['id']], 'App\Table\Diplome'); 

//On récupère ses expériences professionnelles
$exp = App\App::getDb()->prepare('SELECT * FROM experience WHERE id_membre = ?', [$_GET['id']], 'App\Table\Experience'); 

//Si on ne trouve pas le candidat
if ($post === false){
	App::notfound(); 
}

//On récupère les discussions 
$discussion = App\App::getDb()->prepare('SELECT * FROM message WHERE (id_origine = :membre AND id_destination= :rh) OR (id_origine = :rh AND id_destination= :membre) ORDER BY date_envoi', ['membre'=>$_GET['id'],'rh'=>$_SESSION['id']], 'App\Table\Message'); 

//Si l'utilisateur veut envoyer un message, on l'envoie
if(isset($_POST['message'])){
	var_dump($_GET['id']);
	App\Table\Message::envoyer($_POST['message'],$_GET['id']); 
}

//Titre de la page
App\App::setTitle($post->get_nom()); 

//var_dump($discussion_1);

?>



<div class="liste_offre">

	<div class="col-xs-8" > 

		<h1><b> Présentation: </b></h1>
			<!--On affiche les informations générales sur le candidat -->
			<ul class="liste_diplome">
				<!--Le nom du candidat-->
				<li><h2><?= $post->get_full_nom(); ?> </h2></li>
				<!--La biographie du candidat-->
				<li><p><em><?= $post->get_bio(); ?> </p></em></li>
				<!--Sa date de naissance-->
				<li><p><b><em><?= $post->get_date_de_naissance(); ?></em></b></p></li>

			</ul>

		<h1><b>Diplômes : </b></h1>
			<!--On affiche ensuite les diplomes du candidat-->
			<ul class="liste_diplome">
			<!--Pour chacun de ses diplomes-->
			<?php foreach ($diplome as $success): ?> 
				<!--On affiche le nom du diplome, la date d'obtention et l'école qui l'a délivré-->
				<li>
					<h2><?= $success->nom; ?></a></h2>
					<p><em><?= $success->date_obtention ?> </em></p>
					<p><b><em><?= $success->ecole; ?></em></b></p>
				</li>
		    <?php endforeach; ?> 

			</ul>
		<!--On affiche les expériences professionnelles du candidat-->
		<h1><b> Expérience : </b></h1>

			<ul class="liste_diplome">			
			<!--Pour chacune des expériences professionnelles du candidat-->
			<?php foreach ($exp as $experience): ?> 
				<!--On affiche le poste occupé, la date de commencement, la durée du contrat, et l'entreprise dans laquelle le candidat a travaillé-->
				<li>
					<h2>Poste: <?= $experience->poste; ?></a></h2>
					<p><em>Date de début: <?= $experience->date_obtention ?> </em></p>
					<p><em>Durée: <?= $experience->duree; ?> ans</em></p>
					<p><b><em><?= $experience->entreprise; ?></em></b></p>
				</li>
		    <?php endforeach; ?> 

		    </ul>


	</div>

	<div class="col-xs-4">
		<div>
			<h1><b>Contact : </b></h1>
			<ul class="liste_diplome">
				<!--On affiche les informations de contact du candidat : son téléphone, son mail, et son adresse-->
				<li><p> <b> Télephone : </b><?= $post->get_telephone(); ?></p></li>
				<li><p> <b> Email : </b> <?= $post->get_mail(); ?></p></li>
				<li><p> <b> Adresse : </b> <?= $post->get_adresse(); ?></p></li>
			</ul>
		</div>
		<div>
			<h1><b>Discussion : </b></h1>
			<div class="liste_diplome" >

				<!--On affiche la discussion entre l'utilisateur consultant la page du candidat et le candidat-->
				<ul class="liste_diplome">			

					<?php foreach ($discussion as $dis): ?> 
						<!--Une discussion est constitué de message. Pour chaque message, on le positionne à gauche ou à droite suivant l'interlocuteur qui l'a émis-->
						<?php if($dis->id_origine == $_GET['id']){ ?>
						<li>
							<!--Message à gauche-->
							<p style=" position: left;"><?= $dis->contenu ?></p>
						</li>
						<?php }else{  ?>
						<li>
							<!--Message à droite-->
							<p style=" position: right;"><?= $dis->contenu ?></p>
						</li>
					<?php } endforeach; ?> 

				</ul>
				<!--Mini-formulaire permettant à l'utilisateur d'envoyer un message au candidat-->
				<form method="POST" action="">
					<div class="form-group">
						<!--L'utilisateur entre son message dans cet input-->
						<input type="text" class="form-control" name = "message" placeholder="Votre message">
					</div>
					<!--Puis il envoie le message en cliquant sur envoyer-->
					<button type="submit" class="btn btn-primary">Envoyer</button>
				</form>
			</div>
		</div>
	</div>



	


</div>

