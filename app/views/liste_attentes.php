<?php
    require("layoutView.php");
?>

<h1>Liste des attentes</h1>

<div class="table-responsive">
    <table id="myTable" class="table table-bordered display" style="width:100%">
        <thead>
            <tr>
                <th>
                    Num attente
                </th>
                <th>
                    User
                </th>
                <th>
                    Attribuer
                </th>
            </tr>
        </thead>
        <tbody>
        <?php
            require "../Controller/adminController.php";
            foreach ($attentes as $attente)
            {   ?>
                <tr>
                    <td>
                        <label id="idPlace" for="id" class="control-label">
                            <?php echo $attente['id_a']; ?>
                        </label>
                    </td>
                    <td>
                       <label id="login" for="login" class="control-label">
                           <?php echo $attente['login']; ?>
                       </label>
                    </td>
                    <td>
                       <div class="attribuer">
                           <button id="attribuer_yes" class="btn btn-default"> 
                               <i class="fa fa-check fa-lg"> </i>
                           </button>
                           <button id="attribuer_no" onclick="" class="btn btn-default"> 
                               <i class="fa fa-times fa-lg"> </i>
                           </button>
                       </div>
                    </td>
                </tr>
      <?php }
        ?>
        </tbody>
    </table>
</div>

<br><br>

<a href="http://localhost/projet-parking-final/app/View/adminView.php
">Revenir</a>
