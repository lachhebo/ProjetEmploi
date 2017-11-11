<?php 
$post = App\App::getDb()->prepare('SELECT nom, date_obtention, ecole FROM diplome WHERE etudiant = ?', [$_SESSION['id']], 'App\Table\Diplome'); 

$exp = App\App::getDb()->prepare('SELECT * FROM experience WHERE id_membre = ?', [$_SESSION['id']], 'App\Table\Experience'); 


//var_dump($post);  var_dump($_SESSION['id']);
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

    <button class="tablinksvertical" onclick="openCity(event, 'Mes offres ')" id = "tabvertical3">Mes offres</button>

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
   <div class = "presentation" >

  <h1><b>Diplôme</b> </h1>
    <ul class="liste_diplome">

      <?php foreach ($post as $diplome):
         ?> 
      <li>
        <h2><?= $diplome->nom; ?></a></h2>
        <p><em><?= $diplome->date_obtention ?> </em></p>
        <p><b><em><?= $diplome->ecole; ?></em></b></p>

      </li>
      <?php endforeach; ?> 


    </ul>
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
  
</div>


<div id="Modifier mon profil" class="tabcontentvertical">
</div>

<?php 
if($_SESSION['type']==1){ ?>

<div id="Mes offres" class="tabcontentvertical">
</div>


<?php } ?>





</div>