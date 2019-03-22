<?php

 //Update
    function update(){
        $id  = $_POST["user_id"];
        $post = $_POST;
        $sql = "UPDATE items SET user_login = '".$post['user_login']."' ,user_pass = '".$post['user_pass']."'
              ,user_email = '".$post['user_email']."' 
              WHERE user_id = '".$id."'";

        $result = $bdd->query($sql);
        $sql = "SELECT * FROM users WHERE user_id = '".$id."'"; 
        $result = $bdd->query($sql);
        $data = $result->fetch_assoc();

        echo json_encode($data);
    }
  


 //Delete
    function delete(){
        $id  = $_POST["id"];
        $sql = "DELETE FROM items WHERE id = '".$id."'";

        $result = $mysqli->query($sql);

        echo json_encode([$id]);
     }

?>