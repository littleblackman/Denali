<?php
/*
Creation de la classe UserManager
*/

class Commentaire
{
    /*
    Attributs qui correspondent aux champs de ma table commentaire :
    * @var      int $id_commentaire chiffre entier qui est la cle diu commentaire. Il est généra automatiquement dans la BDD
    * donc pas de setter à prevoir
     @var        int $id_commentaire id du commentaire
    
    */
        private $id_commentaire;
    
    /**
     *  @var       string $username nom de l'utilisateur qui à fait le commentaire
     * */
        private $username;
    /**
     * @var        string $commentaire commentaire lie à un article
     */
        private $commentaire;
    /*
     * @var        string $date_commentaire dale à laquelle le commentaire a été posté
     */
        private $date_commentaire;
    /*
     * @var        string $state etat du commentaire : non signale ou traite = 0, signaler = 1
     */
    private $state;
    /**
     * Creation de la methode __construct
     */
        public function __construct(array $data=[])
        {
           if(!empty($data)){
            $this->hydrate($data);}
        }
        
    /**
     * Creation de la methode __construct
     */
        public function hydrate(array $data)
        {
        	$this->id_commentaire=$data['id_commentaire'];
            $this->id_article=$data['id_article'];
            $this->username=$data['username'];
            $this->commentaire = $data['commentaire'];
            $this->date_acommentaire = new DateTime($data['date_commentaire']);
            $this->state = $data['state'];

        }
// création des getters (lisent le contenu d'une propriete d'une classe)
    /**
    * @return mixed
    */
        public function getIdCommentaire()
        {
            return $this->id_commentaire;
        }
    
    /**
    * @return mixed
    */
        public function getIdArticle()
        {
            return $this->id_article;
        }
    
    /**
    * @return       string $username nom de l'utilisateur qui à fait le commentaire
    */
        public function getUsername()
        {
            return $this->username;
        }
    
    /**
    * @return        string $commentaire commentaire lie à un article
    */
        public function getCommentaire()
        {
            return $this->commentaire;
        }
    
    /**
    * @return        string $commentaire commentaire lie à un article
    */
        public function getDateCommentaire()
        {
            return $this->date_commentaire;
        }
    /**
     * @return        string $commentaire commentaire lie à un article
     */
        public function getState()
        {
            return $this->state;
        }
    
// Création des setters (assigne une valeur à un attribut)
        /**
         * @param mixed $id_article
         *
         * @return self
         */
        public function setIdArticle($id_article)
        {
            $this->id_article = $id_article;
            return $this;
        }
    
        /**
         * @param       string $username nom de l'utilisateur qui à fait le commentaire $username
         *
         * @return self
         */
        public function setUsername($username)
        {
            $this->username = $username;
            return $this;
        }
    
        /**
         * @param        string $commentaire commentaire lie à un article $commentaire
         *
         * @return self
         */
        public function setCommentaire($commentaire)
        {
            $this->commentaire = $commentaire;
            return $this;
        }
    
        /**
         * @param        string $commentaire commentaire lie à un article $date_commentaire
         *
         * @return self
         */
        public function setDateCommentaire($date_commentaire)
        {
            $this->date_commentaire = $date_commentaire;
            return $this;
        }
}
 
