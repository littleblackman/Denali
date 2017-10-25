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
        // Creation d'un objet
        if(!empty($_POST['titre']) OR (!empty($_POST['text'])))
        {
            $article = new Article();
            $date_ajout = new DateTime();
            var_dump($date_ajout);
            $article->setTitre($_POST['titre']);
            $article->setText($_POST['text']);
            $article->setDate_ajout($date_ajout->date);
            $ArticleManager = new ArticleManager();
            $saveIsOk = $ArticleManager->create($article);
        }
        //Inclusion du template
        include_once 'templates/createArticle.php';
    }

