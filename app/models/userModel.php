<?php

require ('model.php');



function place_dispo()
{
    global $bdd;
    $requete=$bdd->query("SELECT id_p FROM liste_places WHERE date_deb IS NULL ORDER BY id_p LIMIT 0,1");
    $place_dispo=$requete->fetch();
    $place=$place_dispo['id_p'];
    return $place;
}

function affiche_place()
{
    //afficher la place attribuer
    global $bdd;
    $requete=$bdd->query("SELECT num_p FROM liste_places WHERE date_deb IS NULL ORDER BY id_p LIMIT 0,1");
    $place_d=$requete->fetch();
    $place_affiche=$place_d['num_p'];
    return $place_affiche;
}

function compter()
{
    global $bdd;
    $requete=$bdd->query("SELECT count(id_p) 
    FROM liste_places 
    WHERE date_deb is NULL ");
    $reponse_c=$requete->fetch();
    $nb_place=$reponse_c['count(id_p)'];
    return $nb_place;
}

function test(){
        $a=compter();
        $b=place_dispo();
        var_dump($a,$b);
}

function insert_attente()   
{
    global $bdd;
    $id_u = $_SESSION['id_u'];
    $requete=$bdd->prepare("INSERT INTO liste_attente (id_u) VALUE ('$id_u')");
    $reponse=$requete->execute();
    return $reponse;
}

function afficher_attente()
    {
        global $bdd;
        $id_u = $_SESSION['id_u'];
        $requete=$bdd->query("SELECT id_a FROM liste_attente WHERE id_u='$id_u'");
        $affiche_a=$requete->fetch();
        $aff_a=$affiche_a['id_a'];
        return $aff_a;
    }


function existe()
{
    global $bdd;
    $id_u = $_SESSION['id_u'];
    $requete=$bdd->query("SELECT count(id_a) FROM liste_attente WHERE id_u='$id_u' ");
    $reponse_e=$requete->fetch();
    $existe=$reponse_e['count(id_a)'];
    return $existe;
}

function reserversql2()
{

    global $bdd;
    global $_SESSION;
    $place = place_dispo();
    $id_u = $_SESSION['id_u'];
    $requete = $bdd->prepare("UPDATE liste_places
	SET date_deb = (CURRENT_DATE) ,
		date_fin = (ADDDATE(CURRENT_DATE, INTERVAL 1 MONTH )),
		id_u = ". $id_u ."
	WHERE id_p = ". $place.""
    );
    return $requete->execute()  ;
    $dernier_id= $bdd->lastInsertId();
var_dump($dernier_id);
    
//
//    $place_n=$requete=$bdd->query("SELECT num_p FROM liste_places WHERE id_u=".$id_u."");
//    var_dump($place_n);
}





function place_dispo_user()
{
    global $bdd;
    $id_u=$_SESSION['id_u'];
    $requete=$bdd->query("SELECT count(id_p) from liste_places WHERE id_u=".$id_u."");
    $reponse_1=$requete->fetch();
    $nb_place_reserver=$reponse_1['count(id_p)'];
    return $nb_place_reserver;

}

function historique()
{
    global $bdd;
    $id_u=$_SESSION['id_u'];    
    $requete=$bdd->query("SELECT * FROM reservation WHERE id_u='$id_u' order by  id_r ");
    $reponse_h=$requete->fetchAll();
    return $reponse_h;
}

function compter_historique()
{
    global $bdd;
    $id_u=$_SESSION['id_u'];
    $requete=$bdd->query("SELECT count(id_r) from reservation WHERE id_u=".$id_u."");
    $reponse_2=$requete->fetch();
    $nb_historique=$reponse_2['count(id_r)'];
    return $nb_historique;
}



//$requete = $bdd->query("SELECT * FROM liste_places WHERE id_u = ".$id_u.");
//$reponse = $requete->fetch();
//$temps_restant = $reponse['date_fin'] - time();
