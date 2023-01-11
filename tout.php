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
//Préparation de la requête récupérant tous les profils
$requete="SELECT * FROM t_exposant_expo;";
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
         <th>numero de l'exposant</th>
         <th>Nom</th>
         <th>Prenom</th>
         <th>Biographie</th>
         <th>email</th>
         <th>site web</th>
         <th>image</th>
         <th>auteur</th>
     </tr> 
  </head>
  <tbody>");
  while ($expo = $result1->fetch_assoc())
      {
echo("<tr>");
echo("<td>".$expo['expo_id'] . "</td>" . "<td>".$expo['expo_nom'] . "</td>" );
echo("<td>".$expo['expo_prenom'] . "</td>" ."<td>". $expo['expo_text_bio'] . "</td>" );
echo("<td>".$expo['expo_email'] . "</td>". "<td>".$expo['expo_url_site_web'] . "</td>"  );
echo("<td>".$expo['expo_fichier_img'] . "</td>". "<td>".$expo['cpte_pseudo'] . "</td>"  );

echo("</tr>");
}
echo("</tbody></table>");
}

//Préparation de la requête récupérant tous les profils
$requete="SELECT * FROM t_commentaire_com;";
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
         <th>numero de commentaire </th>
         <th>la date de commentaire</th>
         <th>etat de commentaire</th>
         <th>commentaire</th>
         <th>numero de visiteur</th>
     </tr> 
  </head>
  <tbody>");
  while ($com = $result1->fetch_assoc())
      {
echo("<tr>");
echo("<td>".$com['com_numero'] . "</td>" . "<td>".$com['com_date_heure'] . "</td>" );
echo( "<td>". $com['com_etat'] . "</td>" . "<td>".$com['com_text'] . "</td>"  );
echo( "<td>". $com['vis_numero'] . "</td>"   );

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
