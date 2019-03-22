<html>

<?php
               require "../Controller/demandeController.php";

    ?>
<form method="post" >

    <select class="form-control" id="exampleFormControlSelect1" name="place">
    
    
                <?php foreach ($place_d as $places){
     ?>
    <option value="<?=echo $places['id_p'];?>"><?= echo $places['num_p'];?></option>
                <?php 
} ?>
               
                
</select>