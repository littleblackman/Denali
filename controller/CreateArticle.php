<?php
require_once('model/Bdd.php');
require('model/Article.php');
require('model/ArticleManager.php');

// Creation d'un objet

    if(!empty($_POST['titre']) OR (!empty($_POST['text'])))
    {
        $article = new Article();
        $article->setTitre($_POST['titre']);
        $article->setText($_POST['text']);
        $ArticleManager = new ArticleManager();
        $saveIsOk = $ArticleManager->create($article);
       
        
    }else
	{
	    
	}
//Inclusion du template
 include 'templates/createArticle.php';