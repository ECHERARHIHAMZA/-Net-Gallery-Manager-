<?php
            session_start();
            if (!isset($_SESSION['login']) || $_SESSION['role']  != 'A') //A COMPLETER pour tester aussi le rôle...
    {
        //Si la session n'est pas ouverte, redirection vers la page du formulaire
        header("Location:connexion.php");
    }
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

            if ($_POST["pseudo"] != NULL) {
                $id = htmlspecialchars(addslashes(($_POST["pseudo"])));
                $req1="Select * from t_profil_pfl where  cpte_pseudo='" . $id . "' ;";
                $res = $mysqli->query($req1);
                $ligne = $res->fetch_assoc();
                if ($ligne["pfl_validite"] == 'A') {
                    $req2 = "update t_profil_pfl set pfl_validite = 'D' where cpte_pseudo='" . $id . "' ;";
                    $res4 = $mysqli->query($req2);
                    header("Location:admin_accueil.php");
                }
                else {
                    $req3 = "update t_profil_pfl set pfl_validite = 'A' where cpte_pseudo='" . $id . "' ;";
                    $res1 = $mysqli->query($req3);
                    header("Location:admin_accueil.php");
                }

            }