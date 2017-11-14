<?php 
$post = App\App::getDb()->prepare('SELECT * FROM offres WHERE id= ?', [$_GET['id']], 'App\Table\Offre', true); 


if ($post === false){
	App::notfound(); 
}

App\App::setTitle($post->nom); 

$rh_associe = App\App::getDb()->prepare2('SELECT * FROM `membres` WHERE id= ? ', [$post->rh_id], true); 

$blocage = false;
if (isset($_SESSION['id'])) {
	$post_postulation = App\App::getDb()->prepare('SELECT * FROM postule WHERE id_offre = :offer  and id_membre = :member', [ 'offer' => $_GET['id'], 'member' => $_SESSION['id'] ], 'App\Table\Postule');

	$candidats_bloque = App\App::getDb()->prepare2('SELECT * FROM `blocage` WHERE (id_membre = :id_membre) and  id_rh = :id_rh ',['id_membre' => $_SESSION['id'], 'id_rh' =>$post->rh_id], true);

	if($candidats_bloque == null){
		$blocage = false;
	} else{
		$blocage = true;
	}

	if($post_postulation == null){
		$verifier = true; 
	} else {
		$verifier = false; 
	}
}

if(isset($_POST['message'])){
	App\Table\Message::envoyer($_POST['message'],$post->rh_id); 
}

if(isset($_POST['postule'])){
	App\Table\Postule::postuler($_GET['id']); 
}


?>

<div class = "liste_offre">

<div class="col-xs-8">

	<div class="liste_offre">

		<h1><?= $post->nom; ?> </h1>

		<p><em><?= $post->categorie; ?></em></p>


		<p><b>Description: </b></p>
		<p><?= $post->contenu; ?> </p>

		<p><b>Entreprise: </b></p>
		<p><?= $post->entreprise; ?> </p>

		<p><b>Lieu: </b></p>
		<p><?= $post->adresse; ?> </p>


		<?php if (isset($_SESSION['id']) and $verifier == true){ 		?>
		<form method="POST" action="">
			<input type="submit" name="postule" value="Postuler" />
		</form>


		<?php  } ?>

	</div>

</div>



<div class="col-xs-4">

		
	<div class="liste_offre">


		<h2>Proposé par : </h2>

		<p><b>Nom: </b></p>
		<p><?= $rh_associe->get_nom(); ?></p>

		<p><b>Prénom: </b></p>
		<p><?= $rh_associe->get_prenom(); ?></p>

		<p><b>Mail: </b></p>
		<p><?= $rh_associe->get_mail(); ?> </p>


		<?php if($blocage == false){ 		?>
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


</div>