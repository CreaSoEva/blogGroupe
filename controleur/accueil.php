<?php 
	$categorie = new CategorieManager($bdd);			
	$articlequery = new ArticleManager($bdd);
	$article = $articlequery->getList();			
	$um = new UserManager($bdd);
	$compteur = new CommentaireManager($bdd);
	require_once "./vues/accueil.php";
?>