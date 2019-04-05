<body class="text-center">
    <h3>Bienvenue</h3>
    <?php if($_SESSION['lvl'] == '1'){ ?>
              <a href="listeattentes">Liste d'attentes</a> <br>
              <a href="listeplaces">Liste des places</a> <br>
              <a href="listeusers">Liste des users</a> <br>
              <a href="#">Historique des attributions</a> <br>
    <?php } else { ?>
                <a href="demande">Réserver une place</a> <br>
    <?php } ?>
</body>
    
