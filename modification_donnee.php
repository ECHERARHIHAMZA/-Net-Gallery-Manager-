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
                    <a class="nav-link" href="admin_accueil.php">Retour</a>
                    </li>
                    <li class="nav-item">
                          <<a class="nav-link" href="admin_visiteurs.php">Gestion des tickets visiteurs</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="deconnection.php">déconexion</a>
                    </li>
                </ul>

           </nav>
</div>
</div>
<?php
           session_start();
$mysqli = new mysqli('localhost','zecheraha','v81xhhfu','zfl2-zecheraha') ;
if ($mysqli->connect_errno)
{
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
?>
<div class="message">
<div id="contenu">
    <form role= "form" action="modification_action.php" method="post">
        <p>Votre mot de passe : <input type="text" name="pwd" /></p>
        <p>confirmation de mot de passe : <input type="text" name="pwdconf" /></p>
        <p>Votre nom : <input type="text" name="nom" /></p>
        <p>Votre prenom : <input type="text" name="prenom" /></p>
        <p>Votre mail : <input type="text" name="email" /></p>
        <p><input type="submit" value="Valider"></p>
      </form>
</div>

         </div>
         
         </div>
      </div>
      
      
</div>
      
      
      
   </body>
 </html>
