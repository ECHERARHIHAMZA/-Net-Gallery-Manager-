<!DOCTYPE html>
<html>
  <head>
    <title>Anime</title>
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
</div>
</div>
           <div class="message">
           <?php
 $mysqli = new mysqli('localhost','zecheraha','v81xhhfu','zfl2-zecheraha') ;
  if ($mysqli->connect_errno)
  {
  // Affichage d'un message d'erreur
  echo "Error: Probl??me de connexion ?? la BDD \n";
  echo "Errno: " . $mysqli->connect_errno . "\n";
  echo "Error: " . $mysqli->connect_error . "\n";
  // Arr??t du chargement de la page
  exit();
  }
  // Instructions PHP ?? ajouter pour l'encodage utf8 du jeu de caract??res
  if (!$mysqli->set_charset("utf8")) {
  printf("Pb de chargement du jeu de car. utf8 : %s\n", $mysqli->error);
  exit();
  }
  //Pr??paration de la requ??te r??cup??rant tous les profils
  $id=$_GET['id'];
  
  $requete="SELECT * FROM t_oeuvre_ovre join t_presentation_pre using(ovre_code) join t_exposant_expo using(expo_id) where ovre_code = '$id';"; 
 
  $result1 = $mysqli->query($requete);
  $oeu = $result1->fetch_assoc();
  if ($result1 == false) //Erreur lors de l???ex??cution de la requ??te
  { // La requ??te a echou??
  echo "Error: La requ??te a echou?? \n";
  echo "Errno: " . $mysqli->errno . "\n";
  echo "Error: " . $mysqli->error . "\n";
  exit();
  }
  else //La requ??te s???est bien ex??cut??e (<=> couleur verte dans phpmyadmin)
  {
  $expbio = $oeu['ovre_description'];
  $expnom = $oeu['ovre_initule'];
  $fichier_image = $oeu['ovre_fichier_img'];
  $expdate = $oeu['ovre_date_creation'];

  
    
    echo '<div class="container pt">';
    echo '<center>';
    echo '<div class="row mt">';
    echo '<div class=>';
    echo '<h3>'.$expnom.'</h3>';
    echo '<hr>';
    echo '<p>'.$expbio.'</p>';
    echo '<hr>';
    echo '<p> date de creation: '.$expdate.'</p>';
    echo '</div>';
    echo '</div>';
    echo '</center>';
    echo '<div class="row mt centered">';
    echo '<div class=<center>;>';
    echo '<img class="img-responsive" src="images/'.$fichier_image.'"  alt="Image" height="400" width="400"> . /></p>';
    echo '<p>';
    echo '</p>';
    echo '</div>';
    echo '</div><!-- /row -->';
    echo '</div><!-- /container -->';
    echo '</center>';

  }
  ?>
         </div>
         
         </div>
      </div>
      
      
</div>
      
      
      
   </body>
 </html>
