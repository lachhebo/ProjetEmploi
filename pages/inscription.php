<?php

/*
Fichier correspondant à la page d'inscription
*/

//Lorsque l'utilisateur clique sur le bouton s'inscrire, ce code s'exécute
//Si les champs du nom, prénom, email et mdp ont été correctement renseignés
if(isset($_POST['name']) and isset($_POST['firstname']) and isset($_POST['email']) and isset($_POST['mdp']) ) {
	//On crée un nouveau personnage
    $initie = new App\Table\Personnage($_POST['name'],$_POST['firstname'],$_POST['mdp'],$_POST['date'],$_POST['tel'],$_POST['email'],$_POST['adres']);
	//On vérifie les données du nouvel utilisateur
    if($initie->verifier_data() == 1){
      echo 'mauvaise data';
    }
	//Si l'ajout du nouvel utilisateur se déroule correctement
    elseif ($initie->ajouter_perso_bdd() == 0 ) {
		//On récupère ses données et on les ajoute à la session en cours
		$initie->recuperer_donnee();
		$initie->session();
		//Puis on redirige l'utilisateur nouvellement inscrit vers la page d'accueil
		header("Location:../public/index.php");
    }
	//Si les deux précédentes vérifications ont échoué, c'est que l'adresse mail est déjà prise
    else{
      echo 'chosisir une autre adresse mail ';
    }
}
?>

<!--"Code" HTML correspondant au formulaire d'inscription-->
<div class="liste_offre">
	<div class="row">
		<div class="col-xs-12">
			<h3 class="text-center"> <b>Formulaire d'inscription</b></h3>
		</div>
		<div class="col-xs-5">
			<form class="form" method="POST" action="" >
                <div class="form-group">
					<label for="name">Nom :</label>
          <p id="name_problem" class="text-verif-form"></p>
					<input type="text" id="name" class="form-control" placeholder="Nom" name="name">
                </div>
                <div class="form-group">
					<label for="firstname">Prénom: </label>
          <p id="firstname_problem" class="text-verif-form"></p>
					<input type="text" id="firstname" class="form-control" name="firstname" placeholder="Prénom">
                </div>
                <div class="form-group">
					<label for="mdp">Mot de passe: </label>
          <p id="mdp_problem" class="text-verif-form"></p>
					<input type="password" id="mdp" class="form-control" name="mdp" placeholder="Mot de passe">
                </div>
                <div class="form-group">
					<label for="date">Date de naissance: </label>
          <p id="date_problem" class="text-verif-form"></p>
					<input type="date" name="date" class="form-group" id="date" placeholder="Annee-Mois-Jour">
                </div>
                <div class="form-group">
					<label for="tel">Téléphone: </label>
          <p id="tel_problem" class="text-verif-form"></p>
					<input type="tel" id="tel" class="form-control" name="tel" placeholder="Téléphone">
                </div>
                <div class="form-group">
					<label for="email">Email: </label>
          <p id="email_inscription_problem" class="text-verif-form"></p>
					<input type="text" id="email_inscription" class="form-control" name="email" placeholder="Mail">
                </div>
                <div class="form-group">
					<label for="adres">Adresse: </label>
          <p id="adres_problem" class="text-verif-form"></p>
					<input type="text" id="adres" class="form-control" name="adres" placeholder="Adresse postale">
                </div>
				<button type="connexion" class="btn btn-default" id="inscription_btn_pro">Inscription</button>
			</form>
		</div>
		<div class="col-xs-7 form">
			<h3 >Les avantages de l'inscription : </h3>
			<ul>
				<li class="liste_inscription">Des milliers d'offres d'emploi près de chez vous </li>
				<li class="liste_inscription">Une équipe à votre écoute</li>
				<li class="liste_inscription">Mettez en avant vos expériences </li>
			</ul>
		</div>
	</div>
</div>

<script src = "js\verif_formulaire.js"  type="text/javascript"></script>
