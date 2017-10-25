<?php
/**
 * Created by PhpStorm.
 * User: mishi
 * Date: 13/10/2017
 * Time: 15:38
 */
class UserSession
{
    public function initUserSession($name, $email, $role)
    {
        $this->setName($name);
        $this->setEmail($email)
        $this->setRole($role);       
    }
    
    public function setName($name)
    {
      $_SESSION['user']['name'] = $name;
    }
    public function getName()
    {
        return $_SESSION['user']['name'];
    }
    
    public function setEmail($email)
    {
      $_SESSION['user']['email'] = $email;
    }
    public function getEmail()
    {
        return $_SESSION['user']['email'];
    }
    
    public function setRole($role)
    {
      $_SESSION['user']['role'] = $role;
    }
    public function getRole()
    {
        return $_SESSION['user']['role'];
    }
    
}
