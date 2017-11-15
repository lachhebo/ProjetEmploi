<?php

$message_recu = App\App::getDb()->prepare('SELECT * FROM message LEFT JOIN membres ON (id_origine=membres.id) WHERE id_destination = ?', [$_SESSION['id']], 'App\Table\Message');

$message_envoye = App\App::getDb()->prepare('SELECT * FROM message LEFT JOIN membres ON (id_destination=membres.id) WHERE id_origine = ?', [$_SESSION['id']], 'App\Table\Message');


//var_dump($message_envoye);
?>

<div class="page_profil">

  <div class="tabvertical" >
    <button class="tablinksvertical" onclick="openCity(event, 'Message reçu')" id="defaultOpen">Message reçus</button>
    <button class="tablinksvertical" onclick="openCity(event, 'Message envoyés')" id="tabvertical8">Message envoyés</button>
  </div>
</div>


<div id="Message reçu" class="tabcontentvertical" >
    <div class = "presentation" >


      <table class="table table-striped">
        <thead>
          <tr>
            <th>Contenu</th>
            <th>Nom</th>
            <th>Prénom </th>
            <th>Téléphone</th>
            <th>Mail</th>
            <th>Profil</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($message_recu as $recu):
            var_dump($recu); ?>      
          <tr>
            <td>$recu->contenu</td>
            <td><?=$recu->nom;?></td>
            <td><?=$recu->prenom;?></td>
            <td><?=$recu->telephone;?></td>
            <td><?=$recu->mail;?></td>
            <td><a href="index.php?p=candidat&id=<?=$recu->id?>"> Lien</a></td>
          </tr>

          
        <?php endforeach; ?>

        </tbody>
      </table>
    </div>
</div>



<div id="Message envoyés" class="tabcontentvertical" >
    <div class = "presentation" >


      <table class="table table-striped">
        <thead>
          <tr>
            <th>Contenu</th>
            <th>Nom</th>
            <th>Prénom </th>
            <th>Téléphone</th>
            <th>Mail</th>
            <th>Profil</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($message_envoye as $envoye): ?>      
          <tr>
            <td><?=$envoye->contenu;?></td>
            <td><?=$envoye->nom;?></td>
            <td><?=$envoye->prenom;?></td>
            <td><?=$envoye->telephone;?></td>
            <td><?=$envoye->mail;?></td>
            <td><a href="index.php?p=candidat&id=<?=$envoye->id;?>"> Lien</a></td>
          </tr>

          
        <?php endforeach; ?>

        </tbody>
      </table>
    </div>
</div>