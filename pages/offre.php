<?php 
$post = App\App::getDb()->prepare('SELECT * FROM offres WHERE id= ?', [$_GET['id']], 'App\Table\Offre', true); 

if ($post === false){
	App::notfound(); 
}

App\App::setTitle($post->nom); 


?>


<h1><?= $post->nom; ?> </h1>

<p><em><?= $post->categorie; ?></em></p>

<p><?= $post->contenu; ?> </p>




