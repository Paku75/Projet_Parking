
<?php

require dirname(__DIR__) . "/Model/userModel.php";




$number=compter();

if($number==0)
{
    insert_attente();
        //redirection vers l'affichage :
        header("Location:/View/affichageView.php");
}

else
    {
    reserversql2();
    select();
        //redirection vers l'affichage :
        header("Location:/projet-parking-final/app/View/affichageView.php");
    }




?>
