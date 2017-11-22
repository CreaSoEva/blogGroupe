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
			require_once "./methodes/article_class_management.php";
			require_once "./methodes/article_class.php";
			$usersquery = new ArticleManager($bdd);
			$user = $usersquery->getList();
			foreach ($user as $key => $value) {
				echo "<article>";
				echo "<p> Catégorie: ".$value['id_categorie']."</p>
				<h3>".$value['titre']."</h3>
				<p>".$value['id_client']." le ".$value['date']."</p>
				<p>".$value['contenu']."</p>";
				if (isset($_SESSION['id'])){
					echo "<button><a href='?page=modifier&value=".$value['id_article']."'>Modifier</a></button><button class='supprart' data-id=".$value['id_article'].">Supprimer</button>";
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