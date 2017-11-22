<?php

class CategorieManager{
	private $_bdd;

	public function __construct($bdd){
		$this->setBdd($bdd);
	}

	public function getListeCategories(){
			$categories = [];

			$req = $this->_bdd->prepare('SELECT * FROM categorie');
			$req->execute();
			while($donnees = $req->fetch()){
				$categories[] = new categorie($donnees);
			}
			return $categories;
	}

	public function getCategorie($id) {
		    $id = $id;
			$req = $this->_bdd->prepare('SELECT * FROM categorie WHERE id_categorie =' .$id);
			$req->execute();
			$donnees = $req->fetch();
			return new categorie($donnees);
			
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