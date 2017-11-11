<?php  
$post = App\App::getDb()->prepare2('SELECT * FROM membres WHERE id= ?', [$_GET['id']]); 

if ($post === false){
	App::notfound(); 
}

App\App::setTitle($post->get_nom()); 


?>

<div class="liste_offre">
	<h1><?= $post->get_nom(); ?> </h1>

	<p><em><?= $post->get_prenom(); ?></em></p>

	<p><?= $post->get_bio(); ?> </p>

</div>
