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
                    <li><a href=#></span> Accueil</a></li>
                    <li><a href=#>Offres</a></li>
                    <li><a href=#>Profils</a></li>
    
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
              <a class="btn btn-default" href=# role="button">Inscription Candidat</a>
            <a class="btn btn-default" href=# role="button">Inscription RH</a>
            </div>

        </div>
        </div>
    </div>

		<!-- FIN DU MENU : 

		--> 

		<div class ="starter-template" style="padding: 100px;">
			<?= $content; ?> 
		</div>

		<footer>
			<a href="./html/contact.html"> Contact </a>
		</footer>
	</body>

</html>