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


	
	public function getURL(){
		return 'index.php?p=offre&id=' . $this->id; 
	}


	public function getExtrait(){
		$html =  '<p>' .  substr($this->contenu,0, 500) . '...</p>' ; 
		$html .= '<p><a href="' .$this->getURL() . '">Voir la suite</a></p>';   
		return $html; 
	} 

}