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
                          <a class="nav-link" href="admin_visiteurs.php">Gestion des tickets visiteurs</a>
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
<?php
            session_start();
            if ( !isset($_SESSION['login']) || $_SESSION['role'] != 'A')
 {
    header("location:session.php");
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
            $id = $_SESSION ['login'];
            $role = $_SESSION ['role'];
            $motdepasse=$_SESSION ['mdp'];
            $sql = " SELECT * FROM t_profil_pfl JOIN t_compte_cpte  USING (cpte_pseudo) WHERE cpte_pseudo = '" . $id . "' ";
                $res = $mysqli->query($sql);
                $ligne = $res->fetch_assoc(); ?>
                <div class="col-lg-6 col-lg-offset-3 centered">
                    <h3>--- Information personnelles ---</h3><br />
                </div>
                <table style="border: 2px solid black; width:100%; text-align: center;">
                    <thead style="border: 2px solid black;">
                        <tr>
                            <th>Pseudo</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Validité</th>
                            <th>Date de création</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        echo "<tr>";
                        echo ("<td>" . $ligne['cpte_pseudo'] . "</td>" . "<td>" . $ligne['pfl_nom'] . "</td>");
                        echo ("<td>" . $ligne['pfl_prenom'] . "</td>" . "<td>" . $ligne['pfl_email'] . "</td>");
                        echo ("<td>" . $ligne['pfl_role'] . "</td>" . "<td>" . $ligne['pfl_validite'] . "</td>" . "<td>" . $ligne['pfl_date'] . "</td>");
                        echo "</tr>";
                        ?>
                    </tbody>
                </table>
                <br />
                <hr>
             <?php
            if ($role == 'A') {
 
                $sql1 = " SELECT * FROM t_profil_pfl JOIN t_compte_cpte  USING (cpte_pseudo) WHERE cpte_pseudo != '" . $id . "' ";
                $res1 = $mysqli->query($sql1); 
                ?>
                
                <table style="border: 2px solid black; width:100%; text-align: center;">
                    <thead style="border: 2px solid black;">
                        <tr>
                            <th>Pseudo</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Validité</th>
                            <th>Date de création</th>
                        </tr>
                        
                    </thead>
                    <tbody>
                    
                        <?php
                        while ($ligne1 = $res1->fetch_assoc()) {
                            echo "<tr>";
                        echo ("<td>" . $ligne1['cpte_pseudo'] . "</td>" . "<td>" . $ligne1['pfl_nom'] . "</td>");
                        echo ("<td>" . $ligne1['pfl_prenom'] . "</td>" . "<td>" . $ligne1['pfl_email'] . "</td>");
                        echo ("<td>" . $ligne1['pfl_role'] . "</td>" . "<td>" . $ligne1['pfl_validite'] . "</td>" . "<td>" . $ligne1['pfl_date'] . "</td>");
                        echo "</tr>";
                            
                        }
                    
                        ?>
                        
                        <?php } ?>

    
                        
                </table>
                
                <div class="row mt">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div id="contenu">
                            <form role="form" action="admine_action.php" method="post">
                                <fieldset>
                                    <legend>Veuillez séléctionner le pseudo que vous souhaitez modifier:</legend>
                                    <div class="form-group">
                                        <?php $sql4 = " SELECT * FROM t_profil_pfl JOIN t_compte_cpte  USING (cpte_pseudo) WHERE cpte_pseudo != '" . $id . "' ";
                                        $res4 = $mysqli->query($sql4); ?>

                                        <select class="form-control" name="pseudo">
                                            <?php while ($ligne4 = $res4->fetch_assoc()) { ?>
                                                <option><?php echo $ligne4['cpte_pseudo'] ?></option>
                                                <?php } ?>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-success">A / D</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
                
    </div><!-- /row -->
</div><!-- /container -->

</body>
</html>