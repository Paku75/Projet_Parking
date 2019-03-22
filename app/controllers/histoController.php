<?php 

$requete = $bdd->query("SELECT * FROM categories");
	$categories = $requete->fetchAll();



function get_reservation($id)
{
    global $bdd;
    
    $requete = $bdd->query("SELECT * FROM liste_places l,users u WHERE u.id_u = l.id_u AND id_r=".$id);
    return $requete->fetchAll();    
}

function get_reservation($id)
{
    global $bdd;
    $requete = $bdd->query("SELECT * FROM liste_places ORDER BY id_u ");
}
?>