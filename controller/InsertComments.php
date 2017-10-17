<?php
// Création d'un objet
    if(!empty($_POST['username']) OR (!empty($_POST['Commentaire'])))
    {
        $CommentaireManager = new CommentaireManager();
        $commentaire = new Commentaire();
        $commentaire->setUsername($_POST['username']);
        $commentaire->setCommentaire($_POST['commentaire']);
        $saveIsOk = $CommentaireManager->create($commentaire);
        header('location: Home');
        exit;
    }else
    {
        $_SESSION['flash']['warning'] = 'veuillez remplir tous les champs, svp';
        include 'templates/insertComments.php';
        exit;
    }
