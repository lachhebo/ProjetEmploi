<?php  
$bdd = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8','root','');

?>
<html>
	<head>
		<title>Projet Emploi</title>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
 	   	<meta name="description">
  		<meta name="author">
		
        <link rel="stylesheet" href="../css/projet_emploi.css" />

        <meta name="viewport" contents="width=device-width, initial-scale=1">

  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
  		

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
                    <li class="active"><a   href="index.php"></span> Accueil</a></li>
                    <li><a href="offres_emploi.php">Offres</a></li>
                    <li><a href="Profils.php">Profils</a></li>
                    <li><a href="#"><span class="fa fa-envelope-o"></span> Contact</a></li>                   
    
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
                   <form class="form-inline">
                   <div class="form-group">
                       <label class="sr-only" for="email">Email</label><input type="text" class="form-control input-sm" placeholder="Email" id="email" name="email">
                       </div>
                        <div class="form-group">  
                          
                           <label class="sr-only" for="password">Password</label>
                                     <input type="password" class="form-control input-sm" placeholder="Password" id="password" name="password"></div>
                       <div class="checkbox">
                       <label>
                       <input type="checkbox"> Remember me
                       </label>
                         </div>
                        
                       <button type="submit" class="btn btn-info btn-xs">Sign in</button>
                       <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Cancel</button> 
                    
                   
                     
               
                    </form>
            </div>
            <div class="modal-footer">
              <a class="btn btn-default" href="#" role="button">Inscription Candidat</a>
            <a class="btn btn-default" href="#" role="button">Inscription RH</a>
            </div>

        </div>
        </div>
    </div>

    <div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12">
						<h3 class="text-center"> <b>Formulaire d'inscription Professionnelle </b></h3>
					</div>
					<div class="col-xs-5">
						<form class="form" method="POST" action="" >
							<div class="form-group"> 
								<label for="name">Nom :</label>
								<input type="text" id="name" class="form-control" placeholder="Nom" name="name">
							</div>
							<div class="form-group"> 
								<label for="firstname">Prénom: </label>
								<input type="text" id="fistname" class="form-control" name="firstname" placeholder="Nom">
							</div>
							<div class="form-group">
								<label for="mdp">Mot de passe: </label>
								<input type="password" id="mdp" class="form-control" name="mdp" placeholder="Nom">
							</div>
							<div class="form-group">
								<label for="date">Date de naissance: </label>
								<input type="date" name="date" class="form-group" id="date" placeholder="Nom">
							</div>
						<!--	<div class="form-group">
								<label for="exp">Tes Expériences: </label>
								<textarea name="exp" id="exp" class="form-control"></textarea>
							</div> -->
							<div class="form-group">
								<label for="tel">Téléphone: </label>
								<input type="tel" id="tel" class="form-control" name="tel" placeholder="Nom">
							</div>
							<div class="form-group">
								<label for="email">Email: </label>
								<input type="text" id="email" class="form-control" name="email" placeholder="Nom">
							</div>
							<div class="form-group">
								<label for="adres">Adresse: </label>
								<input type="text" id="adres" class="form-control" name="adres" placeholder="Nom">
							</div>
							<div align="center">
							<input type="submit" value="Je m'inscris"></input>
							</div>
						</form>
					</div>
					<div class="col-xs-7 form">
						<h3 >Les avantages de l'inscription : </h3>
						<ul>
							<li class="liste_inscription">Des milliers d'offres d'emploi près de chez vous </li>
							<li class="liste_inscription">Une équipe à votre écoute</li>
							<li class="liste_inscription">Mettez en avant vos expériences </li>
						</ul>
					</div>

				</div>


			</div>
		</div>


			<footer class="footer-distributed">
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


	</body>

</html>