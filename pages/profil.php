<?php 
$post = App\App::getDb()->prepare('SELECT nom, date_obtention, ecole FROM diplome WHERE etudiant = ?', [$_SESSION['id']], 'App\Table\Diplome'); 

$exp = App\App::getDb()->prepare('SELECT * FROM experience WHERE id_membre = ?', [$_SESSION['id']], 'App\Table\Experience'); 

$postule = App\App::getDb()->prepare('SELECT * FROM offres WHERE id IN (SELECT id_offre FROM postule WHERE id_membre= ?)', [$_SESSION['id']], 'App\Table\Offre');

$myoffer = App\App::getDb()->prepare('SELECT * FROM offres WHERE rh_id = ?', [$_SESSION['id']], 'App\Table\Offre');
//var_dump($myoffer); 

$candidats_bloque = App\App::getDb()->prepare2('SELECT * FROM `membres` RIGHT JOIN blocage ON (id = id_membre) WHERE id_rh= ? ',[$_SESSION['id']], false); 
//var_dump($candidats_bloque); 

if(isset($_POST['name']) and isset($_POST['firstname']) and isset($_POST['email']) and isset($_POST['mdp']) ) {
  if($_POST['name']!="" and $_POST['firstname']!="" and $_POST['email']!="" and $_POST['mdp']!=""){

    if (!isset($_POST['ent']) and !isset($_POST['sa'])  ) {
      $initie = new App\Table\Personnage($_POST['name'],$_POST['firstname'],$_POST['mdp'],$_POST['date'],$_POST['tel'],$_POST['email'],$_POST['adres']);
      //var_dump($initie); 
      $possible = $initie->ajouter_perso_bdd();
    }

    elseif($_POST['ent']!="" or $_POST['sa']!="" ) {
      $initie = new App\Table\Personnage($_POST['name'],$_POST['firstname'],$_POST['mdp'],$_POST['date'],$_POST['tel'],$_POST['email'],$_POST['adres'], $_POST['ent'], $_POST['sa']);
      //var_dump($initie); 
      $possible = $initie->ajouter_perso_bdd();
    }
  }
}

if(isset($_POST['name_blocage']) and isset($_POST['firstname_blocage']) and isset($_POST['email_blocage'])){

  $vire = new App\Table\Personnage($_POST['name_blocage'],$_POST['firstname_blocage'],null,null,null,$_POST['email_blocage'],null, null,null);
  $vire->blacklister($_SESSION['id']);  
}

if(isset($_POST['diplome']) and $_POST['diplome']!=null){
  App\Table\diplome::ajouter($_POST['diplome'],$_POST['ecole'], $_POST['date_obtention']); 
}

App\App::getDb()->modification_personnage();

?>


<div class="page_profil">

<div class="tabvertical" >
  <button class="tablinksvertical" onclick="openCity(event, 'Mon Profil')" id="defaultOpen">Mon Profil</button>
  <button class="tablinksvertical" onclick="openCity(event, 'Compétence')" id="tabvertical1">Compétences</button>
  <button class="tablinksvertical" onclick="openCity(event, 'Expérience')" id="tabvertical2">Expérience</button>
  <button class="tablinksvertical" onclick="openCity(event, 'Offres postulé')" id = "tabvertical3">Offres postulé</button>
  <button class="tablinksvertical" onclick="openCity(event, 'Modifier mon profil')" id = "tabvertical4">Modifier mon profil</button>
  <?php 
  if($_SESSION['type']==1){?>
    <button class="tablinksvertical" onclick="openCity(event, 'Mes offres')" id = "tabvertical5">Mes offres</button>
    <button class="tablinksvertical" onclick="openCity(event, 'Inscrire RH')" id = "tabvertical6">Inscrire un partenaire</button>
    <button class="tablinksvertical" onclick="openCity(event, 'Securité')" id = "tabvertical7">Securité</button>
  <?php } ?>
</div>

