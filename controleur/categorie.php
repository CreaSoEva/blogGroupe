<?php
require_once './methodes/classcategorie.php';
require_once './methodes/classcategorieManager.php';
$cm = new CategorieManager($bdd);
$liste = $cm->getListeCategories();
$url = $_GET['valeur'];
$categorie = new CategorieManager($bdd);
$cat = $categorie->getCategorie($url);
echo "<h1>".$cat->getNom()."</h1>";
$articlequery = new ArticleManager($bdd);
$article = $articlequery->getListclasse($url);			
$um = new UserManager($bdd);

require_once "./vues/categorie.php";
?>