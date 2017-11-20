<?php

/*
Fichier correspondant à la définition d'un objet Message.
Ce fichier (et les autres fichiers du répertoire) permettent d'interagir plus facilement avec la base de données
*/

//Espace de nom du fichier
namespace App\Table;

//On utilise le fichier contenant les données principales du site
use App\App;

//Classe Message
class Message{

	//Fonction permettant d'envoyer un message (contenu dans $texte) à un autre utilisateur ($destination)
	public static function envoyer($texte, $destination){

		//On récupère la bdd
		$mybase = App::getDb();
		$mypdo = $mybase->getPDO();

		//Si l'utilisateur est connecté
		if(isset($_SESSION['id'])){
			//On récupère l'origine du message (l'utilisateur)
			$origine = $_SESSION['id'];
			//On définit la requête
			$sql = 'INSERT INTO message (contenu, id_destination, id_origine) VALUES (:content, :id_dest, :id_origin)';
			//On met à jour la bdd
			$mypdostatement = $mypdo->prepare($sql); 
			$mypdostatement->execute(array('content' => $texte,'id_origin' =>$origine, 'id_dest'=>$destination));
		}
		//Sinon on envoie le message, sans spécifier l'origine du message
		else{
			//On définit la requête
			$sql = 'INSERT INTO message (contenu, id_destination, id_origine) VALUES (:content, :id_dest, :id_origin)';
			//On met à jour la bdd
			$mypdostatement = $mypdo->prepare($sql);
			$mypdostatement->execute(array('content' => $texte, 'id_dest'=>$destination));
		}
		//On recharge la page
		header("Refresh:0");
	}
}
?>
