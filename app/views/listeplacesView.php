

<h1>Liste des places</h1>

<div class="table-responsive">
    <table id="myTable" class="table table-bordered display" style="width:100%">
        <thead>
            <tr>
                <th>
                    Num place
                </th>
                <th>
                    User
                </th>
                <th>
                    Date
                </th>
                <th>
                    Modifier
                </th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($places as $place)
            {   ?>
                <tr>
                    <td>
                        <label id="idPlace" for="id" class="control-label">
                            <?php echo $place['id_p']; ?>
                        </label>
                    </td>
                    <td>
                       <label id="login" for="login" class="control-label">
                           <?php echo $place['login']; ?>
                       </label>
                    </td>
                    <td>
                       <label id="date" for="date" class="control-label">
                           <?php echo $place['date']; ?>
                       </label>
                    </td>
                    <td>
                        <div class="edit">
                           <a href="#delete_<?= $place['id_p'] ?>" id="btn_edit" data-toggle="modal" class="btn btn-default"> 
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

<!-- Modal delete-->
<div class="modal fade" id="delete_<?= $place['id_p'] ?>" role="dialog" aria-labelledby="myModalLabedelete" aria-hidden="true">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span>Supprimer une place</h4>
      </div>
      <div style="color:black;" class="modal-body" style="padding:40px 50px;">
        <form id="client_delete" role="form" method="POST">
         <p>Voulez-vous supprimer la place numéro "<?= $place['id_p'] ?>"?</p>
         <input type="hidden" name="id_delete" value="<?= $place['id_p'] ?>">
         <button type="submit" name="place_delete" class="btn btn-success btn-block">Ok</button>
        </form>
      </div>
    </div>
  </div>
