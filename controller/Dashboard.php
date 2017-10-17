<?php
session_start();
$session = new UserSession();
$session->setUserName($_SESSION['user']);
$session ->getName($session);
    if($session ->getName($session) == false)
    {
        header('Location: Home');
    } else
    {
        // instanciation = creation d'un objet : $article
        $articleManager = new ArticleManager();
        $articles = $articleManager->readAll();
        $commentaireManager = new CommentaireManager();
        $comments = $commentaireManager->commentReported();
        // Inclusion du template
        include 'templates/dashboard.php';
    }

