<?php
/**
 * Created by PhpStorm.
 * User: mishi
 * Date: 17/10/2017
 * Time: 12:46
 */
// Creation d'un objet
//recuperer l'id du commentaire passer en POST pour identifier le commentaire àsignaler
if((isset($_POST['id_commentaire'])) && (!empty($_POST['id_commentaire'])))
    {
        $commentaireManager = new CommentaireManager();
        $commentaireManager->report($_POST['id_commentaire']);
        header('Location: Home');
    }