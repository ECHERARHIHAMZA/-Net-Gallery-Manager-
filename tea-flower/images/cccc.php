

	<?php

$mysqli = new mysqli('localhost','zecheraha','v81xhhfu','zfl2-zecheraha') ;

	if ($mysqli->connect_errno) {

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

	//echo ("Connexion BDD réussie !\n");

	//echo "<br/>";

	//Ferme la connexion avec la base MariaDB

	//$mysqli->close();

	?>

	<!-- +++++ Contact Section +++++ -->


		<?php

		if ($_POST["pseudo"] != NULL && $_POST["mdp"] != NULL && $_POST["nom"] != NULL && $_POST["prenom"] != NULL && $_POST["conf-mdp"] != NULL && $_POST["email"] != NULL) {

			$id = htmlspecialchars(addslashes(($_POST["pseudo"])));

			$mdp = htmlspecialchars(addslashes(($_POST["mdp"])));

			$confmdp = htmlspecialchars(addslashes(($_POST["conf-mdp"])));

			$nom = htmlspecialchars(addslashes(($_POST["nom"])));

			$prenom = htmlspecialchars(addslashes(($_POST["prenom"])));

			$email = htmlspecialchars(addslashes(($_POST["email"])));



			//2) A compléter...

			$req1 = "SELECT * FROM t_compte_cpt where cpt_pseudo = '$id' ;";

			$req2 = "SELECT * FROM t_profil_pfl where pfl_email = '$email' ;";

			$result1 = $mysqli->query($req1);

			$result2 = $mysqli->query($req2);

			$nb1 = $result1->num_rows;

			$nb2 = $result2->num_rows;

			$cpt = 0;

			if (strcmp($mdp, $confmdp) != 0) { // La requête a echoué

				echo "<div class ='alert alert-danger'><strong>Erreur :</strong> mot de passe non identique</div> \n";

				$cpt = 1;

			}

			if ($cpt != 1) {

				if ($nb1 != 0 || $nb2 != 0) { // La requête a echoué

					if ($nb1 != 0) {

						echo "Erreur : Pseudo deja utilisé \n";

						echo "<br />";

					}

					if ($nb2 != 0) {

						echo "Erreur : Email deja utilisé \n";

						echo "<br />";

					}

				} else //La requête s’est bien exécutée (<=> couleur verte dans phpmyadmin)

				{

					$sql1 = "INSERT INTO t_compte_cpt VALUES('" . $id . "','" . MD5($mdp) . "');";

					// Affichage de la requête constituée pour vérification

					//echo ($sql);

					//Exécution de la requête d'ajout d'un compte dans la table des comptes

					$res3 = $mysqli->query($sql1);

					if ($res3 == false) //Erreur lors de l’exécution de la requête

					{

						// La requête a echoué

						echo "Error: La requête a échoué \n";

						echo "Query: " . $sql1 . "\n";

						echo "Errno: " . $mysqli->errno . "\n";

						echo "Error: " . $mysqli->error . "\n";

					} else //Requête réussie

					{

						echo "<br />";

						echo "Insertion du compte réussie !" . "\n";

						echo "<br />";

						$date = date("Y-m-d");

						$role = 'O';

						$validite = 'D';

						$sql2 = "INSERT INTO t_profil_pfl VALUES('" . $nom . "','" . $prenom . "','" . $email . "','" . $role . "','" . $validite . "','" . $date . "','" . $id . "');";

						try {

							$res4 = $mysqli->query($sql2);

							echo "<br />";

							echo "Insertion du profil réussie !";

						} catch (Exception $e) {

							try {

								echo "Error: La requête insertion profil a échoué et le compte deja inserer sera supprimé \n";

								echo "<br/>";

								$delt = "DELETE FROM t_compte_cpt WHERE cpt_pseudo = '" . $id . "';";

								$resd = $mysqli->query($delt);

								echo "supression du compte reussie";

								echo "<br/>";

								// La requête a echoué						

							} catch (Exception $e) {

								// La requête a echoué

								echo "<br/>";

								echo "Error: La requête du suppression a échoué \n";

								echo "Query: " . $resd . "\n";

								echo "Errno: " . $mysqli->errno . "\n";

								echo "Error: " . $mysqli->error . "\n";

							}

						}

					}

				}

			}

		} else {

			echo " Il faut remplir tous les cases";

		}

		echo "<br/>";

		echo "<br/>";

		//Ferme la connexion avec la base MariaDB

		$mysqli->close();

		?>

		<a href="inscription.php"><button type="button" class="btn btn-success">Retour au formulaire</button></a>

		<!--

		<div class="row mt">

			<div class="col-lg-8 col-lg-offset-2">

				<form role="form">

					<div class="form-group">

						<input type="name" class="form-control" id="pseudo" placeholder="Pseudo">

						<br>

					</div>

					<div class="form-group">

						<input type="password" class="form-control" id="mdp" placeholder="Mot de passe">

						<br>

					</div>

					<div class="form-group">

						<input type="password" class="form-control" id="conf-mdp" placeholder="Confimez mot de passe">

						<br>

					</div>

					<div class="form-group">

						<input type="name" class="form-control" id="nom" placeholder="Nom">

						<br>

					</div>

					<div class="form-group">

						<input type="name" class="form-control" id="prenom" placeholder="Prénom">

						<br>

					</div>

					<div class="form-group">

						<input type="email" class="form-control" id="email" placeholder="Entre email">

						<br>

					</div>

					

					<div class="form-group">

						<input type="email" class="form-control" id="message" placeholder="Subject">

						<br>

					</div>

					<textarea class="form-control" rows="6" placeholder="Enter your text here"></textarea>

					<br>

                    -

					<button type="submit" class="btn btn-success">SUBMIT</button>

				</form>

			</div>

		</div> /row -->

		<br />

		<br />

		<br />

		<br />

		<br />

		<br />

	</div><!-- /container -->





	<!-- +++++ Footer Section +++++ -->



	<div id="footer">

		<div class="container">

			<div class="row">

				<div class="col-lg-4">

					<h4>My Bunker</h4>

					<p>

						Some Address 987,<br />

						+34 9054 5455, <br />

						Madrid, Spain.

					</p>

				</div><!-- /col-lg-4 -->



				<div class="col-lg-4">

					<h4>My Links</h4>

					<p>

						<a href="#">Dribbble</a><br />

						<a href="#">Twitter</a><br />

						<a href="#">Facebook</a>

					</p>

				</div><!-- /col-lg-4 -->



				<div class="col-lg-4">

					<h4>About Stanley</h4>

					<p>This cute theme was created to showcase your work in a simple way. Use it wisely.</p>

				</div><!-- /col-lg-4 -->



			</div>



		</div>

	</div>





	<!-- Bootstrap core JavaScript

    ================================================== -->

	<!-- Placed at the end of the document so the pages load faster -->

	<script src="assets/js/bootstrap.min.js"></script>

</body>



</html>