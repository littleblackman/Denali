<?php
require_once('Article.php');
/*
Declaration de la classe ArticleManager 
*/
class ArticleManager extends BddManager
{
     /**
     * Insert un objet Article dans la BDD
     *
     * @param      Article  $article  
     *
     * @return    
     */
            public function create(Article $article)
             {
                    $bdd = $this->bdd;
                    $req = $bdd->prepare('INSERT INTO articles (titre, text, date_ajout) VALUES(:title, :text, :date_ajout)');
                    $req->execute(
                        array(
                        'title' => $article->getTitre(),
                        'text' => $article->getText(),
                        'date_ajout' => $article->getDate_ajout()
                    )
                    );
                    return $this;
             }
     /**
      * Recupere tous les objets Article de la bdd
      *
      * @return     array|bool  Retourne un tableau d'objets Article ou un tableau vide s'in n'y a aucun objet
      * ou false si une erreu survient
      */
            public function readAll()
            {
                $bdd = $this->bdd;
                // 1. Préparer la requête 
                $query = $bdd->prepare('SELECT * FROM articles ORDER BY date_ajout DESC ');
                // 2. Exécuter la requête
                $query->execute();
                // 3. On récupère les résultats de la requête
                $results = $query->fetchAll();
                // Création d'un tableau vide pour stocker les objets Article
                $articles = [];
                // On boucle sur les résultats de requête
                foreach($results as $data)
                {
                    $objArticle = new Article($data);
                    $articles[] = $objArticle;
                }
                // Retourner le tableau d'objets Article
                return $articles;
            } 
    /**
     * Recupere un objet Article a partir de son identifiant
     *
     * @param      int  $id_article  identifiant d'un article
     *
     * @return     bool|Article|null     false si une erreur survient, un objet Article si une correspondance est trouve, Null s'il n'y a aucune correspondance
     */
            public function readOne($id_article)
            {
                $bdd = $this->bdd;
               //preparation de la requete dont le resultat est stocke dans $query
                $query = $bdd->prepare('SELECT * FROM articles WHERE id_article = ?');
               //execution de la requete en recuperant l'id via $_get
                $query->execute(array($id_article));
               // je recupere le resultat de la requete par un fetch 
                $result = $query->fetch();
                $article = new Article ($result);
                return $article;
            }     
            
      /**
      * Supprime un objet Article stocke en bdd
      *
      * @param
      * 
      * return     bool true en cas de succes ou false en cas d'erreur
      */
             public function delete($id_article)
             {
                 $bdd = $this->bdd;
                 $query = $bdd->prepare ('DELETE FROM articles WHERE id_article=  ?');
                 $query ->execute(array($id_article));
                 $result=$query;
                 return $result;
             }
    
      /**
      * MAJ un objet Article stocke en bdd
      *
      * @param      Article  $article  objet de type Article
      * 
      * return     bool true en cas de succes ou false en cas d'erreur        
      */
             public function update(article $article)
             {
                 $bdd = $this->bdd;
                 $query = $bdd->prepare ("UPDATE articles SET titre =:titre, text =:text WHERE id_article=:id LIMIT 1");
                 $query ->bindValue(':titre', $article->getTitre(), PDO::PARAM_STR);
                 $query ->bindValue(':text', $article->getText(), PDO::PARAM_STR);
                 $query ->bindValue(':id', $article->getId_article(), PDO::PARAM_INT);
                 return $query ->execute();
             }
}

 