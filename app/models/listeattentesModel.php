<?php
    function get_attentes($deb,$fin)
    {
        global $bdd;
        
        $requete = $bdd->prepare("SELECT * FROM liste_attente,users WHERE liste_attente.id_u = users.id_u LIMIT {$deb},{$fin}");
        $requete->execute();
        return $requete->fetchAll();
    }
    $attentes = get_attentes(0,10);
?>