<?php

/*
Fichier correspondant à la définition d'un objet Offre d'emploi.
Ce fichier (et les autres fichiers du répertoire) permettent d'interagir plus facilement avec la base de données
*/

//Espace de nom du fichier
namespace App\Table; 

//On utilise le fichier contenant les données principales du site
use App\App; 

//Classe Offre
class Offre{

	//Renvoie les offres de la BDD
	public static function getLast(){
		//__CLASS__ : php 4.3
		return App::getDb()->query("
			SELECT id, nom, contenu, categorie 
			FROM offres 
			", __CLASS__);
	}

	//Fonction permettant de rechercher des offres dans la bdd suivant certains critères (comme la catégorie ou le niveau d'étude minimum)
	public static function recherche($requete,$category='None',$niveau='None'){
		//On change la requête suivant les valeurs des paramètres
		if( $category =='None' and $niveau=='None'){
			return App::getDb()->query('
				SELECT id, nom, contenu, categorie 
				FROM offres 
				WHERE nom 
				LIKE "%'.$requete.'%" 
				', __CLASS__);
		}
		else if ($category !='None' and $niveau=='None'){
			return App::getDb()->query("
				SELECT id, nom, contenu, categorie 
				FROM offres 
				WHERE 
				nom LIKE %".$requete."% AND categorie = ".$category." 

				", __CLASS__);
		}
		else if ($category =='None' and $niveau!='None') {
			return App::getDb()->query("
				SELECT id, nom, contenu, categorie 
				FROM offres 
				WHERE 
				nom LIKE %".$requete."% AND niveau = ".$niveau."
				", __CLASS__);
		}
		else{
			return App::getDb()->query("
				SELECT id, nom, contenu, categorie 
				FROM offres 
				WHERE 
				nom LIKE %".$requete."% AND categorie = ".$category." AND niveau = ".$niveau."
				", __CLASS__);

		}
	}

	//Fonction permettant d'ajouter une offre d'emploi à la base de données
	public static function creer_offre($name, $description, $entreprise, $secteur, $adresse){
		//On récupère la base de données
		$mybase = App::getDb(); 
		$mypdo = $mybase->getPDO();
		
		//On définit la requête
		$sql = "INSERT INTO offres (nom, contenu, entreprise, categorie, adresse, rh_id) VALUES (:name , :description , :entreprise, :secteur, :adresse, :rh)";
		//On prépare la requête d'insertion dans la bdd
		$mypdostatement = $mypdo->prepare($sql);
		//On finit par exécuter la requête
		$mypdostatement->execute(array('name' => $name, 'description'=>$description, 'entreprise'=>$entreprise, 'secteur'=>$secteur,'adresse'=>$adresse, 'rh'=>$_SESSION['id'])); 
	}

	//On récupère l'URL vers une offre précise (décidée par l'id de l'offre
	public function getURL(){
		return 'index.php?p=offre&id=' . $this->id; 
	}

	//Retourne un extrait du descriptif de l'offre
	public function getExtrait(){
		$html =  '<p>' .  substr($this->contenu,0, 500) . '...</p>' ; 
		$html .= '<p><a href="' .$this->getURL() . '">Voir la suite</a></p>';   
		return $html; 
	} 
}