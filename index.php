<!DOCTYPE html>
<html>
<head>
	<title>Blog  des alcooliques</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
</head>
<body>
	
<?php
	//Ouvrir la session
	session_start();
	//Connexion base de données
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=bloggroupe', 'root', '');
	}
	catch(Exception $e){
		die('Erreur : '.$e->getMessage());
	}
	//Affichage sur la page
	if (empty($_GET["page"])){
		require_once "controleur/accueil.php";
	}else{
		if ($_GET['page'] == 'categorie') {
				require_once "controleur/categorie.php";
			}
		if ($_GET['page'] == 'article') {
			require_once "controleur/article.php";
		}
		if ($_GET['page'] == 'creation') {
			require_once "controleur/creation.php";
		}
		if ($_GET['page'] == 'modification') {
			require_once "controleur/modification.php";
		}
		if ($_GET['page'] == 'inscription') {
		require_once "controleur/inscription.php";
		}
		if ($_GET['page'] == 'suppression') {
		require_once "controleur/suppression.php";
		}
	}
?>


</body>
</html>