<?php 
if(isset($_POST['identififiant']) and isset($_POST['password'])) {
	$initie = new App\Table\Personnage(null, null,$_POST["password"],null,null, $_POST['identififiant'],null);
	$test = $initie->connexion(); 
	if($test==1){
		unset($initie); 
	}
	else{
		$initie->recuperer_donnee(); 
		$initie->session(); 

	}
}

var_dump($_SESSION); 
?>


<html>
	<head>
		<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="description">
			<meta name="author">
			<link rel="icon" href="../../favicon.ico">
		
			<link rel="stylesheet" href="./css/projet_emploi.css" />

			<meta name="viewport" contents="width=device-width, initial-scale=1">

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>

			<title><?= App\App::getTitle(); ?> </title>

			<script src = "js\script_recherche.js"  type="text/javascript"></script>
			<!--<script src = "js\connect_as.js"  type="text/javascript"></script> -->
			<script src = "js\show_full_offer.js"  type="text/javascript"></script>
			<!--<script src = "js\sign_in.js"  type="text/javascript"></script> -->
			<script src = "js\script_tabulation.js"  type="text/javascript"></script>
	</head>
	<body>

		<!--Début du menu-->
		<nav class="navbar navbar-inverse  navbar-fixed-top"  role="navigation" >
															 
								 <div class="container">
						<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
								</button>
						 
						</div>
						<div id="navbar" class="navbar-collapse collapse">
								<ul class="nav navbar-nav">
										<li><a href= "index.php"></span> Accueil</a></li>
										<li><a href= "index.php?p=liste_offre">Offres</a></li>
										<li><a href= "index.php?p=profil">Profils</a></li>
		
										<li><a href=#><span class="fa fa-envelope-o"></span> Contact</a></li>
										
										
		
								</ul>
							 <ul class="nav navbar-nav navbar-right">
									 <li><a data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> login</a></li>
								</ul>
																							
			 
						</div>
				</div>
	 </nav>
		
		<div id="loginModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"> &times;</button>
				<h4>Login</h4>
			</div>
			<div class="modal-body">
				<form class="form-inline" method="POST" action="">
					<div class="row">

						<div class="col-xs-4">
							<input type="text" name ="identififiant" class="form-control" placeholder="Email" id="email" name="email">
						</div>
						<div class="col-xs-4">
							<input type="password" name ="password" class="form-control" placeholder="Password" id="password" name="password">
						</div>
						<div class="col-xs-4">
							<button type="submit" class="btn btn-info modal_sign_in" id="sign_in_btn">Sign in</button>
						</div>

					</div>
				</form>
				<div class="row padding-top-bottom">
					<div class="col-xs-12">
						<p class="invisible text-warning" id="warning_sign_in"><span class="glyphicon glyphicon-remove-circle"></span> Email ou mot de passe incorrect</p>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<a class="btn btn-default" href="index.php?p=inscription" role="button">S'inscrire</a>
			</div>
		</div>
	</div>
</div>



		<!-- FIN DU MENU : 

		--> 

		<div class ="starter-template" style="padding-top: 100px; padding-right: 50px; padding-left: 50px; padding-bottom: 300px;  ">
			<?= $content; ?> 
		</div>

<!--  <footer class="footer-distributed">
			<div class="footer-right">
				<a href="#"><img src="../images/icon_fb.png" alt="icone facebook" /></a>
				<a href="#"><img src="../images/icon_twitter.png" alt="icone twitter" /></a>
				<a href="#"><img src="../images/icon_linkedin.png" alt="icone linkedin" /></a>
			</div>
			<div class="footer-left">
				<p class="footer-links">
					<a href="../index.html">Accueil</a>
					.
					<a href="#">Contact</a>
				</p>
				<p>Projet Emploi &copy; 2017</p>
			</div>
		</footer>
-->


	</body>

</html>