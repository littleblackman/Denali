<?php
/*
Declaration de la classe article qui represente un article
*/
class Article
{
    //Attributs qui correspondent au champs de ma table article :
            /* 
             * @var  int            $id_article 		       chiffre entier qui est la cle de l'article .Il est genere automatiquement dans la BDD donc pas de setter à prevoir 
             */
            private $id_article;
            /*
             * @var  string 		$titre 			           titre de l'article 
             */
            private $titre;
            /*
             * @var  string 		$text			            texte de l'article 
             */
            private $text;
            /*
             * @var  string 		$date_ajout 	            date d'insertion de l'article 
             */
            private $date_ajout;
    /**
    Creation de la methode __contruct qui prend un tableau en parametre
    */
    
            public function __construct(array $data=[])
            {
                 if(!empty($data))
                 {
                    $this->hydrate($data);
                 }
            }
    /**
    Creation de la methode hydrate qui prend un tableau en parametre
    */
            public function hydrate(array $data)
            {
                $this->id_article=$data['id_article'];
                $this->titre = $data['titre'];
                $this->text = $data['text'];
                $this->date_ajout = new DateTime($data['date_ajout']);
            }
        
    /* les getteurs lisent le contenu d'une propriete d'une classe
    */
            function getId_article()
            {
                return $this->id_article;
            }
        
            function getTitre()
            {
                return $this->titre;
            }
        
            function getText()
            {
                return $this->text;
            }
        
            function getDate_ajout()
            {
                return $this->date_ajout;
            }
    /**
    *  Liste des setters (methode qui assigne une valeur à un attribue en verifiant son integrite)
    */
            function setTitre($titre)
            {
            	if(is_string($titre))
            	{
            		 $this->titre = $titre;
            	} 
            }
        
            function setText($text)
            {
            	if(is_string($text))
            	{
            		$this->text = $text;
            	}    
            }
        
            function setDate_ajout($date_ajout)
            {
                $this->date_ajout = $date_ajout;
            }

}