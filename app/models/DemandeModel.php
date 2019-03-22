<?php 

//$id_u=$_SESSION['id_u'];


require ('../index.php');

function place_dispo()
{
    global $bdd;
   $requete=$bdd->query("SELECT id_p FROM liste_places WHERE date_deb IS NULL ORDER BY id_p LIMIT 0,1");
    $place=$requete->fetchAll();
    return $place;

}


function affiche_place()
{
        global $bdd;
   $requete=$bdd->query("SELECT * FROM liste_places WHERE date_deb IS NULL ORDER BY id_p LIMIT 0,1");
$place=$requete->fetchAll();
    return $place;
}

function reserversql()
    

    {
    place_dispo(); 
    global $bdd;
    $requete=$bdd->query("UPDATE liste_places 
    SET date_deb = now(), id_u =".$id_u." WHERE id_p=".$place."" );
return $place;  
}

//    {
//    $requete->query("INSERT INTO liste_place VALUES ("'.$date_actuel.'", "'.$id_u.'")");
//

?>
 
