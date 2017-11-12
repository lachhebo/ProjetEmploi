<?php


namespace App\Table; 


use App\App; 

class Message{

	public static function envoyer($texte, $destination){


		$mybase = App::getDb(); 
		$mypdo = $mybase->getPDO();

		if(isset($_SESSION['id'])){
			$origine = $_SESSION['id'];

			$sql = 'INSERT INTO message (contenu, id_destination, id_origine) VALUES (:content, :id_dest, :id_origin)'; 

			$mypdostatement = $mypdo->prepare($sql); 


			$mypdostatement->execute(array('content' => $texte,'id_origin' =>$origine, 'id_dest'=>$destination)); 
		}
		else{

			$sql = 'INSERT INTO message (contenu, id_destination, id_origine) VALUES (:content, :id_dest, :id_origin)'; 

			$mypdostatement = $mypdo->prepare($sql); 


			$mypdostatement->execute(array('content' => $texte, 'id_dest'=>$destination));

		}



	}


}


?>