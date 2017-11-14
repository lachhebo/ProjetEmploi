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
	private $id; // pour les recherches
	private $bio; 
	private $date_inscription; 


	public function __construct($nom, $prenom,$motdepasse, $date, $telephone, $email, $adresse, $entreprise= null, $secteur = null, $id=null, $bio= null){
		$this->nom = $nom; 
		$this->prenom = $prenom; 
		$this->motdepasse = $motdepasse; 
		//var_dump($date);
		//$date_form = date_create_from_format('j/M/Y', $date);
		//var_dump($date_form);
		$this->date_naissance = $date; 
		$this->telephone = $telephone; 
		$this->email = $email; 
		$this->adresse = $adresse; 

		$this->secteur_activite = $secteur; 
		$this->entreprise = $entreprise; 
		$this->id = $id; 
		$this->bio = $bio; 
		$this->date_inscription = null; 

		if ($secteur !=null) {
			$this->type = 1;
		}
		else{
			$this->type = 0; 
		}
	} 

	public function blacklister($rh){
		$mybase = App::getDb(); 

		$mypdo = $mybase->getPDO();


		$sql =  'SELECT * FROM membres WHERE mail = ?';


		$mypdostatement = $mypdo->prepare($sql);
		$mypdostatement->execute(array($this->email));
		$verification = $mypdostatement->fetch();


		if ($verification != null){

			$this->id = $verification['id']; 

			$sql = "INSERT INTO blocage (id_rh, id_membre) VALUES( :rh , :black)";


			$mypdostatement = $mypdo->prepare($sql); 


			$mypdostatement->execute(array('black' => $this->id, 'rh'=>$rh));


		}

	}

	public static function recherche($requete,$category='None',$niveau='None'){

		if( $category =='None' and $niveau=='None'){
			return App::getDb()->query2('
				SELECT * 
				FROM membres 
				WHERE nom LIKE "%'.$requete.'%" OR prenom LIKE "%'.$requete.'%" 
				');
		}

	}


	public function get_nom(){
		//var_dump($this->nom);
		return $this->nom;
	}


	public function get_prenom(){
		//var_dump($this->prenom);
		return $this->prenom;
	}

	public function get_full_nom(){
		//var_dump($this->prenom);
		return "$this->nom "."$this->prenom";
	}

	public function get_bio(){
		//var_dump($this->bio);
		return $this->bio;
	}

	public function get_mail(){
		return $this->email; 
	}

	public function get_adresse(){
		return $this->adresse; 
	}

	public function get_telephone(){
		return $this->telephone; 
	}

	public function get_date_de_naissance(){
		return $this->date_naissance; 
	}

	public static function getLast(){
		return App::getDb()->query2("SELECT id, nom, prenom, bio, telephone, mail, adresse, entreprise, secteur_activite, date_naissance FROM `membres` WHERE type=0 ");	
	}

	public function getURL(){
		//var_dump($this->id); 
		return 'index.php?p=candidat&id=' . $this->id; 
	}


	public function getExtrait(){
		$html =  '<p>' .  substr($this->bio,0, 500) . '...</p>' ; 
		$html .= '<p><a href="' .$this->getURL() . '">Voir la suite</a></p>';   
		return $html; 
	} 


	public function verifier_data(){

		if($this->nom == ""){
			echo 'mauvais nom';
			return 1; 
		}

		if($this->prenom == ""){
			echo 'mauvais prenom';
			return 1; 
		} 

		if($this->motdepasse == ""){
			echo 'mauvais nom';
			return 1; 
		}
		elseif(strlen($this->motdepasse)<=4) {
			echo 'mauvais mdp';
			return 1;
		}

		if ($this->date_naissance == "") {
			$this->date_naissance = null; 
		}
		else{
			$test_date = explode('-', $this->date_naissance);
			if(count($test_date)!=3){
				echo "date";
				return 1; 
			}
			//var_dump(is_numeric($test_date)==FALSE);
			elseif(is_numeric($test_date[0])==FALSE or is_numeric($test_date[1])==FALSE or is_numeric($test_date[2])==FALSE){
				echo "date2";
				return 1; 
			}
			elseif(checkdate($test_date[1], $test_date[2], $test_date[0])!=TRUE){
				echo 'mauvais date';
				return 1; 
				//On ne vérifie pas les cas spéciaux 
			} 
		}
		

		if($this->telephone ==""){
			$this->telephone = null; 
		}
		elseif(!is_numeric($this->telephone)){
			echo 'mauvais tel';
			return 1; 
		} 

		if(strpos($this->email,'@') == FALSE ){
			echo 'mauvais email @';
			return 1; 
		} 
		elseif (strpos($this->email,'.') == FALSE ) {
			echo 'mauvais email .';
			return 1; 
		}


	}

	public function ajouter_perso_bdd(){

		$mybase = App::getDb(); 

		$mypdo = $mybase->getPDO();


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

		//var_dump($verification); 

		if($verification!=null){
			//var_dump($this);
			return 0;
		}
		else{
			//var_dump($this);
			return 1; 
		}
	}

	public function recuperer_donnee(){

		$mybase = App::getDb(); 
		$mypdo = $mybase->getPDO();

		$hash = sha1($this->motdepasse);
		$sql = 'SELECT * FROM membres WHERE motdepasse=:mdp and mail= :email'; 


		$mypdostatement = $mypdo->prepare($sql);
		$mypdostatement->execute(array('mdp' => $hash, 'email'=>$this->email));
		$verification = $mypdostatement->fetch();


		$this->nom = $verification['nom']; 
		$this->prenom = $verification['prenom']; 
		$this->adresse = $verification['adresse']; 
		$this->date_naissance = $verification['date_naissance']; 
		$this->telephone = $verification['telephone']; 

		$this->type = $verification['type']; 

		if($this->type == 1){
			$this->entreprise = $verification['entreprise']; 
			$this->secteur_activite = $verification['secteur_activite'];
		}

		$this->id = $verification['id'];
		$this->bio = $verification['bio']; 
		$this->date_inscription = $verification['date_inscription']; 

	}




	public function session(){
 
		$_SESSION['email'] = $this->email;
		$_SESSION['nom'] = $this->nom; 
		$_SESSION['prenom'] = $this->prenom; 
		$_SESSION['adresse'] = $this->adresse; 
		$_SESSION['date_naissance'] = $this->date_naissance;
		$_SESSION['telephone'] = $this->telephone; 

		$_SESSION['type'] =  $this->type;

		if($this->type == 1){
			$_SESSION['entreprise'] = $this->entreprise; 
			$_SESSION['secteur_activite'] = $this->secteur_activite; 
		}

		$_SESSION['id'] = $this->id; 
		$_SESSION['bio'] = $this->bio; 
		$_SESSION['date_inscription'] = $this->date_inscription; 
		

	}



}