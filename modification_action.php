<?php
session_start();
/*if ( !isset($_SESSION['login']) || $_SESSION['role'] != 'A')
{
    header("session.php");
}*/
$s=$_SESSION['login'];
echo($s);
$mdp=htmlspecialchars($_POST['pwd']);
$mdp1=htmlspecialchars($_POST['pwdconf']);
$nom=htmlspecialchars($_POST['nom']);
$prenom=htmlspecialchars($_POST['prenom']);
$mail=htmlspecialchars($_POST['email']);


$mysqli = new mysqli('localhost','zecheraha','v81xhhfu','zfl2-zecheraha') ;
if (strcmp($mdp,$mdp1)!=0)//Erreu($result3 == false)r lors de l’exécution de la requête
{
echo"les deux mots de passes sont differents";
exit();
}
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
$sql1="UPDATE t_compte_cpte SET cpte_mot_de_passe = MD5('".$mdp. "') WHERE cpte_pseudo='" .$s. "';";
$sql2="UPDATE t_profil_pfl SET pfl_nom ='" .addslashes($nom). "', pfl_prenom='" .addslashes($prenom). "', pfl_email='".addslashes($mail)."' WHERE cpte_pseudo='" .$s.  "';";
echo($sql1);
echo($sql2);
$result3 = $mysqli->query($sql1); 
$result4= $mysqli->query($sql2);


if (($result3 == false) OR ($result4 == false)) //Requête réussie
{
 echo "Error: La requête a échoué \n";
 echo "Query: " . $sql1 . "\n";
 echo "Errno: " . $mysqli->errno . "\n";
 echo "Error: " . $mysqli->error . "\n";
 exit;
}else
{
    header("Location:admin_acceuil.php");
}
//Ferme la connexion avec la base MariaDB
$mysqli->close();
?>