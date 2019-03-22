<?php 
    require "../Model/adminModel.php";
    //récupérer les 10 derniers articles
    $places = get_places(0,10);
    $attentes = get_attentes(0,10);
    $users = get_users(0,10);
?>