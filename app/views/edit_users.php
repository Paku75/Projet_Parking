<?php
    require("layoutView.php");
?>

<h1>Liste des utilisateurs</h1>


<div class="table-responsive">
    <table id="myTable" class="table table-bordered display" style="width:100%">
        <thead>
            <tr>
                <th>
                    Login
                </th>
                <th>
                    Email
                </th>
                <th>
                    Mot de passe
                </th>
                <th>
                    Modifier
                </th>
            </tr>
        </thead>
        <tbody>
        <?php
            require "../Controller/adminController.php";
            foreach ($users as $user)
            {   ?>
                <tr>
                    <td>
                        <label id="login" for="login" class="control-label">
                            <?php echo $user['login']; ?>
                        </label>
                        <input type="hidden" class="edit-input1" />
                    </td>
                    <td>
                       <label id="email" for="email" class="control-label">
                           <?php echo $user['email']; ?>
                       </label>
                       <input type="hidden" class="edit-input1" />
                    </td>
                    <td>
                       <label id="mdp" for="mdp" class="control-label">
                           <?php echo $user['mdp']; ?>
                       </label>
                       <input type="hidden" class="edit-input1" />
                    </td>
                    <td>
                        <div class="edit">
                           <a id="btn_edit" onclick="return EditUser.Onclick(this)" class="btn btn-default"> 
                               <i id="edit" class="fa fa-pencil fa-lg"> </i>
                           </a>
                           <a id="btn_del" onclick="$del_u" class="btn btn-default"> 
                               <i id="edit" class="fa fa-trash fa-lg"> </i>
                           </a>
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
