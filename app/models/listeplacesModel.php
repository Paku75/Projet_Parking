<?php
    function get_places()
    {
        global $bdd;
        
        $requete = $bdd->prepare("SELECT * FROM liste_places,users WHERE liste_places.id_u = users.id_u");
        $requete->execute();
        return $requete->fetchAll();
    }
    $places = get_places();
    
    function delete_place($id)
    {
            global $bdd;
            $requete = $bdd->prepare( "DELETE FROM liste_places WHERE id_p = :id" );
            $requete->bindParam(':id', $id);
               
            try
            {
                $requete->execute();
                header('Location: listeplaces');
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
            }
    }
    
?>