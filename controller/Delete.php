<?php
// instanciation = creation d'un objet : $article
if(!empty($_GET['id']) AND (ctype_digit($_GET['id'])))
{
    $id_article = $_GET['id'];
    $articleManager = new ArticleManager();
    $result= $articleManager->delete($id_article);
    header('location: Home');
} else
{
    header('location: Error');
    exit;
}
