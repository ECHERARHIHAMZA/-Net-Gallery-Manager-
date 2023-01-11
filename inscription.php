<!DOCTYPE html>
<html>
  <head>
    <title>Flower tea</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css"
     integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
     <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei" rel="stylesheet">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
   </head>
   <body>
      <div class="first">
        <div class="container"><h1>Anime</h1>
        <ul class="social">
            <li> <a href="#"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li> <a href="#"><i class="fab fa-google-plus-g"></i></a>
            </li>
            <li> <a href="#"><i class="fab fa-twitter"></i></a>
            </li>
            <li> <a href="#"><i class="fab fa-pinterest-p"></i></a>
            </li>
            <li> <a href="#"><i class="fab fa-behance"></i></a>
            </li>
            <li> <a href="#"><i class="fab fa-instagram"></i></a>
            </li>
        </ul>
         <nav class="navbar navbar-expand-sm">
                  <<ul class="navbar-nav">
                    <li class="nav-item active">
                         <a class="nav-link" href="index0.php">Page d'aceuil</a>
                     </li>
                    <li class="nav-item">
                          <a class="nav-link" href="livredor.php">Livre d'or</a>
                    </li>
                    <li class="nav-item">
                          <a class="nav-link" href="galerie.php">galerie</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="session.php">Connexion</a>
                      </li>
                </ul>

           </nav>
           
	<div class="container pt">
		<div class="row mt">
			<div class="col-lg-6 col-lg-offset-3 centered">
				<h3>Inscription</h3>
				<hr>
				<p>Pour remplir cette formulaire d'inscription, il faut un pseudo et un email unique</p>
				<p> <!--
					?php
					
					if ($mysqli->connect_errno) {
						// Affichage d'un message d'erreur
						echo "Error: Problème de connexion à la BDD \n";
						echo "Errno: " . $mysqli->connect_errno . "\n";
						echo "Error: " . $mysqli->connect_error . "\n";
						// Arrêt du chargement de la page
						exit();
					}
					// Instructions PHP à ajouter pour l'encodage utf8 du jeu de caractères
					if (!$mysqli->set_charset("utf8")) {
						printf("Pb de chargement du jeu de car. utf8 : %s\n", $mysqli->error);
						exit();
					}
					echo ("Connexion BDD réussie !\n");
					//Ferme la connexion avec la base MariaDB
					$mysqli->close();
					?-->	
				</p>
			</div>
		</div>
		<div class="row mt">
			<div class="col-lg-8 col-lg-offset-2">
				<div id="contenu">
					<form role="form" action="action.php" method="post">
						<fieldset>
							<legend>Données personnelles :</legend>
							<div class="form-group">
								<input type="name" class="form-control" name="pseudo" placeholder="Pseudo">
								<br>
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="mdp" placeholder="Mot de passe">
								<br>
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="conf-mdp" placeholder="Confimez mot de passe">
								<br>
							</div>
							<div class="form-group">
								<input type="name" class="form-control" name="nom" placeholder="Nom">
								<br>
							</div>
							<div class="form-group">
								<input type="name" class="form-control" name="prenom" placeholder="Prénom">
								<br>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="email" placeholder="Entre email" required>
								<br>
							</div>
							<!--
					<div class="form-group">
						<input type="email" class="form-control" id="message" placeholder="Subject">
						<br>
					</div>
					<textarea class="form-control" rows="6" placeholder="Enter your text here"></textarea>
					<br>
                    -->
							<button type="submit" class="btn btn-success">S'inscrire</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /row -->
	</div><!-- /container -->

         </div>
         
         </div>
      </div>
      
      
      
      
      
      
   </body>
 </html>
