<?php
/*
Ce fichier est appelé lorsque le rh engague un candidat :
*/




$mybase = App\App::getDb();
$mypdo = $mybase->getPDO();



$id_candidat = $_GET['q'];
$id_offre = $_GET['offre'];

$sql1 = "UPDATE offres SET pourvu=1 WHERE id= :offre ";
$sql2 = "UPDATE postule SET statut=1 WHERE id_membre =:membre AND id_offre = :offre ";
$sql3 = "UPDATE postule SET statut=-1 WHERE  id_offre = :offre AND id_membre !=:membre";


//On définit la requête
$mypdostatement1 = $mypdo->prepare($sql1);
//On finit par exécuter la requête
$mypdostatement1->execute(array(':offre' => $id_offre));


$mypdostatement2 = $mypdo->prepare($sql2);
//On finit par exécuter la requête
$mypdostatement2->execute(array(':offre' => $id_offre, 'membre' => $id_candidat));



$mypdostatement3 = $mypdo->prepare($sql3);
//On finit par exécuter la requête
$mypdostatement3->execute(array(':offre' => $id_offre, 'membre' => $id_candidat));





header("Location:../public/index.php?p=profil");
?>