<div id="Mon Profil" class="tabcontentvertical" >
    <div class = "presentation" >

      <h1><b>Nom</b> </h1>
      <h2> <?= $_SESSION['nom'];?> </h2> 

      <h1><b>Prenom</b> </h1>
      <h2> <?= $_SESSION['prenom'];?> </h2> 

      <h1><b>Bio</b> </h1>
      <h2> <?= $_SESSION['bio'];?> </h2> 

      <h1><b>Email</b> </h1>
      <h2> <?= $_SESSION['email'];?> </h2> 

      <h1><b>Télephone</b> </h1>
      <h2> <?= $_SESSION['telephone'];?> </h2>       

      <h1><b>Adresse</b> </h1>
      <h2> <?= $_SESSION['adresse'];?> </h2> 


      <h1><b>Date de naissance</b> </h1>
      <h2> <?= $_SESSION['date_naissance'];?> </h2> 

      <h1><b>Date d'inscription</b> </h1>
      <h2> <?= $_SESSION['date_inscription'];?> </h2> 
    </div>
</div>

<div id="Compétence" class="tabcontentvertical">
  <div class = "presentation">
    <div class="col-xs-8 " style="display: fixed" ></div>
      <h1><b>Diplôme</b> </h1>
      <ul class="liste_diplome">
          <?php foreach ($post as $diplome): ?> 
            <li>
              <h2><?= $diplome->nom; ?></a></h2>
              <p><em><?= $diplome->date_obtention ?> </em></p>
              <p><b><em><?= $diplome->ecole; ?></em></b></p>
            </li>
          <?php endforeach; ?> 
      </ul>
    </div>
    <div class ="col-xs-4">
      <h1><b>Ajouter un Diplôme</b> </h1>
      <form method="POST" action="">
        <div class="form-group">
          <label for="diplome">Diplome</label>
          <input type="text" class="form-control" name = "diplome" placeholder="Votre diplôme">
        </div>
        <div class="form-group">
          <label for="date_obtention">date</label>
          <input type="date" class="form-control" name = "date_obtention" placeholder="Date d'obtention">
        </div>
        <div class="form-group">
          <label for="date_obtention">Ecole</label>
          <input type="text" class="form-control" name = "ecole" placeholder="Date d'obtention">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
      </form>
    </div>
  </div>
</div>

<div id="Expérience" class="tabcontentvertical">
  <div class = "presentation" >

  <h1><b>Expérience</b> </h1>
    <ul class="liste_diplome">

      <?php foreach ($exp as $experience):
         ?> 
        <li>
          <h2>Poste: <?= $experience->poste; ?></a></h2>
          <p><em>Date de début: <?= $experience->date_obtention ?> </em></p>
          <p><em>Durée: <?= $experience->duree; ?> ans</em></p>
          <p><b><em><?= $experience->entreprise; ?></em></b></p>
        </li>
      <?php endforeach; ?> 
    </ul>
  </div>
</div>

<div id="Offres postulé" class="tabcontentvertical" >
  <div class = "presentation" >

  <h1><b>Offres Postulés </b> </h1>
    <ul class="liste_diplome">

      <?php foreach ($postule as $tentative): ?> 
        <li>
          <h2><a href="<?= $tentative->getURL() ?>"><?= $tentative->nom; ?></a> </h2>
          <p><em><?= $tentative->categorie ?> </em></p>
          <p><?= $tentative->getExtrait(); ?></p>
        </li>
      <?php endforeach; ?> 
    </ul>
  </div>
</div>


