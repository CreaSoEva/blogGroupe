<?php 

class Categorie{
	private $_id_categorie;
	private $_nom;	

    public function __construct($donnees){
        $this->setIdCategorie($donnees['id_categorie']);
        $this->setNom($donnees['nom']);
    }

    public function getIdCategorie(){
        return $this->_id_categorie;
    }

    public function setIdCategorie($id_categorie){
        $this->_id_categorie = $id_categorie;
        return $this;
    }

    public function getNom(){
        return $this->_nom;
    }

    public function setNom($nom){
        $this->_nom = $nom;
        return $this;
    }
}




?>