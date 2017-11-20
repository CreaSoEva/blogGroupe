<?php

class CategorieManager{
	private $_bdd;

	public function __construct($bdd){
		$this->setBdd($bdd);
	}

	public function getListeCategories(){
			$categories = [];

			$req = $this->_bdd->prepare('SELECT * FROM `bloggroupe`.`categorie`;');
			$req->execute();
			while($donnees = $req->fetch()){
				$categories[] = new Categorie($donnees);
			}
			return $categories;
	}

	public function getCategorie(int $id) {

	}

	public function getBdd()
    {
        return $this->_bdd;
    }

    public function setBdd($bdd)
    {
        $this->_bdd = $bdd;
        return $this;
    }

}
?>