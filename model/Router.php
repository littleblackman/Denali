<?php
class Router
{
    private $url;
    private $routes = [
         "" =>  '/controller/Home.php',
         "CreateArticle" => '/controller/CreateArticle.php',
         "Dashboard" => '/controller/Dashboard.php',
         "Delete" => '/controller/Delete.php',
         "EditArticle" => '/controller/EditArticle.php',
         "Home" => '/controller/Home.php',
         "InsertComments" => '/controller/InsertComments.php',
         "Login" => '/controller/Login.php',

    ];

//constructeur qui prend en parametres l'url
    public function __construct($url)
    {
        $this->url = $url;
    }

    /**
     * @return array
     */
    public function getRoutes()
    {
        return $this->routes;
    }
    public function getController()
    {
        if(empty($this->url))
        {
            echo "wtf";
            require_once($this->routes[$this->url]);
        }
        else
        {
            if(array_key_exists($this->url, $this->routes))
            {
                echo "lol";
                require($this->routes[$this->url]);
            } else
            {
                echo "help";
                require_once('/controller/Error.php');
            }
        }
    }

}