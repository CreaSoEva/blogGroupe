<<<<<<< HEAD
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
	<!-- Header -->
	<?php
	//require_once "./inc/headerconnec.inc.php";
	require_once "./inc/headernonconnec.inc.php";
	?>
	<!-- Fin de header -->
	<!-- Aside -->
	<?php 
	//require_once "./inc/asideconnec.inc.php";
	require_once "./inc/asidenonconnec.inc.php";
	?>
	<!-- Fin de aside -->
	<!-- Section -->
	<section>
			<h1>Derniers articles</h1>
		<article>
			<p>Catégorie: Vin</p>
			<h3>MERCUREY</h3>
			<p>Par Maxime le 17/11/2017</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<button class="inline">Modifier</button><button class="inline">Supprimer</button>
		</article>
		<article>
			<p>Catégorie: Champagne</p>
			<h3>Lanson</h3>
			<p>Par Sébastien le 17/11/2017</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<button class="inline">Modifier</button><button class="inline">Supprimer</button>
		</article>
	</section>
	<!--Fin de section -->
<?php 
	require_once "./inc/footer.inc.php";
=======
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
>>>>>>> ff59270ccf9d9f7396abd2598c95e05def52a16d
?>
