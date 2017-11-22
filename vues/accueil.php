<!DOCTYPE html>
<html>
<head>
	<title>Blog  des alcooliques</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="./js/script.js"></script>
</head>

<body>
<!-- Header et aside -->
<?php 
	if (isset($_SESSION['id'])){
		require_once "./inc/headerconnec.inc.php";
		require_once "./inc/asideconnec.inc.php";
	}else{
		require_once "./inc/headernonconnec.inc.php";
		require_once "./inc/asidenonconnec.inc.php";
	}
?>
	<!-- Header et aside -->
	<!-- Section -->
	<section>
			<h1>Derniers articles</h1>
			<?php
			require_once './methodes/classcategorie.php';
			require_once './methodes/classcategorieManager.php';
			require_once "./methodes/article_class.php";
			require_once "./methodes/article_class_management.php";
			require_once "./methodes/user.php";
			require_once "./methodes/usermanager.php";
			$categorie = new CategorieManager($bdd);			
			$articlequery = new ArticleManager($bdd);
			$article = $articlequery->getList();			
			$um = new UserManager($bdd);

			foreach ($article as $art) {
				$cat = $categorie->getCategorie($art->getId_categorie());
				$auteur = $um->getUserById($art->getId_client());
				echo "<article>";
				echo "<p> Catégorie: ".$cat->getNom()."</p>
				<h3>".$art->getTitre()."</h3>
				<p>".$auteur->getUser()." le ".$art->getDate()."</p>
				<p>".$art->getContenu()."</p>";
				if (isset($_SESSION['id'])){
<<<<<<< HEAD
					echo "<button><a href='?page=modifier&value=".
					getId_article()."'>Modifier</a></button> <button><a href='?page=supprimer&value=".$art->getId_article()."'>Supprimer</a></button>";
=======
					echo "<button><a href='?page=modifier&value=".$value['id_article']."'>Modifier</a></button><button class='supprart' data-id=".$value['id_article'].">Supprimer</button>";
>>>>>>> 66589a71d4c866c3a7a3f6fea8ffcee805db2123
				}
				echo "<a href='?page=article&value=".$value['id_article']."'><span class='commentaire'>Commentaires<span></a>";
				echo "</article>";
			}
			?>
	</section>
	<!--Fin de section -->
	<?php 
	require_once "./inc/footer.inc.php";
?>


</body>
</html>