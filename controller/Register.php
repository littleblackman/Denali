<?php
// verification que des donnees ont ete postes
if(!empty($_POST))
{
        $user = new User();
        $user->setUsername($_POST['username']);
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['password']);
        if(!empty($user->getUsername()) && (!empty($user->getEmail())) &&  (!empty($user->getPassword())))
        {
                $userManager = new UserManager();
                $verify = $userManager->check($user);
                if($verify !== false)
                {
                    echo "change de pseudo";
                }else
                {
                    $userManager->create($user);
                }

        }else
        {
            $user->setErrors($errors);
        }
}
require_once 'templates/register.php';

