<?php

/*
Fichier correspondant à la définition d'un objet diplome.
Ce fichier (et les autres fichiers du répertoire) permettent d'interagir plus facilement avec la base de données
*/

//Espace de nom du fichier
namespace App\Table; 

//On utilise le fichier contenant les données principales du site
use App\App; 

//Classe Diplome
class Diplome{
	//Fonction permettant d'ajouter un diplome à la bdd
	public static function ajouter($diplome,$ecole, $date_obtention){
		//On récupère la bdd
		$mybase = App::getDb(); 
		$mypdo = $mybase->getPDO();
		//On récupère l'utilisateur possédant le diplome à ajouter
		$origine = $_SESSION['id'];

		//On définit la requête
		$sql = 'INSERT INTO diplome (nom, date_obtention, ecole,etudiant) VALUES (:name, :date_obtention, :ecole, :student)'; 
		//On effectue la mise à jour de la bdd
		$mypdostatement = $mypdo->prepare($sql); 
		$mypdostatement->execute(array('name' => $diplome,'date_obtention' =>$date_obtention, 'ecole'=>$ecole, 'student' =>$origine)); 
	}
}
?>