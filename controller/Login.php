<?php
session_start();
if(!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password']))
{
   $userManager = new UserManager();
   $result = $userManager->MatchUser($_POST['username']);
        if(password_verify($_POST['password'], $result['password']))
        {
            $_SESSION['user'] = $result['username'];
            $session = new UserSession();
            $session->setUserName($_SESSION['user']);
            $_SESSION['flash']['success'] = 'Vous etes maintenant connecte';
        }else
        {
            $_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrecte';
        }
}
// Inclusion du template
include 'templates/login.php';

