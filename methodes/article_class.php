<?php
class Article{
private $id_article;
private $id_categorie;
private $id_client;
private $titre;
private $contenu;
private $date;



	public function __construct(array $donnees)
	{
		$this->setId_categorie($donnees['id_categorie']);
		$this->setId_client($donnees['id_client']);
		$this->setTitre($donnees['titre']);
		$this->setContenu($donnees['contenu']);
		$this->setDate($donnees['date']);
	}



	public function getId_article()
	{
		return $this->id_article;
	}
	public function setId_article($id_article)
	{
		$this->id_article = $id_article;
		return $this;
	}


	public function getId_categorie()
	{
		return $this->id_article;
	}
	public function setId_categorie($id_categorie)
	{
		$this->id_categorie = $id_categorie;
		return $this;
	}


	public function getId_client()
	{
		return $this->id_client;
	}
	public function setId_client($id_client)
	{
		$this->id_client = $id_client;
		return $this;
	}


	public function getTitre()
	{
		return $this->titre;
	}
	public function setTitre($titre)
	{
		$this->titre = $titre;
		return $this;
	}


	public function getContenu()
	{
		return $this->contenu;
	}
	public function setContenu($contenu)
	{
		$this->contenu = $contenu;
		return $this;
	}


	public function getDate()
	{
		return $this->date;
	}
	public function setDate($date)
	{
		$this->date = $date;
		return $this;
	}					

}



















?>