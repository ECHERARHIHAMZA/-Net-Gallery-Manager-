<?php
header("Location:admin_visiteurs.php");

?>

    <?php 
    if (isset($_POST['vis_numero'])){
        $numero=$_POST['vis_numero'];
    }
    $req_suppr1="DELETE from t_commentaire_com where vis_numero='".$numero."';";
        echo($req_suppr1);
        $res_suppr1 = $mysqli->query($req_suppr1);
        if ($res_suppr1==false) {
// La requête a echoué
echo "Error: Problème d'accès à la base \n";
exit();
}
else {
        $req_suppr="DELETE from t_visiteur_vis where vis_numero='".$numero."';";
    $res_suppr = $mysqli->query($req_suppr);
        if ($res_suppr==false) {
// La requête a echoué
echo "Error: Problème d'accès à la base \n";
exit();
}
else {
echo ("suppression reussi");
}
}
    
    echo($req_suppr);
    
    ?>