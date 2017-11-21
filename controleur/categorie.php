<?php
require_once './methodes/classcategorie.php';
require_once './methodes/classcategorieManager.php';
$cm = new CategorieManager($bdd);
$liste = $cm->getListeCategories();

require_once "./vues/categorie.php";
?>