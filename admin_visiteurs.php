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
                          <a class="nav-link" href="modification_donnee.php">Modification des donnée personels</a>
                    </li>
                    <li class="nav-item">
                          <a class="nav-link" href="deconnection.php">déconexion</a>
                    </li>
                </ul>

           </nav>
</div>
</div>
<div class="message">
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


$requete1="SELECT *, cpte_pseudo
FROM  t_visiteur_vis left outer join
 t_commentaire_com USING (vis_numero)
JOIN t_profil_pfl USING (cpte_pseudo);";
//Affichage de la requête préparée


$result2 = $mysqli->query($requete1);
if ($result2 == false) //Erreur lors de l’exécution de la requête
{ // La requête a echoué
echo "Error: La requête a echoué \n";
echo "Errno: " . $mysqli->errno . "\n";
echo "Error: " . $mysqli->error . "\n";
exit();
}
else //La requête s’est bien exécutée (<=> couleur verte dans phpmyadmin)
{
echo "<br />";
echo($result2->num_rows); //Donne le bon nombre de lignes récupérées
echo "<br />";

echo("<table class='table table-hover'>");
echo("<head>
     <tr>
         <th>pseudo </th>
         <th>numero de visiteur</th>
         <th>nom de visiteur</th>
         <th>prenom de visiteur</th>
         <th>mail de visiteur</th>
         <th>date et heure de visiteur</th>
         <th>numero de commentaire </th>
         <th>la date de commentaire</th>
         <th>commentaire</th>
         
         
     </tr> 
  </head>
  <tbody>");
  while ($vis = $result2->fetch_assoc())
      {     
echo("<tr>");
echo("<td>". $vis['cpte_pseudo'] . "</td>" ."<td>".$vis['vis_numero'] . "</td>"  );
echo("<td>". $vis['vis_nom'] . "</td>" ."<td>".$vis['vis_prenom'] . "</td>"  );
echo("<td>". $vis['vis_email'] . "</td>" ."<td>".$vis['vis_date_heure'] . "</td>"  );
echo("<td>".$vis['com_numero'] . "</td>". "<td>".$vis['com_date_heure'] . "</td>" );
echo("<td>".$vis['com_text'] . "</td>"  );


echo("</tr>");
}
echo("</tbody></table>");
}
?>
<div id="contenu">
    <form role= "form" action="ticket2_action.php" method="post">
    <legend>Veuillez entrer les nouveaux cordonnées des  tickets des visiteurs:</legend>
        
        <p>entrer le mot de passe : <input type="text" name="pwd" /></p>  
        <p><input type="submit" value="Valider"></p>
      </form>
</div>



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


                <div class="row mt">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div id="contenu">
                            <form role="form" action="ticket_action.php" method="post">
                                <fieldset>
                                    <legend>Veuillez séléctionner le commentaire  que vous souhaitez suprimer:</legend>
                                    <div class="form-group">
                                        <?php $sql4 = " SELECT * FROM t_visiteur_vis";
                                        $res4 = $mysqli->query($sql4); ?>

                                        <select class="form-control" name="pseudo">
                                            <?php while ($ligne4 = $res4->fetch_assoc()) { ?>
                                                <option><?php echo $ligne4['vis_numero'] ?></option>
                                                <?php } ?>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-success">suprimer</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
                
                
      </div>
      
      
      
</div>
      
      
      
   </body>
 </html>
