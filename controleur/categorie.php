<?php
	include "methodes/classcategorieManager.php";
	include "methodes/classcategorie.php";
	
	$liste = = new classcategorieManager($bdd);
    $listeCategorie = $liste->getListeCategories();

	if($categorie){
		$_SESSION['connexion'] = $user->getuser();
		require_once "./inc/headerconnec.inc.php";
		require_once "./inc/asideconnec.inc.php";
		require_once('classcategorie.php');
		require_once('classcategorieManager.php');
	}else{
		$_SESSION['connexion'] = $user->getuser();
		require_once "./inc/headernonconnec.inc.php";
		require_once "./inc/asidenonconnec.inc.php";
		
	}
?>