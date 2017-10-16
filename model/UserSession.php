<?php
/**
 * Created by PhpStorm.
 * User: mishi
 * Date: 13/10/2017
 * Time: 15:38
 */
class UserSession
{
    private $name;

    public function setUserName($name)
    {
      $_SESSION['user'] = $name;
      $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
}
