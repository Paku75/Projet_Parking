<?php 

function get_numplace()
{
    global $bdd;
    $id_u = $_SESSION['id_u'];

    $requete=$bdd->prepare("SELECT * FROM liste_places WHERE id_u='$id_u'");
    $requete->execute();
    return $requete->fetch();
} 

$numplace = get_numplace();

function add_place()
{
    global $bdd;
    $id_u = $_SESSION['id_u'];
    $dt = date('Y-m-d');
    
    $request=$bdd->prepare("INSERT INTO liste_places (id_u,date) VALUES(?,?)");
    $request->execute(array($id_u, $dt));
    return $request;
}

function select()
{
    global $bdd;
    $id_u = $_SESSION['id_u'];

    $requete=$bdd->query("SELECT * FROM liste_places WHERE id_u='$id_u'");
    $reponse_s=$requete->fetch();
    $num_pl=$reponse_s['num_p'];
    $date_d=$reponse_s['date_deb'];
    $date_f=$reponse_s['date_fin'];

    if($reponse_s)
    {
        $requete =$bdd->prepare("INSERT INTO `reservation` ( `num_p`, `date_deb`, `date_fin`, `id_u`)
        VALUE  ('$num_pl', '$date_d', '$date_f', '$id_u')");
        $reponse2=$requete->execute();
        return $reponse2;
    }
}

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
 
