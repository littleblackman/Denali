<?php
/*
Declaration de la classe CommentaireManager 
*/
class CommentaireManager extends BddManager
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
                 $query = $bdd->prepare('INSERT INTO commentaires(id_article, username, commentaire, date_commentaire, state) 
                 VALUES(:id_article, :username, :commentaire, :date_commentaire, :state)');
                 $query->execute(
                     array(
                         'id_article' => $commentaire->getIdArticle(),
                         'username' => $commentaire->getUsername(),
                         'commentaire' => $commentaire->getCommentaire(),
                         'date_commentaire' => $commentaire->getDateCommentaire(),
                         'state' =>$commentaire->getState()
                     )
                 );
                 return $this;
             }
     /**
      * Recupere tous les objets Commentaire de la bdd
      *
      * @return     array|bool  Retourne un tableau d'objets Commentaire ou un tableau vide s'in n'y a aucun objet
      * ou false si une erreur survient
      */
            public function readAllCommentsByPost($idArticle)
            {
                    $bdd = $this->bdd;
                    // 1. Préparer la requête
                    $query = $bdd->prepare('SELECT * FROM commentaires WHERE id_article =? ORDER BY date_commentaire DESC');
                    // 2. Exécuter la requête
                    $query->execute(array($idArticle));
                    while ($row = $query->fetch(PDO::FETCH_ASSOC))
                    {
                        $commentaire = new Commentaire();
                        $commentaire->hydrate($row);
                        $commentaires[] = $commentaire;
                    }
                    return $commentaires;
            }

       /**
      * Supprime un objet Commentaire stocke en bdd
      *
      * @param      Commentaire  $commentaire  objet de type Commentaire
      * 
      * return     bool true en cas de succes ou false en cas d'erreur        
      */
             public function delete($idcommentaire)
             {
                  $bdd = $this->bdd;
                  $query = $bdd->prepare ('DELETE FROM commentaires WHERE id_commentaire = ?');
                  $query ->execute(array($idcommentaire));
                  $result=$query;
                  return $result;
             }
             public function report($idcommentaire)
             {
                    $bdd = $this->bdd;
                    $query = $bdd->prepare ("UPDATE commentaires SET state = 1 WHERE id_commentaire = ? ");
                    $query -> execute(array($idcommentaire));
                    return $query ->execute();
             }
             public function commentReported()
             {
                    $bdd = $this->bdd;
                    // 1. Préparer la requête
                    $query = $bdd->prepare('SELECT * FROM commentaires ORDER BY state DESC, date_commentaire DESC LIMIT 0,10');
                    $query ->execute();
                    // 3. On récupère les résultats de la requête
                    $results=$query->fetchAll();
                    $comments =[];
                    foreach($results as $data)
                    {
                        $objCommentaire = new Commentaire($data);
                        $comments[] = $objCommentaire ;
                    }
                    return $comments;
             }
             public function validateComment($idcommentaire)
             {
                 $bdd = $this->bdd;
                 $query = $bdd->prepare ("UPDATE commentaires SET state = 0 WHERE id_commentaire = ? ");
                 $query -> execute(array($idcommentaire));
                 return $query ->execute();
             }
}
