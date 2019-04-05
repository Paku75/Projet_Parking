<?php 
    require __DIR__ ."/../models/listeplacesModel.php";
    require __DIR__ ."/../views/listeplacesView.php";

if (isset($_POST['place_delete']))
    {
        $id = $_POST['id_delete'];
        delete_place($id);
    }
?>