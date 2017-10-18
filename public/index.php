<?php 


require '../app/Autoloader.php'; 

App\Autoloader::register(); 


//Initialisations des objets : 

$db = new App\Database('espace_membres'); 

$data =$db->query('SELECT * from membres');  




if(isset($_GET['p'])){
	$p = $_GET['p']; 
 } else {
 	$p = 'home'; 
 }


ob_start(); 

if($p === 'home'){
	require '../pages/home.php'; 
} else if ($p ==='creation'){
	require '../pages/offre_creation.php' ;  

}


$content = ob_get_clean(); 

require '../pages/templates/default.php'; 