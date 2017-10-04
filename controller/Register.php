<?php
require('model/Bdd.php');
require('model/User.php');
require('model/UserManager.php');


if(!empty($_POST['username']) && (!empty($_POST['email'])) && (!empty($_POST['password'])) && (!empty($_POST['password_confirm'])))
{
        $user = new User();
        $user->setUsername($_POST['username']);
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['password']);
        var_dump($user);

        if(isset($user))
        {
                $userManager = new UserManager();
                $userManager->create($user);
                require'templates/register.php';
        }else
        {
                echo $errors;
        }
               
}else
{
   require'templates/register.php' ;     
}

