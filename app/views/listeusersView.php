

<h1>Liste des users</h1>

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
            foreach ($users as $user)
            {   ?>
                <tr>
                    <td>
                        <label id="idPlace" for="id" class="control-label">
                            <?php echo $user['login']; ?>
                        </label>
                    </td>
                    <td>
                       <label id="login" for="login" class="control-label">
                           <?php echo $user['email']; ?>
                       </label>
                    </td>
                    <td>
                       <label id="date" for="date" class="control-label">
                           <?php echo $user['mdp']; ?>
                       </label>
                    </td>
                    <td>
                        <div class="edit">
                           <a id="btn_edit" onclick="return EditMovie.Onclick(this)" class="btn btn-default"> 
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

