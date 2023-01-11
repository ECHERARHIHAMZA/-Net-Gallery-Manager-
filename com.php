<?php
$id = htmlspecialchars(addslashes(($_POST["pseudo"])));
$mysqli = new mysqli('localhost','zecheraha','v81xhhfu','zfl2-zecheraha') ;if ($mysqli->connect_errno)
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
if ($_POST["numero"] != NULL && $_POST["mdp"] != NULL && $_POST["nom"] != NULL && $_POST["prenom"] != NULL &&  $_POST["email"] != NULL &&  $_POST["commentaire"] != NULL) {
    $numero=htmlspecialchars($_POST['numero']);
    $pwd=htmlspecialchars($_POST['pwd']);
    $nom=htmlspecialchars($_POST['nom']);
    $prenom=htmlspecialchars($_POST['prenom']);
    $email=htmlspecialchars($_POST['email']);
    $commentaire=htmlspecialchars($_POST['commentaire']);

    $req4 = "SELECT * from t_visiteur_vis where vis_numero = '" . $numero . "';";
    $res10 = $mysqli->query($req4);
    $ligne = $res10->fetch_assoc();

    if ($ligne['vis_numero'] == $id) {

        $req = "SELECT * from t_commentaire_com where vis_numero ='" . $numero . "'";
        $res = $mysqli->query($req);
        $nb_ligne =  $res->num_rows;
        if ($nb_ligne != 0) {
            $ligne = $res -> fetch_assoc();
            if($ligne['com_etat']=='C'){
                header('Location:livredor.php?erreur=err1_C');
            die();
            }else{
             header('Location:livredor.php?erreur=err1_P');
             die();
            }
        } else {
            $req2 = " select vis_numero from t_visiteur_vis
                      where vis_date_heure <= NOW()
                      AND NOW()<= timestampadd(hour,3,vis_date_heure)
                      AND vis_numero = '" . $numero . "' ;";
            $res2 = $mysqli->query($req2);
            $nb_ligne2 =  $res2->num_rows;
            if ($nb_ligne2 == 0) {
                header('Location:livredor.php?erreur=err2');
                die();
            } else {
                $req5 = "UPDATE t_visiteur_vis SET vis_nom='" . $nom . "', vis_prenom='" . $prenom . "' , vis_email ='" . $email . "' WHERE vis_numero = '".$numero."' ;";
                $res5 = $mysqli->query($req5);
                $req3 = "INSERT INTO t_commentaire_com (com_numero,com_date_heure,com_texte,com_etat,vis_numero) VALUES (NULL,NOW(),'" . $commentaire . "','P', '" . $numero . "');";
                $res3 = $mysqli->query($req3);
                header('Location:livredor.php?erreur=succ');
            }
        }
    } else {
        header('Location:livredor.php?erreur=err3');
        die();
    }
} else {
    header('Location:livredor.php?erreur=err4');
    die();
}
?>