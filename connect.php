<?php	
	try
	{
		$bdd = new PDO("mysql:host=localhost;dbname=parkin","root","");
	}
	catch(Exception $e)
	{
		die("bdd introuvable");
	}

	if(!isset($_GET['p'])) 
        $page = "accueil";
    else
    {
    if(!file_exists("controllers/".$_GET['p']."Controller.php"))
        $page = "404";
    else 
        $page = $_GET['p'];
    }
	
	ob_start();
        include "controllers/".$page."Controller.php"; 
		$content = ob_get_contents();
	ob_end_clean();
	
?>
