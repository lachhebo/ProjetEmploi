<?php

/*
Fichier correspondant à la définition d'un objet Experience professionnelle.
Ce fichier (et les autres fichiers du répertoire) permettent d'interagir plus facilement avec la base de données
*/

//Espace de nom du fichier
namespace App\Table;

//On utilise le fichier contenant les données principales du site
use App\App;

//Classe Experience
class Experience{
  //Fonction permettant d'ajouter une expérience à la bdd
  public static function ajouter($experience,$entreprise, $date_obtention, $duree){
    //On récupère la bdd
    $mybase = App::getDb();
    $mypdo = $mybase->getPDO();
    //On récupère l'utilisateur possédant le diplome à ajouter
    $origine = $_SESSION['id'];

    //On définit la requête
    $sql = 'INSERT INTO experience (poste, date_obtention, entreprise, duree, id_membre) VALUES (:name, :date_obtention, :ent, :duree, :employe)';
    //On effectue la mise à jour de la bdd
    $mypdostatement = $mypdo->prepare($sql);
    $mypdostatement->execute(array('name' => $experience,'date_obtention' =>$date_obtention, 'ent'=>$entreprise, 'duree' =>$duree, 'employe' =>$_SESSION['id']));

    header("Refresh:0");

  }
}
?>
