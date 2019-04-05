<?php
    function get_users($deb,$fin)
    {
        global $bdd;
        
        $requete = $bdd->prepare("SELECT * FROM users LIMIT {$deb},{$fin}");
        $requete->execute();
        return $requete->fetchAll();
    }
    $users = get_users(0,10);
?>