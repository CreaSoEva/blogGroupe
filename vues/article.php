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
			<h1>Article:</h1>
			<?php
			$id = $_GET['value']; 
			require_once "./methodes/article_class_management.php";
			require_once "./methodes/article_class.php";
			$artisolo = new ArticleManager($bdd);
			$article = $artisolo->get($id);
			echo "<article>";
			echo "<p> Catégorie: ".$article['id_categorie']."</p>
				<h3>".$article['titre']."</h3>
				<p>".$article['id_client']." le ".$article['date']."</p>
				<p>".$article['contenu']."</p>";
				echo "</article>";
			?>
	</section>
	<!--Fin de section -->
	<?php 
	require_once "./inc/footer.inc.php";
?>


</body>
</html>