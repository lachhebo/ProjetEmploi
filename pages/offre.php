<?php 
$post = App\App::getDb()->prepare('SELECT * FROM offres WHERE id= ?', [$_GET['id']], 'App\Table\Offre', true); 

if ($post === false){
	App::notfound(); 
}

App\App::setTitle($post->nom); 


?>

<div class="liste_offre">

	<h1><?= $post->nom; ?> </h1>

	<p><em><?= $post->categorie; ?></em></p>


	<p><b>Description: </b></p>
	<p><?= $post->contenu; ?> </p>

	<p><b>Entreprise: </b></p>
	<p><?= $post->entreprise; ?> </p>

	<p><b>Lieu: </b></p>
	<p><?= $post->adresse; ?> </p>



<div>




