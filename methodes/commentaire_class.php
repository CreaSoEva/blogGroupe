<?php 

class Commentaire{
private $id_commentaire;
private $id_article;
private $auteur;
private $contenu;
private $date;

	public function __construct($comdonnes)
	{
		$this->id_commentaire = ($comdonnes['id_commentaire']);
		$this->id_article = ($comdonnes['id_article']);
		$this->auteur = ($comdonnes['auteur']);
		$this->contenu = ($comdonnes['contenu']);
		$this->date = ($comdonnes['date']);
	}

    public function getIdCommentaire(){
        return $this->id_commentaire;
    }

    public function setIdCommentaire($id_commentaire){
        $this->id_commentaire = $id_commentaire;

        return $this;
    }

    public function getIdArticle(){
        return $this->id_article;
    }

    public function setIdArticle($id_article){
        $this->id_article = $id_article;

        return $this;
    }

    public function getAuteur(){
        return $this->auteur;
    }

    public function setAuteur($auteur){
        $this->auteur = $auteur;

        return $this;
    }

    public function getContenu(){
        return $this->contenu;
    }

    public function setContenu($contenu){
        $this->contenu = $contenu;

        return $this;
    }

    public function getDate(){
        return $this->date;
    }

    public function setDate($date){
        $this->date = $date;

        return $this;
    }
}

?>