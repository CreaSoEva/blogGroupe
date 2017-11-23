<?php 
if (isset($_SESSION['id'])) {
	?>
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
	<!-- Section -->
	<section>
		<form class="form" method="POST">
			<label>Titre:</label><br/>
			<input type="text" name="titre"><br/><br/>
			<?php
			$art = new CategorieManager($bdd);
			$listes=$art->getListeCategories();
			?>
			<select name="categorie" id="choixcate">
				<?php
					foreach ($listes as $cat) {
						echo "<option value=\"".$cat->getIdCategorie()."\">".$cat->getNom()."</option>";
					}
				?>
			</select><br/><br/>
			<label>Contenu:</label><br/>
			<textarea name="contenu"></textarea><br/><br/>
			<input type="submit" name="publier" value="Publier">
		</form>
<?php
if (isset($_POST["categorie"])) {
	$art = new ArticleManager($bdd);
	$art->add();
	header("Location: index.php");
}
?>
	</section>
	<!--Fin de section -->
</body>
</html>
<?php
}else{
	header("Location: ./index.php");
}
 ?>