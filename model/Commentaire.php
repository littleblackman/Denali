<?php
/*
Creation de la classe UserManager
*/

class Commentaire
{

        private $id_commentaire;
        private $id_article;
        private $username;
        private $commentaire;
        private $date_commentaire;
        private $state = "0";

        public function __construct(array $data=[])
        {
           if(!empty($data)){
            $this->hydrate($data);}
        }
        public function hydrate(array $data)
        {
        	$this->id_commentaire=$data['id_commentaire'];
            $this->id_article=$data['id_article'];
            $this->username=$data['username'];
            $this->commentaire = $data['commentaire'];
            $this->date_acommentaire = new DateTime($data['date_commentaire']);
            $this->state = $data['state'];
        }
        public function getIdCommentaire()
        {
            return $this->id_commentaire;
        }
        public function getIdArticle()
        {
            return $this->id_article;
        }
         public function getUsername()
        {
            return $this->username;
        }
        public function getCommentaire()
        {
            return $this->commentaire;
        }
         public function getDateCommentaire()
        {
            return $this->date_commentaire;
        }
         public function getState()
        {
            return $this->state;
        }
         public function setIdArticle($id_article)
        {
            $this->id_article = $id_article;
            return $this;
        }
         public function setUsername($username)
        {
            $this->username = $username;
            return $this;
        }
         public function setCommentaire($commentaire)
        {
            $this->commentaire = $commentaire;
            return $this;
        }
         public function setDateCommentaire($date_commentaire)
        {
            $this->date_commentaire = $date_commentaire;
            return $this;
        }
        public function setState($state)
        {
            $this->state = $state;
            return $this;
        }
}
 
