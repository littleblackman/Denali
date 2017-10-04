<?php
/*
Declaration de la classe CommentaireManager 
*/
class CommentaireManager extends Bdd
{
     /**
     * Insert un objet Commentaire dans la BDD
     *
     * @param      Commentaire $commentaire  
     *
     * @return    
     */
            public function create(Commentaire $commentaire)
             {
                 $bdd = $this->bdd;
                $query = $bdd->prepare('INSERT INTO commentaires(id_article,username, commentaire, date_commentaire) VALUES(?,?,?,NOW())');
                $query->execute(array( $_POST['id'],$_POST['username'], $_POST['commentaire']));
                $result=$query;
                return $result;
             }
     /**
      * Recupere tous les objets Commentaire de la bdd
      *
      * @return     array|bool  Retourne un tableau d'objets Commentaire ou un tableau vide s'in n'y a aucun objet
      * ou false si une erreur survient
      */
            public function readAllCommentsByPost()
            {
                $bdd = $this->bdd;
                // 1. Préparer la requête 
                $query = $bdd->prepare('SELECT * FROM commentaires WHERE id_article =? ORDER BY date_commentaire DESC');
                // 2. Exécuter la requête
                $query->execute(array($_GET['id']));
                // 3. On récupère les résultats de la requête
                $commentaires=$query->fetchAll();
                return $commentaires;
            } 
       /**
      * Supprime un objet Commentaire stocke en bdd
      *
      * @param      Commentaire  $commentaire  objet de type Commentaire
      * 
      * return     bool true en cas de succes ou false en cas d'erreur        
      */
             public function delete($id_article)
             {
                  $bdd = $this->bdd;
                  $query = $bdd->prepare ('DELETE FROM commentaires WHERE id_article=  ?');
                  $query ->execute(array($id_article));
                  $result=$query;
                  return $result;
             }
}