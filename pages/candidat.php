<?php  
$post = App\App::getDb()->prepare2('SELECT * FROM membres WHERE id= ?', [$_GET['id']]); 

$diplome = App\App::getDb()->prepare('SELECT nom, date_obtention, ecole FROM diplome WHERE etudiant = ?', [$_GET['id']], 'App\Table\Diplome'); 

$exp = App\App::getDb()->prepare('SELECT * FROM experience WHERE id_membre = ?', [$_GET['id']], 'App\Table\Experience'); 

if ($post === false){
	App::notfound(); 
}

$discussion = App\App::getDb()->prepare('SELECT * FROM message WHERE (id_origine = :membre AND id_destination= :rh) OR (id_origine = :rh AND id_destination= :membre) ORDER BY date_envoi', ['membre'=>$_GET['id'],'rh'=>$_SESSION['id']], 'App\Table\Message'); 


if(isset($_POST['message'])){
	var_dump($_GET['id']);
	App\Table\Message::envoyer($_POST['message'],$_GET['id']); 
}

App\App::setTitle($post->get_nom()); 

//var_dump($discussion_1);

?>



<div class="liste_offre">

	<div class="col-xs-8" > 

		<h1><b> Présentation: </b></h1>

			<ul class="liste_diplome">

				<li><h2><?= $post->get_full_nom(); ?> </h2></li>

				<li><p><em><?= $post->get_bio(); ?> </p></em></li>

				<li><p><b><em><?= $post->get_date_de_naissance(); ?></em></b></p></li>

			</ul>

		<h1><b>Diplômes : </b></h1>

			<ul class="liste_diplome">

			<?php foreach ($diplome as $success): ?> 

		      <li>
		        <h2><?= $success->nom; ?></a></h2>
		        <p><em><?= $success->date_obtention ?> </em></p>
		        <p><b><em><?= $success->ecole; ?></em></b></p>
		      </li>

		    <?php endforeach; ?> 

			</ul>

		<h1><b> Expérience : </b></h1>

			<ul class="liste_diplome">			

			<?php foreach ($exp as $experience): ?> 

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


				<li><p> <b> Télephone : </b><?= $post->get_telephone(); ?></p></li>

				<li><p> <b> Email : </b> <?= $post->get_mail(); ?></p></li>

				<li><p> <b> Adresse : </b> <?= $post->get_adresse(); ?></p></li>


			</ul>

		</div>

		<div>

		<h1><b>Discussion : </b></h1>

		<div class="liste_diplome" >


				<ul class="liste_diplome">			

			<?php foreach ($discussion as $dis): ?> 

				<?php if($dis->id_origine == $_GET['id']){ ?>
				    <li>
				        <p style=" position: left;"><?= $dis->contenu ?></p>
				    </li>
				<?php }else{  ?>
					<li>
				        <p style=" position: right;"><?= $dis->contenu ?></p>
				    </li>


		    <?php } endforeach; ?> 

		    </ul>

			<form method="POST" action="">
				<div class="form-group">
					<input type="text" class="form-control" name = "message" placeholder="Votre message">
				</div>
				<button type="submit" class="btn btn-primary">Envoyer</button>
			</form>

		</div>

		</div>
		
	</div>



	


</div>

