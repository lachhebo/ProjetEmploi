<?php
/*
Ce fichier est appelé lorsque le rh engague un candidat :
*/




$mybase = App\App::getDb();
$mypdo = $mybase->getPDO();



$id_candidat = $_GET['q'];
$id_offre = $_GET['offre'];

$sql2 = "UPDATE postule SET statut=-1 WHERE id_membre =:membre AND id_offre = :offre ";


//On définit la requête
$mypdostatement2 = $mypdo->prepare($sql2);
//On finit par exécuter la requête
$mypdostatement2->execute(array(':offre' => $id_offre, 'membre' => $id_candidat));



header("Location:../public/index.php?p=profil");
?>
