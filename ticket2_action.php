
<?php
session_start();
// if ( !isset($_SESSION['login']) || $_SESSION['role'] != 'A')
// {
//     header("session.php");
// }
//$nom=htmlspecialchars($_POST['num']);
$mdp=htmlspecialchars($_POST['pwd']);
$mysqli = new mysqli('localhost','zecheraha','v81xhhfu','zfl2-zecheraha') ;
$s=$_SESSION['login'];
echo($s);
if ($mysqli->connect_errno) 
{
 echo "Error: Problème de connexion à la BDD \n";
 echo "Errno: " . $mysqli->connect_errno . "\n";
 echo "Error: " . $mysqli->connect_error . "\n";
 exit();
}
echo ("Connexion BDD réussie !");
if (!$mysqli->set_charset("utf8")) {
 printf("Pb de chargement du jeu de car. utf8 : %s\n", $mysqli->error);
 exit();
}
$sql1="INSERT INTO `t_visiteur_vis` (`vis_numero`, `vis_mot_de_passe`, `vis_date_heure`, `vis_nom`, `vis_prenom`, `vis_email`, `cpte_pseudo`) 
VALUES (NULL,MD5('".$mdp. "'),NOW(),NULL, NULL, NULL, '" .$s. "')";
$result3 = $mysqli->query($sql1); 

if (($result3 == false)) //Requête réussie
{
 echo "Error: La requête a échoué \n";
 echo "Query: " . $sql1 . "\n";
 echo "Errno: " . $mysqli->errno . "\n";
 echo "Error: " . $mysqli->error . "\n";
 exit;
}else
{
    header("Location:admin_visiteurs.php");
}
//Ferme la connexion avec la base MariaDB
$mysqli->close();
?>