<?php

/*
Fichier correspondant à la définition d'un objet Postule.
Ce fichier (et les autres fichiers du répertoire) permettent d'interagir plus facilement avec la base de données
*/

//Espace de nom du fichier
namespace App\Table; 

//On utilise le fichier contenant les données principales du site
use App\App; 

//Classe Postule
class Postule{
	//Fonction permettant à un utilisateur de postuler à une offre
	public static function postuler($offre){
		//On récupère la base de données
		$mybase = App::getDb(); 
		$mypdo = $mybase->getPDO();
		//On récupère l'utilisateur postulant à l'offre
		$origine = $_SESSION['id'];
		//On définit la requête
		$sql = 'INSERT INTO postule (id_membre, id_offre) VALUES (:id_membre, :id_offre)'; 
		//On exécute la requête permettant l'insertion dans la bdd
		$mypdostatement = $mypdo->prepare($sql); 
		$mypdostatement->execute(array('id_membre' => $origine,'id_offre' =>$offre)); 
	}
}
?>