<?php
    if(isset ($_POST['submit']))
        {     
            $user_login = $_POST['login'];
            $user_pass = sha1($_POST['mdp']);
            $requete = $bdd->query("SELECT * FROM users WHERE login ='$user_login' AND mdp='$user_pass'"); 
            if($reponse = $requete->fetch()) 
            {
                $_SESSION['connecte'] = true;
//                $user_id = $_SESSION['user_id'];
//                $user_login = $_SESSION['user_login'];
//                $user_level = $_SESSION['user_level'];
                $_SESSION['id_u'] = $reponse['id_u'];
                $_SESSION['login'] = $reponse['login'];
                $_SESSION['email'] = $reponse['email'];
                $_SESSION['lvl'] = $reponse['lvl'];
                if($user_level==1)
                {
                    header("Location:accueil");
                }
                else
                { 
                    header("Location:accueil");
                } 
            }
            else
            {
                echo 'Identifiant ou mot de passe incorrect';
            }
        }

    if(isset ($_POST['submit_ins']))
    {
       if(!empty($_POST['login']) AND !empty($_POST['email']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']))
            { 
                $user_login = htmlspecialchars($_POST['login']);
                $user_email1 = htmlspecialchars($_POST['email']);
                $user_pass1 = sha1($_POST['mdp']);
                $user_pass2 = sha1($_POST['mdp2']);
                $dt = date('Y-m-d H:i:s');
                $user_poste = $_POST['user_poste'];
                
                $loginlength = strlen($user_login);
                if($loginlength <= 255)
                {
                    if ($user_email1 == $user_email2)
                    {
                        if (filter_var($user_email1, FILTER_VALIDATE_EMAIL))
                        {
                            if ($user_pass1 == $user_pass2)
                            {
                                $requete = $bdd->prepare("INSERT INTO users (user_login,user_pass,user_email,user_date_inscription,user_poste) VALUES(:user_login,:user_pass1,:user_email1,:dt,:user_poste)");
                                $requete->bindValue(':user_login', $user_login);
                                $requete->bindValue(':user_pass1', $user_pass1);
                                $requete->bindValue(':user_email1', $user_email1);
                                $requete->bindValue(':dt', $dt);
                                $requete->bindValue(':user_poste', $user_poste);
                                try
                                {
                                    $requete->execute();
                                }
                                catch(PDOException $e)
                                {
                                    exit($e->getMessage());
                                }
                                
                                
                                $erreur = "Le compte a bien été crée";
//                                header('Location: admin');
                            } else {
                                $erreur = "Les mots de passes ne correspondent pas";
                            }
                        } else {
                            $erreur = "Format email invalide";
                        }
                    } else {
                        $erreur = "Les emails ne correspondent pas";
                    }
                } else {
                    $erreur = "Le login ne doit pas dépasser 255 caractères";
                }
            } else {
                $erreur = "Tous les champs doivent être complétés";
            } 
    }
?>