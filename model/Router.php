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
         "Logout" =>'/controller/Logout.php',
         "ReadArticle"=>'controller/ReadArticle.php',
         "Register" =>'controller/Register.php',
         "Update" =>'controller/Update.php',
         "Report" =>'controller/Report.php',
         "DelComment" =>'controller/DelComment.php',
         "ValidateComment" =>'controller/ValidateComment.php',
         "Forget" => 'controller/Forget.php'
    ];
//constructor qui prend en parametres l'url
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
            require_once($this->routes[$this->url]);
        }
        else
        {
            if(array_key_exists($this->url, $this->routes))
            {
                require($this->routes[$this->url]);
            } else
            {
                require_once('/controller/Error.php');
            }
        }
    }

}