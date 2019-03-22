<?php
    require_once(dirname(__DIR__) . '/Controller/userController.php');
?>
   <html>
    <head>
        <title>THE PAR KING</title>
        <script src="../script/script.js" ></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../DataTables/datatables.css">

    </head>

    <body class="text-center">
        <header>
        <div class="description" align="center">
                <a href="accueilView.php"><h3 class="masthead-brand"><strong>THE PAR KING</strong></h3></a>
                  <p>
                   VOTRE PLACE AU PRIX IMBATTABLE<br> 
                  </p>
            </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item active">


                <?php 
                    if(isset($_SESSION['connecte'])){
                ?>
                    <li><a class="nav-link" href="logout.php">Deconnexion</a></li>

                <?php
                    }
                    else{
                ?>
                        <li><a class="nav-link" href="loginView.php">Connexion</a></li>
                        <li><a class="nav-link" href="inscriptionView.php">Inscription<span class="sr-only"></span></a></li>
                <?php
                    }
                ?>
              

            </ul>
          </div>
        </nav>
        </header>


        <script
          src="https://code.jquery.com/jquery-3.3.1.js"
          integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
          crossorigin="anonymous">
        </script>
        <script type="text/javascript" charset="utf8" src="../DataTables/datatables.js">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
        </script>
        <script type="text/javascript">
                $(document).ready( function () {
                    $('#myTable').DataTable();
                } );
        </script>
    </body>
</html>
    
