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
                    <li><a href="../index.php"></span> Accueil</a></li>
                    <li class="active"><a href="#">Offres</a></li>
                    <li><a href="Profils.php">Profils</a></li>
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

		<!--Fin du menu-->
		
		<div class="container-fluid">
			<div class="panel-group row">
				<div class="panel-left col-xs-3">
					<div class="panel-container">
					
						<div class="div-header">
							<p><span class="glyphicon glyphicon-search"></span> Effectuez une recherche d'offres :</p>
						</div>
					
						<form class="" role="search">
							<div class="form-group">
							
								<p>Chercher dans :</p>
								<select class="form-control" id="emploi_choix_search">
									<option>L'intitulé de l'offre</option>
									<option>Le descriptif de l'offre</option>
									<option>Les qualifications de l'offre</option>
								</select>
								<p>les mots :</p>
								<input type="text" class="form-control" id="input_search_emploi" placeholder="Ex : Ingénieur, réseaux, ...">
								
								<div class="divider"></div>
								
								<p>Niveau d'étude :</p>
								<div class="checkbox">
									<label><input type="checkbox" value="">Bac</label>
								</div>
								<div class="checkbox">
									<label><input type="checkbox" value="">Bac +2 / +3</label>
								</div>
								<div class="checkbox">
									<label><input type="checkbox" value="">Bac +5 et supérieur</label>
								</div>
								<div class="checkbox">
									<label><input type="checkbox" value="">Autre</label>
								</div>
								
								<div class="divider"></div>
								
								<p>Domaines d'activité :</p>
								
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
								
								
								<button type="button" class="btn btn-default btn-emploi-search"> <span class="glyphicon glyphicon-search"></span> Rechercher</button>
								
							</div>
						</form>
					</div>
				</div>
				
				<div class="panel-center col-xs-9">
					<div class="panel-container">
						<p class="header-text">Nos offres d'emploi :</p>
						<div class="panel-job-element">
							<div class="panel-job-element-left">
								<div class="intitule-poste">
									<p>Technicien de surface</p>
								</div>
								<div class="coordonnees-poste">
									<p class="text-left">Natixis</p>
									<p class="text-right">Amiens</p>
								</div>
								<div class="competences-exigees">
									<p>Compétences exigées :<br />Rigueur, Ponctualité, Bonne conduite, Sociable</p>
								</div>
								<p class="descriptif-poste fade-text">Le technicien de surface contribue à ce que les normes d’hygiène et de propreté soient respectées dans les locaux de 
								production, sur les machines et dans les bureaux. Son rôle est primordial : il est le garant de la propreté des surfaces avec lesquelles les 
								différents produits seront en contact. C’est pourquoi il doit respecter rigoureusement le planning de nettoyage prévu, les protocoles et les 
								procédures de désinfection.</p>
							</div>
							<div class="panel-job-element-right">
								<button type="button" class="btn btn-default btn-circle"> <span class="glyphicon glyphicon-plus"></span></button>
							</div>
						</div>
						
						<div class="panel-job-element">
							<div class="panel-job-element-left">
								<div class="intitule-poste">
									<p>Technicien de surface</p>
								</div>
								<div class="coordonnees-poste">
									<p class="text-left">Natixis</p>
									<p class="text-right">Amiens</p>
								</div>
								<div class="competences-exigees">
									<p>Compétences exigées :<br />Rigueur, Ponctualité, Bonne conduite, Sociable</p>
								</div>
								<p class="descriptif-poste fade-text">Le technicien de surface contribue à ce que les normes d’hygiène et de propreté soient respectées dans les locaux de 
								production, sur les machines et dans les bureaux. Son rôle est primordial : il est le garant de la propreté des surfaces avec lesquelles les 
								différents produits seront en contact. C’est pourquoi il doit respecter rigoureusement le planning de nettoyage prévu, les protocoles et les 
								procédures de désinfection.</p>
							</div>
							<div class="panel-job-element-right">
								<button type="button" class="btn btn-default btn-circle"> <span class="glyphicon glyphicon-plus"></span></button>
							</div>
						</div>
						
						<div class="panel-job-element">
							<div class="panel-job-element-left">
								<div class="intitule-poste">
									<p>Technicien de surface</p>
								</div>
								<div class="coordonnees-poste">
									<p class="text-left">Natixis</p>
									<p class="text-right">Amiens</p>
								</div>
								<div class="competences-exigees">
									<p>Compétences exigées :<br />Rigueur, Ponctualité, Bonne conduite, Sociable</p>
								</div>
								<p class="descriptif-poste fade-text">Le technicien de surface contribue à ce que les normes d’hygiène et de propreté soient respectées dans les locaux de 
								production, sur les machines et dans les bureaux. Son rôle est primordial : il est le garant de la propreté des surfaces avec lesquelles les 
								différents produits seront en contact. C’est pourquoi il doit respecter rigoureusement le planning de nettoyage prévu, les protocoles et les 
								procédures de désinfection.</p>
							</div>
							<div class="panel-job-element-right">
								<button type="button" class="btn btn-default btn-circle"> <span class="glyphicon glyphicon-plus"></span></button>
							</div>
						</div>
						
						<div class="panel-job-element">
							<div class="panel-job-element-left">
								<div class="intitule-poste">
									<p>Technicien de surface</p>
								</div>
								<div class="coordonnees-poste">
									<p class="text-left">Natixis</p>
									<p class="text-right">Amiens</p>
								</div>
								<div class="competences-exigees">
									<p>Compétences exigées :<br />Rigueur, Ponctualité, Bonne conduite, Sociable</p>
								</div>
								<p class="descriptif-poste fade-text">Le technicien de surface contribue à ce que les normes d’hygiène et de propreté soient respectées dans les locaux de 
								production, sur les machines et dans les bureaux. Son rôle est primordial : il est le garant de la propreté des surfaces avec lesquelles les 
								différents produits seront en contact. C’est pourquoi il doit respecter rigoureusement le planning de nettoyage prévu, les protocoles et les 
								procédures de désinfection.</p>
							</div>
							<div class="panel-job-element-right">
								<button type="button" class="btn btn-default btn-circle"> <span class="glyphicon glyphicon-plus"></span></button>
							</div>
						</div>
						
						<div class="panel-job-element">
							<div class="panel-job-element-left">
								<div class="intitule-poste">
									<p>Technicien de surface</p>
								</div>
								<div class="coordonnees-poste">
									<p class="text-left">Natixis</p>
									<p class="text-right">Amiens</p>
								</div>
								<div class="competences-exigees">
									<p>Compétences exigées :<br />Rigueur, Ponctualité, Bonne conduite, Sociable</p>
								</div>
								<p class="descriptif-poste fade-text">Le technicien de surface contribue à ce que les normes d’hygiène et de propreté soient respectées dans les locaux de 
								production, sur les machines et dans les bureaux. Son rôle est primordial : il est le garant de la propreté des surfaces avec lesquelles les 
								différents produits seront en contact. C’est pourquoi il doit respecter rigoureusement le planning de nettoyage prévu, les protocoles et les 
								procédures de désinfection.</p>
							</div>
							<div class="panel-job-element-right">
								<button type="button" class="btn btn-default btn-circle"> <span class="glyphicon glyphicon-plus"></span></button>
							</div>
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