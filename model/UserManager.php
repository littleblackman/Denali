<?php

class UserManager extends Bdd
{
/**
 * Insert un objet User dans la BDD
 *
 * @param      User  $userarticle  
 *
 * @return    
 */
    public function create(User $user)
     {
            $bdd = $this->bdd;
            $query = $bdd->prepare('INSERT INTO users(username, email, password) VALUES(?,?,?)');
            $query->execute(array(
                $user->getUsername('username'),
                $user->getEmail('email'),
                $user->getPassword('password')));
            $result=$query;
            return $result;
         
     }

}

 