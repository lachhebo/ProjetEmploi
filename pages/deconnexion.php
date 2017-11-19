<?php 
/*
Ce fichier est appelé lorsque l'utilisateur choisit de se déconnecter
*/
//On détruit sa session
session_destroy(); 
//Et on le redirige vers la page d'accueil
header("Location:../public/index.php");
?>