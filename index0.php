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
                  <ul class="navbar-nav">
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
       <?php
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


//Préparation de la requête récupérant tous les profils
$requete="SELECT * FROM t_configuration_conf;";
//Affichage de la requête préparée


$result1 = $mysqli->query($requete);
if ($result1 == false) //Erreur lors de l’exécution de la requête
{ // La requête a echoué
echo "Error: La requête a echoué \n";
echo "Errno: " . $mysqli->errno . "\n";
echo "Error: " . $mysqli->error . "\n";
exit();
}
else //La requête s’est bien exécutée (<=> couleur verte dans phpmyadmin)
{


echo("<table class='table table-hover'>");
echo("<head>
     <tr>
         <th>intitule de confeguration </th>
         <th>date de debut</th>
         <th>Date de fin</th>
         <th>presentation de confeguration</th>
         <th>lieu de confeguration</th>
         <th>date de presentation</th>
         <th>texte de bienvenue</th>
     </tr> 
  </head>
  <tbody>");
  while ($conf = $result1->fetch_assoc())
      {
echo("<tr>");
echo("<td>".$conf['conf_initule'] . "</td>" . "<td>".$conf['conf_date_debut'] . "</td>" );
echo( "<td>". $conf['conf_date_fin'] . "</td>" . "<td>".$conf['conf_presentaion'] . "</td>"  );
echo( "<td>". $conf['conf_lieu'] . "</td>" . "<td>".$conf['conf_date_presentation'] . "</td>"  );
echo( "<td>". $conf['conf_text_bienv'] . "</td>"  );

echo("</tr>");
}
echo("</tbody></table>");
}
?>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>
</body>
</html>

      <div class="message">
          <div class="container">
              <h2 class="text-center">actualite</h2>
               <?php
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
echo ("Connexion BDD réussie !");

//Préparation de la requête récupérant tous les profils
$requete="SELECT * FROM t_actualite_acte;";
//Affichage de la requête préparée
echo ($requete);

$result1 = $mysqli->query($requete);
if ($result1 == false) //Erreur lors de l’exécution de la requête
{ // La requête a echoué
echo "Error: La requête a echoué \n";
echo "Errno: " . $mysqli->errno . "\n";
echo "Error: " . $mysqli->error . "\n";
exit();
}
else //La requête s’est bien exécutée (<=> couleur verte dans phpmyadmin)
{
echo "<br />";
echo($result1->num_rows); //Donne le bon nombre de lignes récupérées
echo "<br />";

echo("<table class='table table-hover'>");
echo("<head>
     <tr>
         <th>titre </th>
         <th>texte</th>
         <th>Date</th>
         <th>auteur</th>
     </tr> 
  </head>
  <tbody>");
  while ($actu = $result1->fetch_assoc())
      {
echo("<tr>");
echo("<td>".$actu['acte_titre'] . "</td>" . "<td>".$actu['acte_text'] . "</td>" );
echo( "<td>". $actu['acte_date_pub'] . "</td>" . "<td>".$actu['cpte_pseudo'] . "</td>"  );


echo("</tr>");
}
echo("</tbody></table>");
}
?>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>
</body>
</html>

              
              <div class="row">
                    
              </div>
          </div>
      </div>
      <div class="what_to_do container">
          
          


           
            </div>
      </div>
      <div class="four">
          <div class="container">
               
               
          </div>
      </div>
      
     
      <div class="letter text-center">
        <h1 class="text-center">Subscribe to get more info</h1>
        <p class="text-center">It is a long established fact that a reader</p>
        <div class="container">
          <form action="/action_page.php">
              <div class="form-group">
                 <input type="email" class="form-control" id="email">
               </div>
                <div class="form-group">
                <input type="telephone" class="form-control" id="pwd">
                </div>
           </form>
           <div class="row">
                 <div class="col-12 text-center">
                   <button type="button"><a href="inscription.php">inscription</a></button>
                 </div>
           </div>
        </div>
      </div>
      <footer>
          <p class="text-center">FREE HTML template is done by Natallia Rak. Job suggestion: natkayellow@gmail.com<br>
          bootstrap 4</p>
      </footer>
   </body>
 </html>
