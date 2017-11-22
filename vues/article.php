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
		require_once "./inc/header.inc.php";
		require_once "./inc/aside.inc.php";
?>
	<!-- Header et aside -->
	<!-- Section -->
	<section>
			<h1>Article</h1>
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
				echo "<form id='form' method='POST'>";
				if (isset($_SESSION['id'])){
					echo "<h2>Laissez un commentaire</h2><p>Vous êtes enregistré en tant que ".$_SESSION['nom']."</p>
					<textarea name='newcomment'>Ecrire un commentaire</textarea></br><input type='submit' name='postcomment' value='Poster'>

					";
				}else{
					echo "<h2>Laissez un commentaire</h2><p>Vous devez être enregistré pour poster un commentaire</p>";
				}
				echo "</form>";
				if (isset($_POST["newcomment"])) {
				// require_once './methodes/article_class.php';
				// require_once './methodes/article_class_management.php';
				// $art = new ArticleManager($bdd);
				// $art->add();
					echo "test ";
}
			?>
	</section>
	<!--Fin de section -->
	<?php 
	require_once "./inc/footer.inc.php";
?>


</body>
</html>