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
		
        <link rel="stylesheet" href="./css/projet_emploi.css" />

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
                    <li><a href="html/Profils.php">Profils</a></li>
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
              <a class="btn btn-default" href="html/Inscription_PRO.php" role="button">Inscription Candidat</a>
            <a class="btn btn-default" href="html/Inscription_RH.php" role="button">Inscription RH</a>
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

		<div class="parallax parallax1"></div>
		
		<div class="container-fluid parallax-container">
			<h1 class="centered">Le site Projet Emploi</h1>
			<p>Dans une société en constante évolution, il peut être difficile de trouver sa place. Les opportunités de rentrer dans le monde du travail peuvent sembler rare. Cette plateforme s'est donné pour mission de permettre aux entreprises et aux demandeurs d'emploi de communiquer plus aisément.
			Ainsi nous nous sommes donnés pour mission de réunir demandeurs d'emploi et recruteurs, et de leur offrir une plateforme sur laquelle ils puissent interagir.
			</p>
		</div>
		
		<div class="album text-muted">
			<div class="container">
				<div class="row">
					<div class="card">
						<a href="./html/offres_emploi.html"><img src="./images/find_job.png" class="img_album" alt="Photo de montagne" data-holder-rendered="true" /></a>
						<p class="card-text">Consultez nos offres d'emploi concernant des domaines divers et variés, et trouvez l'emploi qui vous correspond.</p>
					</div>
					<div class="card">
						<a href="./html/Inscription_PRO.html"><img class="img_album" src="./images/profil_candidat.png" alt="Photo de montagne" /></a>
						<p class="card-text">Inscrivez-vous sur le site en tant que candidat pour pouvoir postuler à nos offres d'emploi.</p>
					</div>
					<div class="card">
						<a href="./html/contact.html"><img class="img_album" src="./images/contact_rh.png" alt="Photo de montagne" /></a>
						<p class="card-text">Entrez en contact avec nos recruteurs et commencez dès maintenant à élargir votre réseau professionnel.</p>
					</div>
				</div>
				<form role="contact-rh">
						<div class="form-group">
							<label class="light-margin" for="comment">A :</label>
							<select class="big-select" name="coordonnee-rh" size="3">
									<option>Hervé Duttelier</option>
									<option>Rémi Gaillard</option>
									<option>Tristan Corbière</option>
									<option>Bruce Grannec</option>
									<option>Karim Benguigui</option>
								</select>
							<label class="light-margin" for="comment">Sujet :</label>
							<input  type="text" class="form-control light-margin" placeholder="Bug, renseignements, support ...">
							<label class="light-margin" for="comment">Demande :</label>
							<textarea class="form-control light-margin" rows="10" id="desc_requete-contact"></textarea>
							<button type="submit" class="btn btn-default light-margin">Envoyer la demande</button>
						</div>
				</form>
			</div>
		</div>
			
		<div class="parallax parallax2"></div>
		<div class="container-fluid parallax-container">
			<h1 class="centered">Candidats, postulez aux offres de nos recruteurs</h1>
			<p>
			Il vous est possible, sans même être enregistré sur notre site, de consulter les offres d'emploi de notre site et de contacter les recruteurs ayant posté ces offres.
			En revanche il faudra préalablement vous enregistrer sur notre site <a href="./html/Inscription_PRO.html">ici</a> (ou vous connecter si vous êtes déjà inscrit) afin de pouvoir postuler aux offres d'emploi présentées sur notre site.
			</p>
		</div>
		
		<div class="album text-muted">
			<div class="container">
				<div class="row">
					<div class="card">
						<a href="./html/offres_emploi.html"><img src="./images/postuler_offre.png" class="img_album" alt="Photo de montagne" data-holder-rendered="true" /></a>
						<p class="card-text">Postulez aux offres d'emploi de nos recruteurs.</p>
					</div>
					<div class="card">
						<a href="./html/Inscription_PRO.html"><img class="img_album" src="./images/modif_profil.png" alt="Photo de montagne" /></a>
						<p class="card-text">Modifier votre profil à mesure que vous accumulez des compétences.</p>
					</div>
					<div class="card">
						<a href="./html/contact.html"><img class="img_album" src="./images/rep_candidature.jpg" alt="Photo de montagne" /></a>
						<p class="card-text">Consulter les réponses à vos candidatures.</p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="parallax parallax3"></div>
		<div class="container-fluid parallax-container">
			<h1 class="centered">Recruteurs, publiez vos offres d'emploi</h1>
			<p>
			Parce que nous considérons le travail de recruteur fondamental pour la bonne santé d'une entreprise, nous vous proposons sur ce site divers outils afin de trouver les profils qui correspondent à vos attentes.
			En effet vous pouvez non seulement poster des offres sur le site, mais aussi consulter les profils de candidats enregistrés selon leurs expériences, leur domaine d'activité, etc. 
			</p>
		</div>
		
		<div class="album text-muted">
			<div class="container">
				<div class="row">
					<div class="card">
						<a href="./html/creation_offre_emploi.html"><img src="./images/creer_offre.png" class="img_album" alt="Photo de montagne" data-holder-rendered="true" /></a>
						<p class="card-text">Créer vos offres d'emploi et diffusez-les sur notre plateforme.</p>
					</div>
					<div class="card">
						<a href="./html/Inscription_PRO.html"><img class="img_album" src="./images/find_candidate.png" alt="Photo de montagne" /></a>
						<p class="card-text">Cherchez parmi les candidats inscrits ceux dont le profil correspond le mieux à vos attentes, et contactez-les.</p>
					</div>
					<div class="card">
						<a href="#"><img class="img_album" src="./images/modifier_candidature.png" alt="Photo de montagne" /></a>
						<p class="card-text">Managez vos offres d'emploi. Acceptez, refusez ou encore blacklistez les candidats.</p>
					</div>
				</div>
			</div>
		</div>
		

		<footer>
			<a href="./html/contact.html"> Contact </a>
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