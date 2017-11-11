<?php


namespace App\Table; 


use App\App; 

class Offre{


	public static function getLast(){
		return App::getDb()->query("
			SELECT id, nom, contenu, categorie 
			FROM offres 
			", __CLASS__);
	}

	public static function recherche($requete,$category='None',$niveau='None'){

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

	public static function creer_offre($name, $description, $entreprise, $secteur, $adresse){


		$mybase = App::getDb(); 

		$mypdo = $mybase->getPDO();

		$req = App::getDb()->getPDO()->prepare('INSERT INTO offres VALUES ');


		$sql = "INSERT INTO offres (nom, contenu, entreprise, categorie, adresse, rh_id) VALUES (:name , :description , :entreprise, :secteur, :adresse, :rh)";


		$mypdostatement = $mypdo->prepare($sql);



		$mypdostatement->execute(array('name' => $name, 'description'=>$description, 'entreprise'=>$entreprise, 'secteur'=>$secteur,'adresse'=>$adresse, 'rh'=>$_SESSION['id'])); 

	}


	
	public function getURL(){
		return 'index.php?p=offre&id=' . $this->id; 
	}


	public function getExtrait(){
		$html =  '<p>' .  substr($this->contenu,0, 500) . '...</p>' ; 
		$html .= '<p><a href="' .$this->getURL() . '">Voir la suite</a></p>';   
		return $html; 
	} 

}