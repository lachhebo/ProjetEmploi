<?php 

if(isset($_POST['name']) and isset($_POST['firstname']) and isset($_POST['email']) and isset($_POST['mdp']) ) {

    $initie = new App\Table\Personnage($_POST['name'],$_POST['firstname'],$_POST['mdp'],$_POST['date'],$_POST['tel'],$_POST['email'],$_POST['adres']);

    //var_dump($initie); 

    if($initie->verifier_data() == 1){
      echo 'mauvaise data'; 
    }
    elseif ($initie->ajouter_perso_bdd() == 0 ) {
      $initie->recuperer_donnee(); 
      $initie->session(); 
      header("Location:../public/index.php");
    }
    else{
      echo 'chosisir une autre adresse mail '; 
    }
}

?>



<div class="liste_offre">
  <div class="row">
    <div class="col-xs-12">
      <h3 class="text-center"> <b>Formulaire d'inscription</b></h3>
    </div>
    <div class="col-xs-5">
      <form class="form" method="POST" action="" >
                <div class="form-group">
                  <label for="name">Nom :</label>
                  <input type="text" id="name" class="form-control" placeholder="Nom" name="name">
                </div>
                <div class="form-group">
                  <label for="firstname">Prénom: </label>
                  <input type="text" id="firstname" class="form-control" name="firstname" placeholder="Prénom">
                </div>
                <div class="form-group">
                  <label for="mdp">Mot de passe: </label>
                  <input type="password" id="mdp" class="form-control" name="mdp" placeholder="Mot de passe">
                </div>
                <div class="form-group">
                  <label for="date">Date de naissance: </label>
                  <input type="date" name="date" class="form-group" id="date" placeholder="Annee-Mois-Jour">
                </div>
                <div class="form-group">
                  <label for="tel">Téléphone: </label>
                  <input type="tel" id="tel" class="form-control" name="tel" placeholder="Téléphone">
                </div>
                <div class="form-group">
                  <label for="email">Email: </label>
                  <input type="text" id="email" class="form-control" name="email" placeholder="Mail">
                </div>
                <div class="form-group">
                  <label for="adres">Adresse: </label>
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

