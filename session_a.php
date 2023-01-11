<?php
    $mysqli = new mysqli('localhost','zecheraha','v81xhhfu','zfl2-zecheraha') ;
    session_start();
    
        if ($_POST["pseudo"] != NULL && $_POST["mdp"] != NULL) {
            $id = htmlspecialchars(addslashes(($_POST["pseudo"])));
            $mdp = htmlspecialchars(addslashes(($_POST["mdp"])));
            $sql = "SELECT cpte_pseudo,cpte_mot_de_passe FROM t_compte_cpte WHERE
                  cpte_pseudo='" . $id . "' AND cpte_mot_de_passe=MD5('" . $mdp . "');";
                  $res = $mysqli->query($sql);

            if ($res == false) //Erreur lors de l’exécution de la requête
            {
                // La requête a echoué
                echo "Error: La requête a échoué \n";
                echo "Query: " . $sql . "\n";
                echo "Errno: " . $mysqli->errno . "\n";
                echo "Error: " . $mysqli->error . "\n";
            } else //Requête réussie
            {
                $nb1 = $res->num_rows;
                if ($nb1 == 0) {
                    echo "<div class ='alert alert-danger'><strong>Erreur :</strong> Pseudo ou Mot de passe incorrect </div>";
                } else {
                    $sql2 = "SELECT * FROM t_profil_pfl join t_compte_cpte using (cpte_pseudo) where cpte_pseudo='" . $id . "' ;";
                    $res2 = $mysqli->query($sql2);
                    $ligne = $res2->fetch_assoc();
                    if ($ligne["pfl_validite"] == 'A') {
                        $sql3 = "SELECT * from t_profil_pfl where cpte_pseudo='" . $id . "' ;";
                        $res3 = $mysqli->query($sql3);
                        $ligne1 = $res3->fetch_assoc();
                        $_SESSION['login'] = $id;
                        $_SESSION['role'] = $ligne1["pfl_role"];
                        header("Location:admin_accueil.php");
                    } else {
                        echo "Compte existe mais n'ai pas encore activé ";
                        echo "<br />";
                    }
                }
            }
        } else { 
            echo " Il faut remplir tous les cases";
        }
        echo "<br />";
    
    ?>
    <a href="session.php"><button type="button" class="btn btn-success">Retour au Connexion</button></a>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
</div>
?>