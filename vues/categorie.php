<!DOCTYPE html>
<html>
<head>
	<title>Création d'article</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="./js/script.js"></script>
</head>

<body>
	<!-- Header -->
<?php 
		require_once "./inc/header.inc.php";
		require_once "./inc/aside.inc.php";
?>
	<!-- Header et aside -->
	<!-- Section -->
	<section>
		
			<?php	
			$url = $_GET['valeur'];
			
			require_once "./methodes/article_class_management.php";
			require_once "./methodes/user.php";
			require_once "./methodes/usermanager.php";
			$categorie = new CategorieManager($bdd);
			$cat = $categorie->getCategorie($url);
			echo "<h1>".$cat->getNom()."</h1>";
			$articlequery = new ArticleManager($bdd);
			$article = $articlequery->getListclasse($url);			
			$um = new UserManager($bdd);	

			// <!-- si la valeur dans mon url est la valeur alcool fort, alors on va appele tous les articles de la categorie alcool fort -->

			foreach ($article as $art) {
				$auteur = $um->getUserById($art->getId_client());
				echo "<article>";
				echo "<p> Catégorie: ".$cat->getNom()."</p>
				<h3>".$art->getTitre()."</h3>
				<p>".$auteur->getUser()." le ".$art->getDate()."</p>
				<p>".$art->getContenu()."</p>";
				if (isset($_SESSION['id'])){
					echo "<button><a href='?page=modifier&value=".$art->getId_article()."'>Modifier</a></button><button data-id=".$art->getId_article()." class='supprart'>Supprimer</button>";
				}
				echo "<a href='?page=article&value=".$art->getId_article()."'><span class='commentaire'>Commentaires<span></a>";
				echo "</article>";
			}

			

			?>
				
		

	</section>
</body>
</html>