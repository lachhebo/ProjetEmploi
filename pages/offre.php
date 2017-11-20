<?php

/*
Fichier correspondant à l'affichage des informations détaillées d'une offre d'emploi
*/

//On récupère l'offre à afficher dans la bdd (troisième argument à true pour dire qu'on attend qu'une seule ligne résultat)
$post = App\App::getDb()->prepare('SELECT * FROM offres WHERE id= ?', [$_GET['id']], 'App\Table\Offre', true);

//Si la requête échoue
if ($post === false){
	App::notfound();
}

//On donne un nom "pertinent" à la page
App\App::setTitle($post->nom_offre);

//On récupère le RH ayant posté l'offre (si l'utilisateur veut le contacter)
$rh_associe = App\App::getDb()->prepare2('SELECT * FROM `membres` WHERE id= ? ', [$post->rh_id], true);

if(isset($_SESSION['id'])){
	$discussion = App\App::getDb()->prepare('SELECT * FROM message WHERE (id_origine = :membre AND id_destination= :rh) OR (id_origine = :rh AND id_destination= :membre) ORDER BY date_envoi', ['membre'=>$_SESSION['id'],'rh'=>$post->rh_id ], 'App\Table\Message');
}

//true si l'utilisateur est blacklisté par le rh ayant posté l'offre, false sinon
$blocage = false;
//Si l'utilisateur est connecté, il peut postuler ou contacter le rh. On doit donc vérifier s'il a déjà postulé ou s'il est blacklisté par le rh
if (isset($_SESSION['id'])) {
	//A-t-il déjà postulé ?
	$post_postulation = App\App::getDb()->prepare('SELECT * FROM postule WHERE id_offre = :offer  and id_membre = :member', [ 'offer' => $_GET['id'], 'member' => $_SESSION['id'] ], 'App\Table\Postule');
	//Est-il blacklisté par le RH ayant posté l'offre ?
	$candidats_bloque = App\App::getDb()->prepare2('SELECT * FROM `blocage` WHERE (id_membre = :id_membre) and  id_rh = :id_rh ',['id_membre' => $_SESSION['id'], 'id_rh' =>$post->rh_id], true);
	//var_dump($candidats_bloque);
	//Si le candidat n'est pas bloqué par le RH
	if($candidats_bloque->get_mail() == null){
		$blocage = false;
	//S'il est bloqué par le rh
	}else{
		$blocage = true;
	}
	//Si le candidat a déjà postulé
	if($post_postulation == null){
		$verifier = true;
	//S'il n'a pas postulé
	}else{
		$verifier = false;
	}
}

//Si le candidat veut envoyer un message non vide au RH
if(isset($_POST['message'])){
	var_dump($post->rh_id);
	//On envoie le message
	App\Table\Message::envoyer($_POST['message'],$post->rh_id);
}

//Si le candidat/RH postule à l'offre
if(isset($_POST['postule'])){
	//On enregistre le fait que le candidat/RH postule à l'offre dans la bdd
	App\Table\Postule::postuler($_GET['id']);
}

?>

<!--Affichage des informations de l'offre d'emploi-->
<div class = "liste_offre">
	<div class="col-xs-8">
		<div class="liste_offre">

<div class="col-xs-8">

	<div class="liste_offre">

		<h1><?= $post->nom_offre; ?> </h1>

			<p><b>Description: </b></p>
			<p><?= $post->contenu; ?> </p>

			<p><b>Entreprise: </b></p>
			<p><?= $post->entreprise; ?> </p>

			<p><b>Lieu: </b></p>
			<p><?= $post->adresse; ?> </p>

			<!--Si l'utilisateur est connecté et n'a pas encore postulé à l'offre-->

			<?php if (isset($_SESSION['id']) and $verifier == true and $_SESSION['type']==0){ ?>
				<!--On affiche le bouton permettant de postuler-->
				<form method="POST" action="">
					<input type="submit" name="postule" value="Postuler" />
				</form>
			<?php  } ?>
		</div>
	</div>

</div>


<!--Affichage des informations du RH ayant mis l'offre en ligne-->
<div class="col-xs-4">
	<div class="liste_offre">

		<h2>Proposé par : </h2>
		<!--On affiche le nom, le prénom et le mail du RH-->

		<p><b>nom: </b></p>
		<p><?= $rh_associe->get_nom(); ?></p>
		<p><b>Prénom: </b></p>
		<p><?= $rh_associe->get_prenom(); ?></p>
		<p><b>Mail: </b></p>
		<p><?= $rh_associe->get_mail(); ?> </p>

		<!--Si 'lutilisateur n'est pas blacklisté par le RH-->

		</div>


		<div class="liste_offre" >
			<h2>Discussion : </h2>

			<ul class="liste_diplome">

					<?php if(isset($_SESSION['id'])){ ?>
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
						<?php } endforeach;
					}
							?>

		</ul>





		<?php if($blocage == false and isset($_SESSION['id'])){ ?>
			<!--On affiche l'interface permettant d'envoyer des messages au RH-->
		<form method="POST" action="">
			<div class="form-group">
				<label for="message">Message</label>
				<input type="text" class="form-control" name = "message" placeholder="Votre message">
			</div>
			<button type="submit" class="btn btn-primary">Envoyer</button>
		</form>

		<?php  } ?>

		</div>

</div>
