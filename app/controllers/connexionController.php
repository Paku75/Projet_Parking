<?php

require (dirname(__DIR__) . '/Model/connexionModel.php');

if(isset ($_POST['submit_co']))
{
    $p=place_dispo_user();
	$login = $_POST['login'];
	$mdp = ($_POST['mdp']);

	$requete = $bdd->query("SELECT * FROM users WHERE login = '$login' LIMIT 1");

	if ($reponse = $requete->fetch() AND password_verify($mdp, $reponse['mdp'])) {
		$_SESSION['connecte'] = true;
		$_SESSION['id_u'] =$reponse['id_u'];
		$id_u = $reponse['id_u'];
		$login = $reponse['login'];
		$lvl = $reponse['lvl'];
		
		if($lvl==1) {
			header("Location:admin");
		} else {
		    if($p =! 0) {

                header("Location:/View/affichageView");

		                }
            else{
                header("Location:user");
            }
		}
	} else {
		echo 'Identifiant ou mot de passe incorrect';
	}
}
//    //Reserver
//    $requete->query("SELECT * FROM places p , users u WHERE date IS NULL");
//
//    $date_actuel = new DateTime($date,new DateTimeZone('Paris/Europe'));
//
//    function reserver()
//    {
//        if(isset($_POST["submit"]))
//        {
//            $id_p = ($_POST['id_p']);
//            reserversql();
//        }
//    }
//
//    $now=new dateTime();
//
//        if($resa=1)
//        {
//            $requete->query("INSERT INTO LISTE_PLACES VALUES ("'.$date_actuel.'")")
//        }
?>