<?php

require_once "model.php";

    

     function attribuer($id)
    {
        global $bdd;
        $requete = $bdd->query("INSERT INTO liste_places(id_u) VALUES(2)");
        return $requete->fetch();
    }

    function delete_user($id)
    {
        global $bdd;
        $requete = $bdd->query("DELETE FROM users WHERE id_u = " . $id);
    }

//    {
//        $requete->query(UPDATE liste_place
//SET num_p="'.$place.'", date = "'.$date_actuel.'", id_u = "'.id_u.'")
//    }

    
        

//    function valider_place()
//    {
//        global $bdd;
//        $requete = $bdd->prepare("")
//    }