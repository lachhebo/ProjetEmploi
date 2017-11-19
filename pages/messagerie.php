<?php

/*
Fichier correspondant au code de la messagerie. On adapte le code en fonction des deux interlocuteurs
*/

//On récupère les messages envoyé à l'utilisateur à l'interlocuteur
$message_recu = App\App::getDb()->prepare('SELECT * FROM message LEFT JOIN membres ON (id_origine=membres.id) WHERE id_destination = ?', [$_SESSION['id']], 'App\Table\Message');

//On récupère les messages envoyé par l'utilisateur à l'interlocuteur
$message_envoye = App\App::getDb()->prepare('SELECT * FROM message LEFT JOIN membres ON (id_destination=membres.id) WHERE id_origine = ?', [$_SESSION['id']], 'App\Table\Message');

?>

<!--La messagerie est constitué de deux onglets : les messages reçus et les messages envoyés-->
<div class="page_profil">
	<div class="tabvertical" >
		<button class="tablinksvertical" onclick="openCity(event, 'Message reçu')" id="defaultOpen">Message reçus</button>
		<button class="tablinksvertical" onclick="openCity(event, 'Message envoyés')" id="tabvertical8">Message envoyés</button>
	</div>
</div>

<!--L'onglet message reçu-->
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
				<!--Pour chaque message reçu à afficher-->
				<?php foreach ($message_recu as $recu): var_dump($recu); ?>      
					<tr>
						<!--On affiche le message-->
						<td><?=$recu->contenu?></td>
						<!--Et les informations de l'interlocuteur-->
						<td><?=$recu->nom;?></td>
						<td><?=$recu->prenom;?></td>
						<td><?=$recu->telephone;?></td>
						<td><?=$recu->mail;?></td>
						<!--Ainsi qu'un lien vers les infos de l'interlocuteur-->
						<td><a href="index.php?p=candidat&id=<?=$recu->id?>"> Lien</a></td>
					</tr>
				<?php endforeach; ?>

			</tbody>
		</table>
    </div>
</div>


<!---->
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
				<!--Pour chaque message qu'on a envoyé à l'interlocuteur-->
				<?php foreach ($message_envoye as $envoye): ?>      
					<tr>
						<!--On affiche le contenu du message-->
						<td><?=$envoye->contenu;?></td>
						<!--Et nos informations-->
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