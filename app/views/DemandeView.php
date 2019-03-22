<html>

<script type="text/javascript" src="../../script/script.js" ></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="../../DataTables/datatables.css">


<html>




<div class="table-responsive">
    <table id="myTable" class="table table-bordered display" style="width:100%">
        <thead>
            <tr>
                <th>
                    Numero de votre place
                </th>
                
                <th>
                </th>
            </tr>
        </thead>
        <tbody>
        <?php
               require "../Controller/demandeController.php";

    ?>
    
    

        </tbody>
        
    </table>
</div>
<form>
    
    
                <?php foreach ($place_d as $places){
     ?>
    PLACE ATTRIBUEE :     <?= $places['num_p'];?>
    DATE DE DEBUT :     <?= $places['date_deb'];?>
                <?php 
} ?>
               
                
                
                


            </form>
<input type="button" value="sub">



<br><br>

<a href="http://localhost/projet-parking/app/View/Admin/adminView.php
">Revenir</a>

<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous">
</script>
<script type="text/javascript" charset="utf8" src="../../DataTables/datatables.js">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
<script type="text/javascript">
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
</script>