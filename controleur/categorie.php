<?php
require_once '../methodes/classcategorie.php';
require_once '../methodes/classcategorieManager.php';

try{
	$bdd = new PDO('mysql:host=localhost;dbname=bloggroupe', 'root', '');
}
catch(Exception $e){
	die('Erreur : '.$e->getMessage());
}	

$cm = new CategorieManager($bdd);
$liste = $cm->getListeCategories();

require_once "../vues/categorie.php";
?>