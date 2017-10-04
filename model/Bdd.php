<?php
/**
 *  class Bdd
 *  Permet la connexion à la  bdd
 */
class Bdd
{
	//Declaration des proprietes
    private $bdd;
    private $host      = "localhost";
    private $login     = "root";
    private $password  = "";

    public function __construct()
    {
            $bdd = new PDO('mysql:host='.$this->host.';dbname=blog;charset=utf8', $this->login, $this->password, array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            $this->bdd = $bdd;
    }
}
