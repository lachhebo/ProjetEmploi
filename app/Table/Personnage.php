<?php

namespace App\Table; 

use App\App; 

class Personnage{


	private $nom;
	private $prenom;
	private $date_naissance; 
	private $telephone; 
	private $email;
	private $adresse; 
	private $motdepasse; 


	private $entreprise; 
	private $secteur_activite; 

	private $type;  //0 pour employé et 1 pour RH 



	private static $id =0; 


	public function __construct($nom, $prenom,$motdepasse, $date, $telephone, $email, $adresse, $entreprise= null, $secteur = null){
		$this->nom = $nom; 
		$this->prenom = $prenom; 
		$this->motdepasse = $motdepasse; 
		$this->date_naissance = $date; 
		$this->telephone = $telephone; 
		$this->email = $email; 
		$this->adresse = $adresse; 

		$this->secteur_activite = $secteur; 
		$this->entreprise = $entreprise; 

		if ($secteur !=null or $entreprise !=null) {
			$this->type = 1;
		}
		else{
			$this->type = 0; 
		}
	} 

	public function ajouter_perso_bdd(){

		//var_dump(App::getDb()); 

		$mybase = App::getDb(); 

		$mypdo = $mybase->getPDO();

		//var_dump($mypdo); 
		//var_dump($mybase); 
		//var_dump($this->email); 


		//

		if($this->date_naissance ==""){
			$this->date_naissance = null; 
		}
		if($this->telephone ==""){
			$this->telephone = null; 
		}

		$sql =  'SELECT * FROM membres WHERE mail = ?';


		$mypdostatement = $mypdo->prepare($sql);
		$mypdostatement->execute(array($this->email));
		$verification = $mypdostatement->fetch();
		//var_dump($verification);

		if ($verification == null){
			$sql = "INSERT INTO membres (nom, prenom, motdepasse, date_naissance, telephone, mail, adresse, entreprise, secteur_activite, type ) VALUES( :name , :prenom , :motdepasse, :date_naissance, :telephone, :mail, :adresse, :entreprise, :secteur_activite, :type)";


			$mypdostatement = $mypdo->prepare($sql);

			$hash = sha1($this->motdepasse); 


			$mypdostatement->execute(array('name' => $this->nom, 'prenom'=>$this->prenom, 'motdepasse'=>$hash, 'date_naissance'=>$this->date_naissance, 'telephone'=>$this->telephone, 'mail'=>$this->email, 'adresse'=>$this->adresse, 'entreprise'=>$this->entreprise, 'secteur_activite'=>$this->secteur_activite, 'type'=>$this->type)); 

				return 0;



			}
		else{
			return 1; 
		}
	}


	public function connexion(){


		$mybase = App::getDb(); 
		$mypdo = $mybase->getPDO();

		$hash = sha1($this->motdepasse);
		$sql = 'SELECT * FROM membres WHERE motdepasse=:mdp and mail= :email'; 


		$mypdostatement = $mypdo->prepare($sql);
		$mypdostatement->execute(array('mdp' => $hash, 'email'=>$this->email));
		$verification = $mypdostatement->fetch();

		var_dump($verification); 

		if($verification!=null){
			//var_dump($this);
			return 0;
		}
		else{
			//var_dump($this);
			return 1; 
		}



	}



}