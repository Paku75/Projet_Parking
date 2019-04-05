
<?php

    require __DIR__ ."/../models/demandeModel.php";
    require __DIR__ ."/../views/demandeView.php";

if (isset($_POST['reserver'])) {
        add_place();
}


//$number=compter();

//if($number==0)
//{
//    insert_attente();
//        //redirection vers l'affichage :
//        header("Location:/View/affichageView.php");
//}
//
//else
//    {
//    reserversql2();
//    select();
//        //redirection vers l'affichage :
//        header("Location:/projet-parking-final/app/View/affichageView.php");
//    }
//



?>
