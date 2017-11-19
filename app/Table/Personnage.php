<?php

/*
Fichier correspondant à la définition d'un objet Personnage.
Ce fichier (et les autres fichiers du répertoire) permettent d'interagir plus facilement avec la base de données
*/

//Espace de nom du fichier
namespace App\Table;

//On utilise le fichier contenant les données principales du site
use App\App;

//Classe Personnage
class Personnage{

	//Attributs de la classe Personnage
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

	//Constructeur de la classe Personnage
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

		//Si pas de secteur : RH
		if ($secteur !=null) {
			$this->type = 1;
		}
		//Sinon : candidat
		else{
			$this->type = 0;
		}
	}

	//Fonction permettant aux RH de blacklister des utilisateurs
	public function blacklister($rh){
		//On récupère la bdd
		$mybase = App::getDb();
		$mypdo = $mybase->getPDO();

		//On définit la requête
		$sql =  'SELECT * FROM membres WHERE mail = ?';

		//On exécute la requête SQL
		$mypdostatement = $mypdo->prepare($sql);
		$mypdostatement->execute(array($this->email));
		//On récupère le résultat
		$verification = $mypdostatement->fetch();

		//Si il y a un résultat, on peut blacklister
		if ($verification != null){

			$this->id = $verification['id'];
			
			//On déinit la requête d'insertion dans la table blocage
			$sql = "INSERT INTO blocage (id_rh, id_membre) VALUES( :rh , :membre)";

			//On exécute la requête
			$mypdostatement = $mypdo->prepare($sql);


			$mypdostatement->execute(array('membre' => $this->id, 'rh'=>$rh));


		}
	}

	//Fonction permettant d'effectuer des recherches parmi les utilisateurs
	public static function recherche($requete,$category='None',$niveau='None'){
		if( $category =='None' and $niveau=='None'){
			return App::getDb()->query2('
				SELECT *
				FROM membres
				WHERE nom LIKE "%'.$requete.'%" OR prenom LIKE "%'.$requete.'%"
				');
		}
	}

	//Getters de la classe Personnages
	public function get_nom(){return $this->nom;}
	public function get_prenom(){return $this->prenom;}
	public function get_full_nom(){return "$this->nom "."$this->prenom";}
	public function get_bio(){return $this->bio;}
	public function get_mail(){return $this->email;}
	public function get_adresse(){return $this->adresse;}
	public function get_telephone(){return $this->telephone;}
	public function get_date_de_naissance(){return $this->date_naissance;}

	//Fonction retournant les candidats de la bdd
	public static function getLast(){
		return App::getDb()->query2("SELECT id, nom, prenom, bio, telephone, mail, adresse, entreprise, secteur_activite, date_naissance FROM `membres` WHERE type=0 ");
	}

	//Fonction retournant l'URL de la page affichant les informations détaillés sur un utilisateur
	public function getURL(){
		//var_dump($this->id);
		return 'index.php?p=candidat&id=' . $this->id;
	}

	//Retourne un extrait de la biographie d'un candidat
	public function getExtrait(){
		$html =  '<p>' .  substr($this->bio,0, 500) . '...</p>' ;
		$html .= '<p><a href="' .$this->getURL() . '">Voir la suite</a></p>';
		return $html;
	}

	//Fonction vérifiant les données renseignées par l'utilisateur lors de l'inscription ou de la modification du profil
	public function verifier_data(){
		//Vérification du nom
		if($this->nom == ""){
			echo 'mauvais nom';
			return 1;
		}
		//Vérification du prénom
		if($this->prenom == ""){
			echo 'mauvais prenom';
			return 1;
		}
		//Vérification du mdp
		if($this->motdepasse == ""){
			echo 'mauvais nom';
			return 1;
		}
		//Vérification du mdp bis
		elseif(strlen($this->motdepasse)<=4) {
			echo 'mauvais mdp';
			return 1;
		}
		//Vérification de la date de naissance
		if ($this->date_naissance == "") {
			$this->date_naissance = null;
		}
		//Vérification dde la date de naissance bis
		else{
			$test_date = explode('-', $this->date_naissance);
			if(count($test_date)!=3){
				echo "date";
				return 1;
			}
			//var_dump(is_numeric($test_date)==FALSE);
			//Vérifier qu'aucun caractère auter qu'un  chiffre n'a été renseigné
			elseif(is_numeric($test_date[0])==FALSE or is_numeric($test_date[1])==FALSE or is_numeric($test_date[2])==FALSE){
				echo "date2";
				return 1;
			}
			//Vérifier que la date est cohérente
			elseif(checkdate($test_date[1], $test_date[2], $test_date[0])!=TRUE){
				echo 'mauvais date';
				return 1;
				//On ne vérifie pas les cas spéciaux
			}
		}

		//Vérification du téléphone
		if($this->telephone ==""){
			$this->telephone = null;
		}
		//Vérification du téléphone bis
		elseif(!is_numeric($this->telephone)){
			echo 'mauvais tel';
			return 1;
		}

		//Vérification du mail
		if(strpos($this->email,'@') == FALSE ){
			echo 'mauvais email @';
			return 1;
		}
		//Vérification du mail bis
		elseif (strpos($this->email,'.') == FALSE ) {
			echo 'mauvais email .';
			return 1;
		}


	}

	//Fonction ajoutant une Personnage à la bdd
	public function ajouter_perso_bdd(){

		//On récupère la bdd
		$mybase = App::getDb();
		$mypdo = $mybase->getPDO();

		//On définit la requête
		$sql =  'SELECT * FROM membres WHERE mail = ?';

		//On exécute la requête
		$mypdostatement = $mypdo->prepare($sql);
		$mypdostatement->execute(array($this->email));
		$verification = $mypdostatement->fetch();
		//var_dump($verification);

		//Si aucun utilisateur de la bdd n'a la meme adresse mail que le Personnage à ajouter, on peut l'ajouter
		if ($verification == null){
			//On définit la requête
			$sql = "INSERT INTO membres (nom, prenom, motdepasse, date_naissance, telephone, mail, adresse, entreprise, secteur_activite, type ) VALUES( :name , :prenom , :motdepasse, :date_naissance, :telephone, :mail, :adresse, :entreprise, :secteur_activite, :type)";
			//On exécute la requête
			$mypdostatement = $mypdo->prepare($sql);
			$hash = sha1($this->motdepasse);
			$mypdostatement->execute(array('name' => $this->nom, 'prenom'=>$this->prenom, 'motdepasse'=>$hash, 'date_naissance'=>$this->date_naissance, 'telephone'=>$this->telephone, 'mail'=>$this->email, 'adresse'=>$this->adresse, 'entreprise'=>$this->entreprise, 'secteur_activite'=>$this->secteur_activite, 'type'=>$this->type));
			return 0;
		//Sinon on renvoie une erreur
		}else{
			return 1;
		}
	}
	//Fonction permettant de connecter un visiteur
	public function connexion(){

		//On récupère la bdd
		$mybase = App::getDb();
		$mypdo = $mybase->getPDO();
		//On définit la requête
		$hash = sha1($this->motdepasse);
		$sql = 'SELECT * FROM membres WHERE motdepasse=:mdp and mail= :email';

		//On exécute la requête
		$mypdostatement = $mypdo->prepare($sql);
		$mypdostatement->execute(array('mdp' => $hash, 'email'=>$this->email));
		$verification = $mypdostatement->fetch();

		//Si l'utilisateur existe dans la bdd
		if($verification!=null){
			//var_dump($this);
			return 0;
		//Sinon on renvoie une erreur
		}else{
			//var_dump($this);
			return 1;
		}
	}

	//Fonction permettant de récupérer les données d'un utilisateur
	public function recuperer_donnee(){

		//On récupère la bdd
		$mybase = App::getDb();
		$mypdo = $mybase->getPDO();

		//On définit la requête
		$hash = sha1($this->motdepasse);
		$sql = 'SELECT * FROM membres WHERE motdepasse=:mdp and mail= :email';

		//On exécute la requête
		$mypdostatement = $mypdo->prepare($sql);
		$mypdostatement->execute(array('mdp' => $hash, 'email'=>$this->email));
		$verification = $mypdostatement->fetch();

		//On peut finalement récupérer les données de l'utilisateur
		$this->nom = $verification['nom'];
		$this->prenom = $verification['prenom'];
		$this->adresse = $verification['adresse'];
		$this->date_naissance = $verification['date_naissance'];
		$this->telephone = $verification['telephone'];
		//On vérifie son type
		$this->type = $verification['type'];
		//Si c'est un RH, il a en plus une entreprise et un secteur d'activité
		if($this->type == 1){
			$this->entreprise = $verification['entreprise'];
			$this->secteur_activite = $verification['secteur_activite'];
		}

		$this->id = $verification['id'];
		$this->bio = $verification['bio'];
		$this->date_inscription = $verification['date_inscription'];

	}

	//Fonction fournissant les informations de l'utilisateur à la session (pour qu'on puisse les utiliser ailleurs)
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
