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
 }



ob_start(); 

if($p === 'home'){
	require '../pages/home.php'; 
} elseif ($p ==='offre'){
	require '../pages/offre.php' ; 
} elseif ($p === 'candidat') {
	if($_SESSION['type']==1){
		require '../pages/candidat.php'; 
	} else{
		require '../pages/home.php'; 
	}
} elseif ($p === 'recherche' ) {
	$_GET['q'] = $q;  
	require '../pages/recherche.php'; 
} elseif ($p === 'liste_offre') {
	require '../pages/liste_offre.php';
} elseif ($p === 'profil'){
	if(isset($_SESSION['id'])){
		require '../pages/profil.php';
	}
	else{
		require '../pages/home.php'; 
	}
} elseif ($p === 'inscription') {
	if(!isset($_SESSION['id'])){
		require '../pages/inscription.php';
	} else{
		require '../pages/home.php'; 
	}
} elseif ($p === 'deconnexion') { 
	if(isset($_SESSION['id'])){
		require '../pages/deconnexion.php';
	}else{
		require '../pages/home.php'; 
	}
} elseif ($p === 'liste_candidat') {
	if($_SESSION['type']==1){
		require '../pages/liste_candidat.php'; 
	}
	else{
		require '../pages/home.php'; 
	}
} elseif ($p === 'creation_offre') {
	if($_SESSION['type']==1){
		require '../pages/creation_offre.php'; 
	}
	else{
		require '../pages/home.php'; 
	}
} elseif ($p === 'recherche_candidat') {
	if($_SESSION['type']==1){
		$_GET['q'] = $q; 
		require '../pages/recherche_candidat.php';
	}else{
		require '../pages/home.php'; 
	}
} elseif ($p === 'messagerie') {
	if(isset($_SESSION['id'])){
		require '../pages/messagerie.php'; 
	} else{
		require '../pages/home.php'; 	
	}
}




$content = ob_get_clean(); 

require '../pages/templates/default.php'; 