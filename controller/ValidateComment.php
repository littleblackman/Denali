<?php
/**
 * Created by PhpStorm.
 * User: mishi
 * Date: 17/10/2017
 * Time: 12:46
 */
// Creation d'un objet
//recuperer l'id du commentaire passer en POST pour identifier le commentaire à signaler

if(!empty($_GET['id']) AND (ctype_digit($_GET['id'])))
{
    $id_commentaire = $_GET['id'];
    $commentaireManager = new CommentaireManager();
    $result= $commentaireManager->validateComment($id_commentaire);
    header('location: Dashboard');
} else
{
    //header('location: Error');
    //exit;
}
