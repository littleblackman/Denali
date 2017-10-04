<?php

	if(!empty($_GET['id']) AND (ctype_digit($_GET['id'])))
	{
		$idArticle = $_GET['id'];
		$articleManager = new ArticleManager();
		$result= $articleManager->readOne($idArticle);
		$article = new Article ($result);
		include 'templates/editArticle.php';
		exit;
	} else
	{
		header('location: templates/error.php');
		exit;
	}
	
	