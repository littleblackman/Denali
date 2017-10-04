<?php
require_once ('config.php');
require_once('model/Bdd.php');
require_once('model/Router.php');

$url =$_GET['url'];
$router= new Router($url);
$router->getController();