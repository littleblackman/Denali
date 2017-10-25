<?php


// instanciation = creation d'un objet : $article

	if(!empty($_GET['id']) AND (ctype_digit($_GET['id'])))
	{
		$idArticle = $_GET['id'];
		$articleManager = new ArticleManager();
        $article = $articleManager->readOne($idArticle);
		$commentaireManager = new CommentaireManager();
        $commentaires = $commentaireManager->readAllCommentsByPost($idArticle);
		include 'templates/readArticle.php';
		exit;
	} else
	{
		header('location: templates/error.php');
		exit;
	}