<?php
require('model/Bdd.php');
require('model/Article.php');
require('model/ArticleManager.php');

// instanciation = creation d'un objet : $article

$articleManager = new ArticleManager();
$articles = $articleManager->readAll();

// Inclusion du template
include 'templates/home.php';