<div id="Modifier mon profil" class="tabcontentvertical">

  <div class = "presentation" >
  <?php if($_SESSION['type']==0){ ?>

    <form class="form" method="POST" action="" >
              <div class="form-group">
                <label for="name">Nom :</label>
                <input type="text" id="modification_name" class="form-control" placeholder="modification_Nom" name="modification_name">
              </div>
              <div class="form-group">
                <label for="firstname">Prénom: </label>
                <input type="text" id="modification_firstname" class="form-control" name="modification_firstname" placeholder="Prénom">
              </div>
              <div class="form-group">
                <label for="mdp">Mot de passe: </label>
                <input type="password" id="modification_mdp" class="form-control" name="modification_mdp" placeholder="Mot de passe">
              </div>
              <div class="form-group">
                <label for="date">Date de naissance: </label>
                <input type="date" name="modification_date" class="form-group" id="modification_date" placeholder="Ex : 07/11/1985">
              </div>
              <div class="form-group">
                <label for="tel">Téléphone: </label>
                <input type="tel" id="modification_tel" class="form-control" name="modification_tel" placeholder="Téléphone">
              </div>
              <div class="form-group">
                <label for="email">Email: </label>
                <input type="text" id="modification_email" class="form-control" name="modification_email" placeholder="Mail">
              </div>
              <div class="form-group">
                <label for="adres">Adresse: </label>
                <input type="text" id="modification_adres" class="form-control" name="modification_adres" placeholder="Adresse postale">
              </div>
              <div class="form-group">
                <label for="bio">Bio: </label>
                <input type="text"  class="form-control" name="modification_bio" placeholder="Ma bio">
              </div>
      <button type="connexion" class="btn btn-default" id="inscription_btn_pro">Confirmer les modifications</button>
  <?php } else { ?>
        <form form class="form" method="POST" action="">
            <div class="form-group">
              <label for="name">Nom</label>
              <input name = "modification_name" type="text" id="name" class="form-control" placeholder="Nom">
            </div>
            <div class="form-group">
              <label for="firstname">Prénom</label>
              <input type="text" name = "modification_firstname" id="name" class="form-control" placeholder="Prénom">
            </div>
            <div class="form-group">
              <label for="mdp">Mot de passe</label>
              <input type="text" id="mdp" name="modification_mdp" class="form-control" placeholder="Mot de passe">
            </div>
            <div class="form-group">
              <label for="Ent">Entreprise</label>
              <input type="Comment" id="ent" name="modification_ent" class="form-control" placeholder="L'entreprise pour laquelle vous travaillez en tant que RH">
            </div>
            <div class="form-group">
              <label for="SA">Secteur d'actvité</label>
              <input type="text" id="sa" name = "modification_sa" class="form-control" placeholder="Votre secteur d'activité">
            </div>
            <div class="form-group">
              <label for="tel">Téléphone</label>
              <input type="tel" id="tel" class="form-control" name="modification_tel" placeholder="Téléphone professionnel">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" id="Email" name = "modification_email" class="form-control" placeholder="Mail d'entreprise ou personnel">
            </div>
            <div class="form-group">
                <label for="date">Date de naissance: </label>
                <input type="date" name="modification_date" class="form-group" id="date" placeholder="Ex : 07/11/1985">
              </div>
            <div class="form-group">
              <label for="adresse">Adresse</label>
              <input type="text" id=adr name= "modification_adres" class="form-control" placeholder="Votre adresse">
            </div>
            <div class="form-group">
                <label for="bio">Bio: </label>
                <input type="text"  class="form-control" name="modification_bio" placeholder="Ma bio">
              </div>
            <button type="connexion" class="btn btn-default" id= "inscription_btn_rh">Confirmer les modifications</button>
        </form>


    <?php } ?>

    </div>
</div>

<?php 

