<?php
// instanciation = creation d'un objet : $article
$articleManager = new ArticleManager();
$articles = $articleManager->readAll();
// Inclusion du template
include_once 'templates/home.php';


