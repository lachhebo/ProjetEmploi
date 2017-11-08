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
} elseif ($p === 'recherche' ) {
	$_GET['q'] = $q;  
	require '../pages/recherche.php'; 
} elseif ($p === 'liste_offre') {
	require '../pages/liste_offre.php';
} elseif ($p === 'profil'){
	require '../pages/profil.php';
} elseif ($p === 'inscription') {
	require '../pages/inscription.php'; 
}



$content = ob_get_clean(); 

require '../pages/templates/default.php'; 