if($_SESSION['type']==1){ ?>

<div id="Mes offres" class="tabcontentvertical">
  <div class = "presentation" >

  <h1><b>Offres Postés sur le site  </b> </h1>
    <ul class="liste_diplome">

      <?php foreach ($myoffer as $tentative): ?> 
        <li>

          
          <h2><a href="<?= $tentative->getURL() ?>"><?= $tentative->nom; ?></a> </h2>
          <h3>Les candidats sont :</h3>

          <ul class="liste_diplome">
              <?php 

            $candidat_postulant=App\App::getDb()->prepare2('SELECT * FROM `membres` RIGHT JOIN postule ON (id = id_membre) WHERE id_offre= :offer AND id = :member',['member' =>$_SESSION['id'], 'offer' =>$tentative->id ], false); 

              foreach ($candidat_postulant as $postulant): ?>

                    <li>
                      <form <form method="POST" action=""></form>
                        <p><a href="<?= $postulant->getURL() ?>"><?= $postulant->get_full_nom(); ?></a></p>
                    </li>              
          
              <?php endforeach; ?>
          </ul>
        </li>
      <?php endforeach; ?> 
    </ul>
  </div>
</div>

<div id="Inscrire RH" class="tabcontentvertical">
  <div class="col-xs-6">
  <h1>Inscrire un collègue RH</h1>
  <form form class="form" method="POST" action="">
            <div class="form-group">
              <label for="name">Nom</label>
              <input name = "name" type="text" id="name" class="form-control" placeholder="Nom">
            </div>
            <div class="form-group">
              <label for="firstname">Prénom</label>
              <input type="text" name = "firstname" id="name" class="form-control" placeholder="Prénom">
            </div>
            <div class="form-group">
              <label for="mdp">Mot de passe</label>
              <input type="text" id="mdp" name="mdp" class="form-control" placeholder="Mot de passe">
            </div>
            <div class="form-group">
              <label for="Ent">Entreprise</label>
              <input type="Comment" id="ent" name="ent" class="form-control" placeholder="L'entreprise pour laquelle vous travaillez en tant que RH">
            </div>
            <div class="form-group">
              <label for="SA">Secteur d'actvité</label>
              <input type="text" id="sa" name = "sa" class="form-control" placeholder="Votre secteur d'activité">
            </div>
            <div class="form-group">
              <label for="tel">Téléphone</label>
              <input type="tel" id="tel" class="form-control" name="tel" placeholder="Téléphone professionnel">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" id="Email" name = "email" class="form-control" placeholder="Mail d'entreprise ou personnel">
            </div>
            <div class="form-group">
                <label for="date">Date de naissance: </label>
                <input type="date" name="date" class="form-group" id="date" placeholder="Ex : 07/11/1985">
              </div>
            <div class="form-group">
              <label for="adresse">Adresse</label>
              <input type="text" id=adr name= "adres" class="form-control" placeholder="Votre adresse">
            </div>
            <button type="connexion" class="btn btn-default" id= "inscription_btn_rh">Inscription</button>
    </form>
  </div>
  <div class="col-xs-6">
    <h1>Inscrire un candidat</h1>
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
                <input type="date" name="date" class="form-group" id="date" placeholder="Ex : 07/11/1985">
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
</div>

<div id="Securité" class="tabcontentvertical">
  <div class = "presentation" >
    <h1><b> Candidat bloqué :  </b> </h1>
      <ul class="liste_diplome">

      <?php foreach ($candidats_bloque as $tentative): ?> 
        <li>
          <h2><?= $tentative->get_nom(); ?></a> </h2>
        </li>
      <?php endforeach; ?> 
    </ul>
  </div>


  <div class = "presentation col-xs-8"  >
    <h1><b>Fomulaire de blocage:  </b> </h1>
    <form class="form" method="POST" action="" >
        <div class="form-group">
          <label for="name">Nom :</label>
          <input type="text" id="name_blocage" class="form-control" placeholder="Nom" name="name_blocage">
        </div>
        <div class="form-group">
          <label for="firstname">Prénom: </label>
          <input type="text" id="firstname_blocage" class="form-control" name="firstname_blocage" placeholder="Prénom">
        </div>
        <div class="form-group">
          <label for="email">Email: </label>
          <input type="text" id="email_blocage" class="form-control" name="email_blocage" placeholder="Mail">
        </div>
        <button type="connexion" class="btn btn-default" id="inscription_btn_pro">Inscription</button>
    </form>
  </div>
</div>

<?php } ?>
 
</div>