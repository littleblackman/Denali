<?php
require('model/Bdd.php');
require('model/Article.php');
require('model/ArticleManager.php');

// instanciation = creation d'un objet : $article

	if(!empty($_GET['id']) AND (ctype_digit($_GET['id'])))
	{
		$id_article = $_GET['id'];
		$articleManager = new ArticleManager();
		$result= $articleManager->delete($id_article);
		header('location: Home.php');
	} else 
	{
		header('location: templates/error.php');
		exit;
	}

//Inclusion du template
include 'templates/delete.php';