
<?php
	//Ouvrir la session
	session_start();
	//Connexion base de données
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=bloggroupe', 'root', '');
		$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	}
	catch(Exception $e){
		die('Erreur : '.$e->getMessage());
	}
	//Affichage sur la page
	if (empty($_GET["page"])){
		require_once "vues/accueil.php";
	}else{
		if ($_GET['page'] == 'connexion') {
				require_once "controleur/connexion.php";
		}
		if ($_GET['page'] == 'deconnexion') {
			require_once "controleur/deconnexion.php";
		}
		if ($_GET['page'] == 'categorie') {
				require_once "controleur/categorie.php";
			}
		if ($_GET['page'] == 'article') {
			require_once "controleur/article.php";
		}
		if ($_GET['page'] == 'creation') {
			require_once "controleur/creation.php";
		}
		if ($_GET['page'] == 'modifier') {
			require_once "controleur/modifier.php";
		}
		if ($_GET['page'] == 'inscription') {
		require_once "controleur/inscription.php";
		}
		if ($_GET['page'] == 'supprimer') {
		require_once "controleur/supprimer.php";
		}
		if ($_GET['page'] == 'listemembre') {
		require_once "controleur/listemembre.php";
		}
		if ($_GET['page'] == 'bannir') {
		require_once "controleur/bannir.php";
		}
	}
?>
