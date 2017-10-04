<?php

// Création d'un objet

    if(!empty($_POST['username']) OR (!empty($_POST['Commentaire'])))
    {
        $CommentaireManager = new CommentaireManager();
        $commentaire = new Commentaire();
        $commentaire->setUsername($_POST['username']);
        $commentaire->setCommentaire($_POST['commentaire']);
        $saveIsOk = $CommentaireManager->create($commentaire);
        header('location: Home.php');
        exit;
    }else
    {
       include 'templates/insertComments.php';
       exit;
    }
// Inclusion du template
//include 'templates/createArticle.php';