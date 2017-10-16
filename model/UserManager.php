<?php

class UserManager extends BddManager
{
/**
 * Insert un objet User dans la BDD
 *
 * @param      User  $userarticle  
 *
 * @return    
 */
    public function resetPassword()
    {

    }
    public function logout()
    {

    }
    public function MatchUser($username)
    {
        $bdd = $this->bdd;
        $query = $bdd-> prepare('SELECT * FROM users WHERE (username = ?)');
        $query->execute (array($username));
        return $verify = $query->fetch();
    }
    public function check($user)
    {
        $bdd = $this->bdd;
        $query = $bdd->prepare("SELECT id FROM users WHERE username = ? ");
        $query-> execute([$user->getUsername()]);
        return $verify = $query->fetch();
    }

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

