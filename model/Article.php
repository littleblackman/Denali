<?php
class Article
{
    private $id_article;
    private $titre;
    private $text;
    private $date_ajout;

    public function __construct(array $data=[])
    {
         if(!empty($data))
         {
            $this->hydrate($data);
         }
    }
    public function hydrate(array $data)
    {
        $this->id_article=$data['id_article'];
        $this->titre = $data['titre'];
        $this->text = $data['text'];
        $this->date_ajout = new DateTime($data['date_ajout']);
    }
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
