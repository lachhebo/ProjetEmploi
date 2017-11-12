<?php


namespace App\Table; 


use App\App; 

class Postule{

	public static function postuler($offre){


		$mybase = App::getDb(); 
		$mypdo = $mybase->getPDO();

		$origine = $_SESSION['id'];

		$sql = 'INSERT INTO postule (id_membre, id_offre) VALUES (:id_membre, :id_offre)'; 

		$mypdostatement = $mypdo->prepare($sql); 


		$mypdostatement->execute(array('id_membre' => $origine,'id_offre' =>$offre)); 
		
	}


}


?>