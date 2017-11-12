<?php


namespace App\Table; 


use App\App; 

class Diplome{


	public static function ajouter($diplome,$ecole, $date_obtention){
		$mybase = App::getDb(); 
		$mypdo = $mybase->getPDO();

		
		$origine = $_SESSION['id'];

		$sql = 'INSERT INTO diplome (nom, date_obtention, ecole,etudiant) VALUES (:name, :date_obtention, :ecole, :student)'; 

		$mypdostatement = $mypdo->prepare($sql); 


		$mypdostatement->execute(array('name' => $diplome,'date_obtention' =>$date_obtention, 'ecole'=>$ecole, 'student' =>$origine)); 

	} 

}


?>