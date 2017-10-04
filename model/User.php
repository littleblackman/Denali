<?php
/*
Creation de la classe User qui represente un utilisateur
*/
class User
{
    /*
    Attributs qui correspondent aux champs de ma table user :
    * @var      int $id_user chiffre entier qui est la cle de l'article. Il est généra automatiquement dans la BDD
    * donc pas de setter à prevoir
    */
    
    /*
     * @var        int $id  id correspondant à un user
     */
        private $id;
    /**
     *  @var       string $username nom de l'utilisateur 
     */
        private $username;
    /**
     * @var        string $email adresse mail du user
     */
        private $email;
    /*
     * @var        string $password mot de passe crypte de l'utrilisateur
     */
        private $password;
    /*
    * @var         tableau $errors recoltant les differentes erreurs
    */
        private $errors= "erreur";
   
    /**
     * Creation de la methode __construct
     */
    
        public function __construct(array $data=[])
        {
            if(!empty($data)){
            $this->hydrate($data); }
        }
    /**
     * Creation de la methode hydrate
     */
        public function hydrate(array $data)
        {
        	$this->id=$data['id'];
            $this->username=$data['username'];
            $this->email = $data['email'];
            $this->password = $data['password'];
        }
     /**
     * @return mixed
     */
        public function getId()
        {
            return $this->id;
        }
     /**
     * @return       string $username nom de l'utilisateur qui à fait le commentaire
     */
        public function getUsername()
        {
            return $this->username;
        }
     /**
     * @return        string $email adresse mail du user
     */
        public function getEmail()
        {
            return $this->email;
        }
     /**
     * @return        string $email adresse mail du user
     */
        public function getPassword()
        {
            return $this->password;
        }
     /**
     * @return        array $errors 
     */
        public function getErrors()
        {
            return $this->errors;
        }
     /**
         * @param        
         *
         * @return self
         */
         public function setErrors($errors)
         {
             $this->errors = $errors;
            	return $this;
         }
   
     /**
     * @param       string $username nom de l'utilisateur qui à fait le commentaire $username
         * @return self
         */
         public function setUsername($username)
        {
            if(!preg_match('/^[a-zA-Z0-9_]+$/', $_POST['username']))
        	{
        	    $this->errors ;
        	    return $this;
        	    
        	}else
        	{
        	    $this->username = $username;
            	return $this;
        	}
        }
        /**
         * @param        string $email adresse mail du user $email
         *
         * @return self
         */
        public function setEmail($email)
        {
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
            {
                $this->errors;
                return $this;
            }else
            {
            $this->email = $email;
            return $this;
            }
        }
    
        /**
         * @param        string $email adresse mail du user $password
         *
         * @return self
         */
        public function setPassword($password)
        {
             if($_POST['password'] != $_POST['password_confirm'])
             {
                 $this->errors;
                 return $this;
             }else
             {
                 $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                 $this->password = $password;
                 return $this;
             }
        }
}
 
