<?php 

require '../app/Autoloader.php'; 
App\Autoloader::register(); 


session_start(); 



if(isset($_GET['p'])){
	$p = $_GET['p']; 
 } else {
 	$p = 'home'; 
 }

if(isset($_GET['q'])){
	$q = $_GET['q']; 
	//var_dump($q); 
 }



ob_start(); 

if($p === 'home'){
	require '../pages/home.php'; 
} elseif ($p ==='offre'){
	require '../pages/offre.php' ; 
} elseif ($p === 'candidat') {
	require '../pages/candidat.php'; 
} elseif ($p === 'recherche' ) {
	//echo 'le test marche';
	$_GET['q'] = $q;  
	require '../pages/recherche.php'; 
} elseif ($p === 'liste_offre') {
	require '../pages/liste_offre.php';
} elseif ($p === 'profil'){
	//echo 'le test marche'; 
	//à sécuriser 
	require '../pages/profil.php';
} elseif ($p === 'inscription') {
	require '../pages/inscription.php'; 
} elseif ($p === 'deconnexion') { 
	require '../pages/deconnexion.php';
} elseif ($p === 'liste_candidat') {
	require '../pages/liste_candidat.php'; 
} elseif ($p === 'creation_offre') {
	//à securiser 
	require '../pages/creation_offre.php'; 
} elseif ($p === 'recherche_candidat') {
	$_GET['q'] = $q; 
	require '../pages/recherche_candidat.php';
} elseif ($p === 'messagerie') {
	require '../pages/messagerie.php'; 
}




$content = ob_get_clean(); 

require '../pages/templates/default.php'; 