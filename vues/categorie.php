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
			require_once "./methodes/article_class.php";
			require_once "./methodes/article_class_management.php";
			require_once "./methodes/user.php";
			require_once "./methodes/usermanager.php";
			$categorie = new CategorieManager($bdd);
			$cat = $categorie->getCategorie($url);
			echo "<h1>".$cat->getNom()."</h1>";
			$articlequery = new ArticleManager($bdd);
			$article = $articlequery->getListclasse($url);			
			$um = new UserManager($bdd);

<<<<<<< HEAD
			foreach ($article as $art) {
				$auteur = $um->getUserById($art->getId_client());
				echo "<article>";
				echo "<p> Catégorie: ".$cat->getNom()."</p>
				<h3>".$art->getTitre()."</h3>
				<p>".$auteur->getUser()." le ".$art->getDate()."</p>
				<p>".$art->getContenu()."</p>";
				if (isset($_SESSION['id'])){
					echo "<button><a href='?page=modifier&value=".
					getId_article()."'>Modifier</a></button> <button><a href='?page=supprimer&value=".$art->getId_article()."'>Supprimer</a></button>";
				}
				echo "</article>";
			}
=======
			
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

>>>>>>> 66589a71d4c866c3a7a3f6fea8ffcee805db2123
			?>
				
		

	</section>
</body>
</html>