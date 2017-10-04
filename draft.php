<?php
class Router
{
    private $url;
    private $routes = [
        "" =>  "__DIR__.'/controller/Home.php'",
        "CreateArticle" => __DIR__.'/controller/CreateArticle.php',
        "Dashboard" => __DIR__.'/controller/Dashboard.php',
        "Delete" => __DIR__.'/controller/Delete.php',
        "EditArticle" => __DIR__.'/controller/EditArticle.php',
    ];

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
            require_once('controller/Home.php');
        }
        if(!empty($this->url))
        {
            foreach($this->routes as $key=>$value)
            {
                if($key === $this->url)
                {
                    var_dump($value);

                }else
                {
                    echo "WTF";
                }
            }
        }
    }

}