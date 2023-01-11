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
