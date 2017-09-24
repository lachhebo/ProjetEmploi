<!DOCTYPE html>
<html>
	<head>
		<title>Projet Emploi</title>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
 	   	<meta name="description">
  		<meta name="author">
    	<link rel="icon" href="../../favicon.ico">
		
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
                    <li><a href="html/offres_emploi.php">Offres</a></li>
                    <li><a href="#">Profils</a></li>
                   <!-- <li><a href="aboutus.html"> 
                        </span> About</a></li>
                    <li class="dropdown">
                        <a href="index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
                      </span> Menu <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="contactus.html#">Main Courses</a></li>
                            <li><a href="contactus.html#">Bootstrap</a></li>
                            <li><a href="contactus.html#">Asp</a></li>
                            <li><a href="contactus.html#">SQl</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">PHP</li>
                            <li><a href="contactus.html#">MySQl</a></li>
                           
                        </ul>
                    </li>
                  -->
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
<!--
            <div class="modal-footer">
                <div style="padding:10px"></div>
            </div>
-->
        </div>
        </div>
    </div>
		
		<div class="container-fluid">
			<div class="panel-group row">
				<div class="panel-left col-xs-3">
					<div class="panel-container">
					
						<div class="div-header">
							<p><span class="glyphicon glyphicon-search"></span> Offres publiées :</p>
						</div>
					
						<div class="panel-offre-resume">
						
							<div class="offre-candidat-postule">
								<div class="independant-element">
									<div class="nom-poste-resume">
										<p class="text">Technicien de surface</p>
										<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-pencil"></span></button>
									</div> 
									
									<div class="date-publication-offre-resume">
										<p class="date_offre">Publiée il y a 3 mois</p>
										<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-remove"></span></button>
									</div>
								</div>
								<div class="independant-element postule-candidat">
									<p class="text">Gérard Bouvier </p>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-ok"></span></button>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-remove"></span></button>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-user"></span></button>
								</div>
								<div class="independant-element postule-candidat">
									<p class="text">Alain Terrieur </p>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-ok"></span></button>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-remove"></span></button>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-user"></span></button>
								</div>
								<div class="independant-element postule-candidat">
									<p class="text">Mélanie Zetaufray </p>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-ok"></span></button>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-remove"></span></button>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-user"></span></button>
								</div>
							</div>
							
							<div class="offre-candidat-postule">
								<div class="independant-element">
									<div class="nom-poste-resume">
										<p class="text">Technicien de surface</p>
										<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-pencil"></span></button>
									</div> 
									
									<div class="date-publication-offre-resume">
										<p class="date_offre">Publiée il y a 3 mois</p>
										<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-remove"></span></button>
									</div>
								</div>
								<div class="independant-element postule-candidat">
									<p class="text">Jean Neymar </p>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-ok"></span></button>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-remove"></span></button>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-user"></span></button>
								</div>
								<div class="independant-element postule-candidat">
									<p class="text">Sam Megave </p>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-ok"></span></button>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-remove"></span></button>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-user"></span></button>
								</div>
								<div class="independant-element postule-candidat">
									<p class="text">Emile Bavtout</p>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-ok"></span></button>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-remove"></span></button>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-user"></span></button>
								</div>
							</div>
							
							<div class="offre-candidat-postule">
								<div class="independant-element">
									<div class="nom-poste-resume">
										<p class="text">Technicien de surface</p>
										<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-pencil"></span></button>
									</div> 
									
									<div class="date-publication-offre-resume">
										<p class="date_offre">Publiée il y a 3 mois</p>
										<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-remove"></span></button>
									</div>
								</div>
								<div class="independant-element postule-candidat">
									<p class="text">François Damien </p>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-ok"></span></button>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-remove"></span></button>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-user"></span></button>
								</div>
								<div class="independant-element postule-candidat">
									<p class="text">Antoine Daniel </p>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-ok"></span></button>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-remove"></span></button>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-user"></span></button>
								</div>
								<div class="independant-element postule-candidat">
									<p class="text">Clyde Vanilla</p>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-ok"></span></button>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-remove"></span></button>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-user"></span></button>
								</div>
							</div>
							
							<div class="offre-candidat-postule">
								<div class="independant-element">
									<div class="nom-poste-resume">
										<p class="text">Technicien de surface</p>
										<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-pencil"></span></button>
									</div> 
									
									<div class="date-publication-offre-resume">
										<p class="date_offre">Publiée il y a 3 mois</p>
										<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-remove"></span></button>
									</div>
								</div>
								<div class="independant-element postule-candidat">
									<p class="text">Jean Bond-Bayonne </p>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-ok"></span></button>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-remove"></span></button>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-user"></span></button>
								</div>
								<div class="independant-element postule-candidat">
									<p class="text">Isabelle Comm</p>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-ok"></span></button>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-remove"></span></button>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-user"></span></button>
								</div>
								<div class="independant-element postule-candidat">
									<p class="text">Patrick Harnaud</p>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-ok"></span></button>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-remove"></span></button>
									<button type="button" class="btn btn-default btn-glyphicon"> <span class="glyphicon glyphicon-user"></span></button>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="panel-center col-xs-9">
					<div class="panel-container">
						<p class="header-text">Créez une offre d'emploi : </p>
						
						<div>
							<form class="form" style="margin:5px">
								<div class="form-group"> 
									<label for="nom emploi">Intitulé du poste :</label>
									<input type="text" id="nom_emploi" class="form-control" placeholder="Ex : Ingénieur d'affaire R/F, ...">
								</div>
								
								<label for="skill">Type de contrat</label>
								<div class="checkbox">
									<label><input type="checkbox" value="">CDD</label>
									<label><input type="checkbox" value="">CDI</label>
									<label><input type="checkbox" value="">Stage</label>
									<label><input type="checkbox" value="">Contrat d'apprentissage</label>
								</div>
								
								<div class="form-group"> 
									<label for="nom emploi">Si CDD, stage ou contrat d'apprentissage, veuillez indiquer la durée du contrat (en mois):</label>
									<input type="number" id="duree-cdd" class="form-control">
								</div>
								
								<div class="form-group"> 
									<label for="firstname">Entreprise :</label>
									<input type="text" id="entreprise" class="form-control">
								</div>
								<div class="form-group">
									<label for="mdp">Lieu de travail</label>
									<input type="text" id="lieu_travail" class="form-control" placeholder="Ville">
								</div>
								<div class="form-group">
									<label for="mdp">Secteurs d'activité :</label>
									<select class="big-select" name="secteur_activite[]" size="5" multiple="multiple">
										<option>Agroalimentaire</option>
										<option>Banque / Assurance</option>
										<option>Bois / Papier / Carton / Imprimerie</option>
										<option>BTP / Matériaux de construction</option>
										<option>Chimie / Parachimie</option>
										<option>Commerce / Négoce / Distribution</option>
										<option>Edition / Communication / Multimédia</option>
										<option>Electronique / Electricité</option>
										<option>Etudes et conseils</option>
										<option>Industrie pharmaceutique</option>
										<option>Informatique / Télécoms</option>
										<option>Machines et équipements / Automobile</option>
										<option>Métallurgie / Travail du métal</option>
										<option>Plastique / Caoutchouc</option>
										<option>Services aux entreprises</option>
										<option>Textile / Habillement / Chaussure</option>
										<option>Transports / Logistique</option>
									</select>
								</div>
								
								<label for="skill">Niveau d'étude exigé :</label>
								<div class="checkbox">
									<label><input type="checkbox" value="">Bac</label>
									<label><input type="checkbox" value="">Bac +2 / +3</label>
								</div>
								<div class="checkbox">
									<label><input type="checkbox" value="">Bac +5 et supérieur</label>
								</div>
								
								<div class="form-group">
									<label for="skill">Compétences requises :</label>
									<input type="skill" id="skill" class="form-control" placeholder="Séparez les compétences par des points-virgules">
								</div>
								
								<div class="form-group">
									<label for="salaire">Rémunération (brut par an) :</label>
									<input type="number" id="salaire" class="form-control">
								</div>
								
								<div class="form-group">
									<label for="text">Description du poste</label>
									<textarea class="form-control" rows="10" id="desc_poste"></textarea>
								</div>
								
								<BUTTON type="connexion" class="btn btn-default">Créer</BUTTON>
							</form>
						</div>	
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

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

	</body>

</html>