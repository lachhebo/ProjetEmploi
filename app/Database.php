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
			//var_dump($this->db_host); 
			//var_dump($this->db_name);
			//var_dump($this->db_user);
			//var_dump($this->db_pass);

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
