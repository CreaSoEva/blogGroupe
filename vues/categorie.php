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
		
			<?php	
			$url = $_GET['valeur'];
			
			require_once './methodes/classcategorie.php';
			require_once './methodes/classcategorieManager.php';
			require_once './controleur/categorie.php';
			require_once "./methodes/article_class_management.php";
			require_once "./methodes/article_class.php";
			$usersquery = new ArticleManager($bdd);
			$user = $usersquery->getListclasse($url);
			
			

			// <!-- si la valeur dans mon url est la valeur alcool fort, alors on va appele tous les articles de la categorie alcool fort -->

			
				if ($url == "Alcools Forts"){
							echo "<h1>$url</h1>";
							foreach ($user as $key => $value) {
							echo "<article>";
							echo "<p> Catégorie: ".$value['id_categorie']."</p>
							<h3>".$value['titre']."</h3>
							<p>".$value['id_client']." le ".$value['date']."</p>
							<p>".$value['contenu']."</p>";
							if (isset($_SESSION['id'])){
							echo "<button><a href='?page=modifier&value=".$value['id_article']."'>Modifier</a></button><button class='supprart' data-id=".$value['id_article'].">Supprimer</button>";
				}
				echo "</article>";
			}							
			 		}if ($url == "Vins"){
							echo "<h1>$url</h1>";
							foreach ($user as $key => $value) {
							echo "<article>";
							echo "<p> Catégorie: ".$value['id_categorie']."</p>
							<h3>".$value['titre']."</h3>
							<p>".$value['id_client']." le ".$value['date']."</p>
							<p>".$value['contenu']."</p>";
							if (isset($_SESSION['id'])){
							echo "<button><a href='?page=modifier&value=".$value['id_article']."'>Modifier</a></button> <button><a href='?page=supprimer&value=".$value['id_article']."'>Supprimer</a></button>";
				}
				echo "</article>";
			}	
			 			}if ($url == "Champagne"){
							echo "<h1>$url</h1>";
							foreach ($user as $key => $value) {
							echo "<article>";
							echo "<p> Catégorie: ".$value['id_categorie']."</p>
							<h3>".$value['titre']."</h3>
							<p>".$value['id_client']." le ".$value['date']."</p>
							<p>".$value['contenu']."</p>";
							if (isset($_SESSION['id'])){
							echo "<button><a href='?page=modifier&value=".$value['id_article']."'>Modifier</a></button> <button><a href='?page=supprimer&value=".$value['id_article']."'>Supprimer</a></button>";
				}
				echo "</article>";
			}
			}if ($url == "Bieres"){
							echo "<h1>$url</h1>";
							foreach ($user as $key => $value) {
							echo "<article>";
							echo "<p> Catégorie: ".$value['id_categorie']."</p>
							<h3>".$value['titre']."</h3>
							<p>".$value['id_client']." le ".$value['date']."</p>
							<p>".$value['contenu']."</p>";
							if (isset($_SESSION['id'])){
							echo "<button><a href='?page=modifier&value=".$value['id_article']."'>Modifier</a></button> <button><a href='?page=supprimer&value=".$value['id_article']."'>Supprimer</a></button>";
				}
				echo "</article>";
			}
			}	

			?>
				
		

	</section>
</body>
</html>