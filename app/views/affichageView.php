<?php require ('layoutView.php');
require "../Model/userModel.php";
?>

<html>

<div class="place">


<?php

$e=existe();

if($e==1)
{
    ?>

    Vous etes <?php echo $a=afficher_attente();?> eme sur la fil d'attente.

    <?php
}

    else {
            ?>
        Place attribuee : Vous etes a la place <?php echo affiche_place();

        }

            ?>




</div>



<div class="dispo">




<?php

$c=compter_historique();
if($c==0)
{
    echo "Vous n'avez aucun historique de reservation";
}

else{

    $reponse_h=historique();
    foreach ($reponse_h as $h){
    ?>
    <div>
    NUMERO DE RESERVATION: 00<?= $h['id_r'];?>
    PLACE ATTRIBUEE :     <?= $h['num_p'];?>
    DATE DE DEBUT :     <?= $h['date_deb'];?>
    DATE DE FIN :     <?= $h['date_fin'];?>
        </div>
    <br/>
    <?php
    }    
}?>
</div>


</html>
