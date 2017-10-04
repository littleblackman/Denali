<?php


// instanciation = creation d'un objet : $article

	if(!empty($_GET['id']) AND (ctype_digit($_GET['id'])))
	{
		$idArticle = $_GET['id'];
		$articleManager = new ArticleManager();
		$result= $articleManager->readOne($idArticle);
		$article = new Article ($result);
		$commentaireManager = new CommentaireManager();
		$commentaires=$commentaireManager->readAllCommentsByPost();
		include 'templates/readArticle.php';
		exit;
	} else
	{
		header('location: templates/error.php');
		exit;
	}