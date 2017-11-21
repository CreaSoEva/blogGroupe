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
	<!-- Header -->
<?php 
	require_once "./inc/headerconnec.inc.php";
	require_once "./inc/asideconnec.inc.php";
?>
	<!-- Fin de aside -->
	<!-- Section -->
	<section>
		<form class="form" method="POST">
			<label>Titre:</label><br/>
			<input type="text" name="titre"><br/><br/>
			<?php
			require_once './methodes/classcategorie.php';
			require_once './methodes/classcategorieManager.php'; 
			$choux = new CategorieManager($bdd);
			$zoubida=$choux->getListeCategories();
			?>
			<select name="categorie" id="choixcate">
				<?php
					foreach ($zoubida as $cat) {
						echo "<option value=\"".$cat->getNom()."\">".$cat->getNom()."</option>";
					}
				?>
			</select><br/><br/>
			<label>Contenu</label><br/>
			<textarea name="contenu"></textarea><br/><br/>
			<input type="submit" name="publier" value="Publier">
		</form>

<?php
if (isset($_POST["categorie"])) {
	require_once './methodes/article_class.php';
	require_once './methodes/article_class_management.php';
	$art = new ArticleManager($bdd);
	$art->add();
	header("Location: index.php");
}



?>


	</section>




	<!--Fin de section -->
<?php 
	
	require_once "./inc/footer.inc.php";
?>


</body>
</html>
<?php
}else{
	header("Location: ../index.php");
}
 ?>


