<?php
session_start();
require_once 'model/Autoloader.php';
Autoloader::register();
$url =$_GET['url'];
$router= new Router($url);
$router->getController();
