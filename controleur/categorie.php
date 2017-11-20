<?php
	include "methodes/classcategorieQuery.php";
	include "methodes/classcategorie.php";

	$categorieManager = new classcategorieManager($bdd);
	$categorie = $categorieManager->getcategorie($_POST['id_categorie'], $_POST['nom']);

	if($categorie){
		$_SESSION['connexion'] = $user->getuser();
		require_once "./inc/headerconnec.inc.php";
		require_once "./inc/asideconnec.inc.php";
	}else{
		$_SESSION['connexion'] = $user->getuser();
		require_once "./inc/headernonconnec.inc.php";
		require_once "./inc/asidenonconnec.inc.php";
	}
?>