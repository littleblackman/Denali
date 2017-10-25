<?php
session_start();
// instanciation = creation d'un objet : $article
	if(!empty($_POST['titre']) OR (!empty($_POST['text'])))
	{
		$articleManager = new ArticleManager();
		$id_article = $_POST['id_article'];
		$titre = $_POST['titre'];
		$text = $_POST['text'];
        $article= $articleManager->readOne($id_article);
		$articleManager->update($article);
		$article->setTitre($titre);
		$article->setText($text);
		$saveIsOk = $articleManager->update($article);
		header('location: Dashboard');
	}else
	{
		header('location: templates/error.php');
		exit;
	}
//include '../templates/update.php';