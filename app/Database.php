<?php


namespace App;

use \PDO;

class Database{


	private $db_name;
	private $db_user;
	private $db_pass;
	private $db_host;
	private $pdo;

	public function __construct($db_name, $db_user = 'root', $db_pass= '1234azer', $db_host = 'localhost' ){
		$this->db_name = $db_name;
		$this->db_pass = $db_pass;
		$this->db_user = $db_user;
		$this->db_host = $db_host;
	}

	public function getPDO(){
		if ($this->pdo === null) {
			$pdo = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8', 'root', '1234azer');
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->pdo = $pdo;
		}

		return $this->pdo;
	}

	public function query($statement, $class_name){
		$req = $this->getPDO()->query($statement);
		$datas = $req->fetchAll(PDO::FETCH_CLASS, $class_name);

		return $datas;
	}

	public function update($statement, $attributes){
		$req = $this->getPDO()->prepare($statement);
		$req->execute($attributes);	

	}

	public function modification_personnage(){
		if(isset($_POST['modification_name']) and $_POST['modification_name']!= null){
		  $this->update('UPDATE membres SET nom = :name WHERE id = :id ', ['name'=>$_POST['modification_name'], 'id'=> $_SESSION['id']]);
		  $_SESSION['nom'] = $_POST['modification_name']; 
		}

		if(isset($_POST['modification_firstname']) and $_POST['modification_firstname']!= null){
		  $this->update('UPDATE membres SET prenom = :firstname WHERE id = :id ', ['firstname'=>$_POST['modification_firstname'], 'id'=> $_SESSION['id']]);
		  $_SESSION['prenom'] = $_POST['modification_firstname']; 
		}

		if(isset($_POST['modification_mdp']) and $_POST['modification_mdp']!= null){
		  $this->update('UPDATE membres SET motdepasse = :mdp WHERE id = :id ', ['mdp'=>sha1($_POST['modification_mdp']), 'id'=> $_SESSION['id']]);
		}

		if(isset($_POST['modification_date']) and $_POST['modification_date']!= null){
		  $this->update('UPDATE membres SET date_naissance = :date_ WHERE id = :id ', ['date_'=>$_POST['modification_date'], 'id'=> $_SESSION['id']]);
		  $_SESSION['date_naissance'] = $_POST['modification_date']; 
		}
		
		if(isset($_POST['modification_tel']) and $_POST['modification_tel']!= null){
		  $this->update('UPDATE membres SET telephone = :tel WHERE id = :id ', ['tel'=>$_POST['modification_tel'], 'id'=> $_SESSION['id']]);
		  $_SESSION['telephone'] = $_POST['modification_tel']; 
		}

		if(isset($_POST['modification_email']) and $_POST['modification_email']!= null){
		  $this->update('UPDATE membres SET mail = :mail WHERE id = :id ', ['mail'=>$_POST['modification_email'], 'id'=> $_SESSION['id']]);
		  $_SESSION['email'] = $_POST['modification_email']; 
		}

		if(isset($_POST['modification_adres']) and $_POST['modification_adres']!= null){
		  $this->update('UPDATE membres SET adresse = :adresse WHERE id = :id ', ['adresse'=>$_POST['modification_adres'], 'id'=> $_SESSION['id']]);
		  $_SESSION['adresse'] = $_POST['modification_adres']; 
		}

		if(isset($_POST['modification_ent']) and $_POST['modification_ent']!= null){
		  $this->update('UPDATE membres SET entreprise= :entreprise WHERE id = :id ', ['adresse'=>$_POST['modification_ent'], 'id'=> $_SESSION['id']]);
		  $_SESSION['entreprise'] = $_POST['modification_ent']; 
		}
		if(isset($_POST['modification_sa']) and $_POST['modification_sa']!= null){
		  $this->update('UPDATE membres SET secteur_activite = :secteur_activite WHERE id = :id ', ['secteur_activite'=>$_POST['modification_sa'], 'id'=> $_SESSION['id']]);
		  $_SESSION['secteur'] = $_POST['modification_sa']; 
		}
		if(isset($_POST['modification_bio']) and $_POST['modification_bio']!= null){
		  $this->update('UPDATE membres SET bio = :bio WHERE id = :id ', ['bio'=>$_POST['modification_bio'], 'id'=> $_SESSION['id']]);
		  $_SESSION['bio'] = $_POST['modification_bio']; 
		}
















	}

	public function query2($statement, $one= false){
		$req = $this->getPDO()->query($statement);
		$datas = $req->fetchAll();
		//var_dump($datas); 
		if($one){

		}
		else{
			$resultat = array();
			foreach ($datas as $post): 
		
			$mon_perso = new \App\Table\Personnage($post['nom'],$post['prenom'], null, $post['date_naissance'],$post['telephone'],$post['mail'], $post['adresse'], $post['entreprise'], $post['secteur_activite'],$post['id'],$post['bio']);  

			$resultat[$post['id']] = $mon_perso;
			endforeach;
		return $resultat;

		}

	}



	public function prepare($statement, $attributes, $class_name, $one= false){
		$req = $this->getPDO()->prepare($statement);
		$req->execute($attributes);
		$req->setFetchMode(PDO::FETCH_CLASS, $class_name);
		if($one){
			$datas = $req->fetch();
		}
		else{
			$datas = $req->fetchAll();
		}
		return $datas;

	}


	public function prepare2($statement, $attributes, $one = true){
		$req = $this->getPDO()->prepare($statement);
		$req->execute($attributes);
		if($one){
			$datas = $req->fetch();
			//var_dump($datas); 
			$mon_perso = new \App\Table\Personnage($datas['nom'],$datas['prenom'], null, $datas['date_naissance'],$datas['telephone'],$datas['mail'], $datas['adresse'], $datas['entreprise'], $datas['secteur_activite'],$datas['id'],$datas['bio']); 
			return $mon_perso; 
			//var_dump($mon_perso); 
		}
		else{
			$datas = $req->fetchAll();
			$resultat = array();
			//var_dump($datas); 
			foreach ($datas as $key ):
				$mon_perso = new \App\Table\Personnage($key['nom'],$key['prenom'], null, $key['date_naissance'],$key['telephone'],$key['mail'], $key['adresse'], $key['entreprise'], $key['secteur_activite'],$key['id'],$key['bio']);  
				$resultat[$key['id']] = $mon_perso;
				//var_dump($mon_perso); 
			endforeach;

			return $resultat;
		}
	}

}
